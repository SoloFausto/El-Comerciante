<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estiloTablet/estiloProducto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Menu</title>
</head>

<body>
<div class="popupHelado">
    <div class="background" style="z-index:7;"></div>
    <div class="menuAdd" style="z-index:8;">
        <div class="addOrderTitle">
        <button type="button" onclick="removeAgregarHelado()" style="border:0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
          </svg>
        </button>
        <h2 id="title" style="display: inline;">Agregar helado</h2>
        <hr>
    </div>

    <div style="text-align: center;">
    <form action="">
        <input type="text" placeholder="Nombre:">    <br>
        <input type="text" placeholder="Descripcion:" style="width: 90%;height: 20vh;margin-top: 10px;margin-bottom: 10px;">    <br>

            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"></path>
              </svg>
            </button>
        </form></div>
    
    <br>
    </div>
</div>
    <div class="aguanteTop">
        <div class="title">
            <h1>Menu</h1>
        </div>
        <div class="page">
            <div class="content">
                <div class="statH"><a href="../helados/helados.php" class="statH"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/1046/1046885.png" alt="Icono de Helado">Helados</a></div>
                <div class="statP"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/2234/2234937.png" alt="Paleta de Helado">Productos</div>
            </div>
        </div>
    </div>
    <div class="bigtable table-responsive nombre">
            <?php 
                include("../includes/listaProducto.php");
            ?>
    </div>
    <div class="floor">
        <div class="carrito">
            <h3>Total: $</h3> <!-- Poner un PHP o Modelo que ponga el maximo selecionado -->
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
        </div>
    </div>

</body>
</html>