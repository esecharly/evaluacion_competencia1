<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Iron Velvet</title>

    <?php
        require_once 'app/dependencies.php';
    ?>
    
</head>

<?php
    if(isset($_GET['vista_solicitada'])){
        switch($_GET['vista_solicitada']){
            case 'welcome':{
                require_once 'view/welcome.php';
                break;
            }case 'main_en':{
                require_once 'view/main_en.php';
                break;
            }
        }
    }else {
        require_once 'view/welcome.php';
    }
?>


</html>