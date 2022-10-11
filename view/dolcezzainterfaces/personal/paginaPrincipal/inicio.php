<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../estiloPersonal/estiloPaginaPrincipal.css">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">  

    <title>Inicio</title>
</head>

<body>

<!-- Este codigo es de boostrap, genera la alerta -->
    <div class="container">
      <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?= $_SESSION['mensaje-color']; ?> alert-dismissible fade show" style="margin-top: 5px; width: 300px;" role="alert">
              <?= $_SESSION['mensaje'] ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php session_unset(); } ?>
    </div>


<div class="titlebox">
  <div class="titleboxspacer"></div>
  <h1>Pagina Principal</h1>
  <div class="titleboxspacer"></div>
</div>

  <?php include("../../../dolcezzainterfaces/includes/barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 

<div class="content">
<div class="stat"><h1>Estadisticas</h1></div>
  <div class="stat"><h1>Comandas</h1></div>
  <div class="stat"><h1>Dispositivos</h1></div>
</div>
<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 
  </body>
</html>