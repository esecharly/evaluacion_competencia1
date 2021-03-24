const canvas = document.getElementById('bgCanvas');
const ctx = canvas.getContext('2d');

// BG Color
const background = "#1d1d2b";
// An array of arrays, each containing Red, Green, Blue values
// Each array is a color that we wish our embers to be randomized to
const colors = [[128, 17, 0], [182, 34, 32], [252, 100, 0], [250, 192, 0], [252, 191, 73]];
const PI_2 = 2 * Math.PI;

const numEmbers = 600;

// Initially set our canvas to fill the window
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
let cw = canvas.width;
let ch = canvas.height;

// Random number generator
function randomRange(min, max) {
    return (Math.random() * (max - min + 1)) - 1;
};

// (X position, Y position, Radius, Color)
// The canvas API doesn't have a built in .circle method
// We create one by drawin a full arc, and filling it
function drawCircle(x, y, r, style) {
    ctx.beginPath();
    ctx.arc(x, y, r, 0, PI_2, false);
    ctx.fillStyle = style;
    ctx.fill();
};

//resize canvas with window
window.addEventListener("resize", resizeCanvas, false);
function resizeCanvas(e){
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    cw = canvas.width;
    ch = canvas.height;
}

const Ember = class{
    constructor(){
        // Select a random color from the list of colors
        this.color = colors[~~randomRange(0, colors.length - 1)];
        // Convert our colors from the array of RGB values to an rgba value
        this.rgb = 'rgba(' + this.color[0] + ',' + this.color[1] + ',' + this.color[2];
        // Create the random radius
        this.radius = ~~randomRange(2, 6);
        // Set the diameter for collision detection with the top of the frame
        this.diameter = this.radius * 2;
        // Run the replace method to initialize the rest of the 
        this.replace();
    }

    replace(){
        this.opacity = 0;
        // Randomize how quickly the ember should fade in and out
        this.opacityChange = 0.005 * randomRange(1, 10);
        // Randomize the spawn position of the ember
        this.x = ~~randomRange(-this.diameter, window.innerWidth - this.diameter);
        this.y = ~~randomRange(-20, window.innerHeight - this.diameter);
        // set max values of right and bottom window for collision detection
        this.xMax = window.innerWidth - this.radius;
        this.yMax = window.innerHeight + this.radius;
        // Set the speed an ember should have
        this.xTravel = randomRange(0, 2); 
        // Set the amount of left and right travel an ember shoudl have
        this.yTravel = 0.5 * this.radius + randomRange(-1, 1);
    }

    draw(){
        // Alter the speed the ember rises
        this.x += this.xTravel;
        // Alter the speed at which the ember sways left or right
        this.y -= this.yTravel;
        
        // Slowly alter ember opacity each draw cycle
        this.opacity += this.opacityChange;
        
        // Flip the direction of opacity change once it reaches full 'brightness'
        if (this.opacity > 1){
            this.opacity = 1;
            this.opacityChange *= -1;
        }

        // 're-initialize' this ember if our opacity reaches 0 or ember reaches the top
        // This saves a bit of memory, as we're not having to remove and add a new ember
        // to the embers array each time we need a "new" one!
        if (this.opacity < 0 || this.y < 0){
            this.replace();
        }
        
        // Draw the actual ember
        // Concatenate the rgb string with ', <opacity>)' to create rgba()
        drawCircle(~~this.x, ~~this.y, this.radius, this.rgb + ',' + this.opacity + ')');
    }
}

// Create our global embers array that will hold each individual ember
let embers = []

// Initially populate our embers array with the number of embers we previously declared
for (let i = 0; i <= numEmbers; i++){
    embers.push(new Ember);
}

// Every frame, clear the canvas and redraw each ember
function update() {
    // recursively call this update function every frame
    requestAnimationFrame(update);
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i <= embers.length - 1; i++){
        embers[i].draw();
    }
}

update();
