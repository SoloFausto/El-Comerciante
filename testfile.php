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
   require_once "/Xampp/htdocs/El-Comerciante/controller/personal/comandacontroller.php";

    $conn =mysqli_connect(
        'localhost',
        'root',
        '',
        'elcomerciantedb',
        '3306'
    );
$com = new comanda($conn);
$com->cargarComandaPorNumero(6);

echo $com->deleteComanda();
    ?>
</body>
</html>