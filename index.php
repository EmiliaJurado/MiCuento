<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php require_once 'app/config.php'; ?>
    <?php require_once 'app/dependencias.php'; ?>
</head>

<body>

<?php
    if(isset($_GET['vista_solicitada'])){
        switch($_GET['vista_solicitada']){
            case'presentacion':{
                require_once 'view/presentacion.php';
                break;
            }case 'inicio':{
                require_once 'view/inicio.php';
                break;

            }case 'desarrollo':{
                require_once 'view/desarrollo.php';
                break;
            }case 'descenlace':{
                require_once 'view/descenlace.php';
                break;
            
            }case 'final':{
                require_once 'view/final.php';
                break;

                }default:{
                require_once 'view/default.php';
                break;
                }
        }
    }else{
        require_once 'view/default.php';
    }

?>
</body>
</html>