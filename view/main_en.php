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
<body class="bg-darkBlue slide-in-left orange-cursor">
    <video autoplay muted loop src="../raw/video/background particles.mp4" type="video/mp4" id="bgVideo"></video>
    <div class="container text-white orange-cursor">
        <div class="row">
            <?php
                require_once '../view/navbar.php';
            ?>
            <div class="col pt-7">
                <p class="text-grotesque2 mb-1">ENTER THE TALE OF</p>
                <p class="text-grotesque2">A MEXICO BASED DIGITAL STUDIO</p>
                <h2 class='text-gothic-body'>Wrecking Boundaries</h2>
                <h2 class='text-gothic-body text-orange'>one web experience</h2>
                <h2 class='text-gothic-body'>at a time</h2>
                <br>
                <h3 class="text-grotesqueBold">
                    <span class="pe-4 text-decoration-underline">
                        <a href="works_en.php" class="link-light orange-cursor">OUR WORK</a>
                    </span>
                    <span class="text-decoration-underline">
                        <a href="about_en.php" class="link-light orange-cursor">ABOUT US</a>
                    </span>
                </h3>
                
            </div>
            <div class="col-md-3 pt-7">
                <img src="../raw/img/giphy.webp" class="fade-in" alt="" width="500px" height="500px">
            </div>
            <div class="col-sm-2 pt-5">
                <a href="https://www.facebook.com/Error-de-Capa-8-101412988484705" class="btn btn-outline-light btn-lg me-0 text-grotesqueBold orange-cursor">CONTACT US</a>
            </div>
        </div>
    </div>

   
</body>
</html>