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
    require "../El-Comerciante/model/comanda.php";
    require "../El-Comerciante/model/usuario.php";
    require "../El-Comerciante/model/producto.php";
    require "../El-Comerciante/model/helado.php";
    $conn =mysqli_connect(
        'localhost',
        'root',
        '',
        'elcomerciantedb',
        '3306'
    );
$compenarr = comanda::cargarComandaPendiente($conn);
$salida = $compenarr[2];
$precio = $salida->getTotal();
echo $precio;
    ?>
</body>
</html>