<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../estiloPersonal/estiloPaginaPrincipal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Inicio</title>
</head>

<body>
<div class="titlebox">
  <div class="titleboxspacer"></div>
  <h1>Pagina Principal</h1>
  <div class="titleboxspacer"></div>
</div>

  <?php include("../../../dolcezzainterfaces/includes/barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 

<div class="content">
<div class="stat"><h1>Este mes</h1></div>
  <div class="stat"><h1>Generales</h1></div>
  <div class="stat"><h1>Este año</h1></div>
  <div class="stat"><h1>stock de helados</h1></div>
</div>
  </body>
</html>