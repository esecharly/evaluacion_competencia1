<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Iron Velvet</title>

    <?php
        require_once '../app/dependencies2.php';
    ?>
    
</head>
<body class="bg-darkBlue slide-in-left orange-cursor main">
    <video autoplay muted loop playsinline src="../raw/video/background particles.mp4" type="video/mp4" id="bgVideo"></video>
    <div class="container text-white orange-cursor">
        <div class="row">
            <?php
                require_once '../view/navbar.php';
            ?>
            <div class="col pt-7">
                
                <h2 class='text-grotesqueBold text-orange'>01</h2>
                <h2 class='text-gothic-body'>Responsive</h2>
                <h2 class='text-gothic-body'>GRID with CSS</h2>
                <br>
                <br>
                <h3 class="text-grotesqueBold">Feb, 2021</h3>
                <br>
                <h3 class="text-grotesqueBold">
                    <span class="pe-4 text-decoration-underline">
                        <a href="works_en.php" class="link-light orange-cursor">OUR WORK</a>
                    </span>
                    <span class="text-decoration-underline">
                        <a href="about_en.php" class="link-light orange-cursor">ABOUT US</a>
                    </span>
                </h3>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2 class='text-grotesqueBold text-orange pt-7' data-aos="fade-up">02</h2>
                <h2 class='text-gothic-body' data-aos="fade-up">Buttons</h2>
                <h2 class='text-gothic-body' data-aos="fade-up">with SCSS</h2>
                <br>
                <br>
                <h3 class="text-grotesqueBold" data-aos="fade-up">Feb, 2021</h3>
                <br>
                <h3 class="text-grotesqueBold">
                    <span class="pe-4 text-decoration-underline">
                        <a href="works_en.php" class="link-light orange-cursor" data-aos="fade-up">OUR WORK</a>
                    </span>
                    <span class="text-decoration-underline">
                        <a href="about_en.php" class="link-light orange-cursor" data-aos="fade-up">ABOUT US</a>
                    </span>
                </h3>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
            </div>
            <div class="col-md-3 pt-7">
                <img src="../raw/img/grid.png" class="fade-in pb-4" alt="" width="500px" height="400px">
                <br>
                <br>
                <br>
                <br>
                <img src="../raw/img/sass.png" class="pb-4 pt-7 fade-in" alt="" data-aos="fade-up" width="500px" height="400px">
                <br>
                <br>
                <br>
                <br>
            </div>
            <div class="col-sm-2 pt-5">
                <a href="https://www.facebook.com/Error-de-Capa-8-101412988484705" class="btn btn-outline-light btn-lg me-0 text-grotesqueBold orange-cursor">CONTACT US</a>
            </div>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
</body>
</html>