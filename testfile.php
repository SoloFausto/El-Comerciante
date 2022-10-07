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
    require "../El-Comerciante/model/Usuario.php";
    $conn =mysqli_connect(
        'localhost',
        'root',
        '',
        'elcomerciantedb',
        '3306'
    );
    $usr = new Usuario($conn);
    $usr->loadUserById(2);
    $contrasena = $usr->setContrasena("da");
    $permiso = $usr->setPermComandas(2);
    echo "";
    ?>
</body>
</html>