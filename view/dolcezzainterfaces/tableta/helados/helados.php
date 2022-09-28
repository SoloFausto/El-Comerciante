<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estiloTablet/estiloCafe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Menu</title>
</head>

<body>
    <div class="aguanteTop">
    <div class="title">
        <h1>Menu</h1>
    </div>
    <div class="page">
        <div class="content">
            <div class="stat"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/1046/1046885.png" alt="Icono de Helado">Helados</div>
            <div class="stat"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/2234/2234937.png" alt="Paleta de Helado">Productos</div>
        </div>
    </div>
    </div>
    <div class="bigtable table-responsive">
            <?php 
                include("../includes/listaProducto.php");
            ?>
    </div>
    <div class="floor">
        <div class="total"><h3>Total: $</h3></div>
        <div class="carrito"><img src="" alt="Carrito de compra"></div>
    </div>

</body>
</html>