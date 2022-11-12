<!DOCTYPE html>
<?php require "/Xampp/htdocs/El-Comerciante/controller/personal/comanda/comandacontroller.php";

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
<<<<<<< HEAD
<<<<<<< HEAD
   require_once __DIR__. '/vendor/autoload.php';
   $fixer = new Fixer("/Xampp/El-Comerciante"); 
   $fixer->report($inspectDirPath, "APP_ROOT");    // Only reporting.

=======
   $variable1 = "dada";
   if($variable1 == "hola"){
    echo "es verdadero";

   } else if($variable1 == "adios"){
    echo "adios";
   }
   else{
    echo "es falso";
   }
>>>>>>> parent of 64e2b0c (8)
=======
   require "/wamp/www/El-Comerciante/controller/include/connection.php";
    $sql = "SELECT `idHelado` FROM `comanda_envase_helado` WHERE `numEnvase` = $numEnvase AND `numComanda` = $idComanda ;";
    $result = mysqli_query(conectar(),$sql);
    $resultObj = mysqli_fetch_object($result);
    $rr = $resultObj->idHelado;
    echo gettype($resultObj);
>>>>>>> parent of 54dbb49 (dsaldjskal)
   ?>

</body>
</html>
