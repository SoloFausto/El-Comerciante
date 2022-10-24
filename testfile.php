<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    // require "../El-Comerciante/model/comanda.php";
    //require "../El-Comerciante/model/usuario.php";
    //require "../El-Comerciante/model/producto.php";
    //require_once "../El-Comerciante/model/helado.php";
    require_once "../El-Comerciante/model/envase.php";
include "/Xampp/htdocs/El-Comerciante/controller/include/connection.php";
   //require_once "/Xampp/htdocs/El-Comerciante/controller/personal/comandacontroller.php";

    $conn =mysqli_connect(
        'localhost',
        'root',
        '',
        'elcomerciantedb',
        '3306'
    );
    $envArr = envase::loadAllEnvs(mysqli_connect(
        'localhost',
        'root',
        '',
        'elcomerciantedb',
        '3306'
    ));
    $salida = $envArr[1];
    $id = $salida->loadAllEnvs(); 
    echo $id;
    ?>
</body>
</html>
