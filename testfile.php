<!DOCTYPE html>
  <?php include ('model/Tableta.php');
        include ("controller/connection.php");
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

      $nombreTableta = "Mesa";
      $numeroNombre = 1;
      $todo = "$nombreTableta$numeroNombre";
      $tableta = new tableta(conectar());
      while ($tableta->buscarTabletaNombre($todo)){
        $numeroNombre ++;
      }
      echo $todo;
  
  ?>
</body>
</html>
