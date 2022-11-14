<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="estiloProducto.css">
       <title>Menu</title>
</head>

<body>
    <div class="aguanteTop">
    <div class="title">
        <div class="back">
            <form action="tabletaPedido.php">
                <button type="submit" class="btn btn-outline-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="4vh" height="4vh" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg>
                </button>
            </form>
        </div>
        <div class="titulo">
            <h1>Menu Helados</h1>
        </div>
    </div>
        <div class="page">
            <div class="content">
                <div class="statH"><a href="tabletaHelados.php" class="statH"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/1046/1046885.png" alt="Icono de Helado">Helados</a></div>
                <div class="statP">
                    <img src="resources/SVGCAFE.png" class="icons" alt="icono de cafe"> Productos
                </div>
            </div>
        </div>
    </div>
    <div class="bigtable table-responsive nombre">
            <?php 
                include("tabletaListaProducto.php");
            ?>
    </div>
    <div class="floor">
        <div class="carrito">
            <h3>Total: $</h3>
            <form action="tabletaCompraResumen.php">
            <button type="submit" class="btn btn-outline-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
            </button>
            </form>
        </div>
    </div>

</body>
</html>