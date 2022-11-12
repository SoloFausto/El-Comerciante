<!DOCTYPE html>

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   require "/wamp/www/El-Comerciante/controller/include/connection.php";
    $sql = "SELECT `idHelado` FROM `comanda_envase_helado` WHERE `numEnvase` = $numEnvase AND `numComanda` = $idComanda ;";
    $result = mysqli_query(conectar(),$sql);
    $resultObj = mysqli_fetch_object($result);
    $rr = $resultObj->idHelado;
    echo gettype($resultObj);
   ?>

</body>
</html>
