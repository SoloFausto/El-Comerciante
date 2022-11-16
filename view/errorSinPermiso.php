<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloError.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>SinPermiso</title>

</head>
<body>

  <?php include("barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 

  <div class="titlebox">
    <div class="titleboxspacer"></div>
      <h1>No tienes acceso a esta pestaña</h1>
    <div class="titleboxspacer"></div> 

  </div>
    <div>
        <img class="imagen" src="resources/dolcezzaerror.jpg" alt="">
    </div>
</body>
</html>   