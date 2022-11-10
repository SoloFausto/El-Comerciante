<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../estiloTablet/estiloHelado.css">
    
    <title>Menu</title>
</head>

<body>
    <div class="aguanteTop">
    <div class="title">
        <h1>Menu Helados</h1>
    </div>
    <div class="page">
        <div class="content">
            <div class="statH"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/1046/1046885.png" alt="Icono de Helado">Helados</div>
            <div class="statP"><a href="../Producto/producto.php" class="statP"><img src="../../resources/SVGCAFE.png" class="icons" alt="icono de cafe">Productos</a></div>
        </div>
    </div>
    </div>
    <div class="bigtable table-responsive">
            <?php 
                include("../includes/listaHelado.php");
            ?>
</div>
    <div class="floor">
        <div class="carrito">
            <h3>Total: $</h3>
            <form action="../compra/resumen.php">
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