$(document).ready(function(){

    var sound = new Howl({
        src: ['../raw/sounds/Firelink_Shrine.mp3'],
        autoplay: true,
        loop: true,
        volume: 0.5,
      });
    var soundCheck = false;
    sound.play();
    console.log('check');
    soundCheck = true;

    $('#volume').click(function(){
        if(soundCheck == true){
            sound.pause();
            soundCheck = false;
            console.log('check2');
        }else {
            sound.play();
            soundCheck = true;
            console.log('check3');
        }
    });
});   

