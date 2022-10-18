<?php Session_Start() ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../estiloTablet/estiloResumen.css">    
    <title>Tablet</title>
</head>
<body>
    <div class="container-xs">
        <!-- Este boton te hace volver-->
        <form action="../helados/helados.php">
        <div class="container-fluid">
            <button type="submit" class="btn btn-outline-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
            </button>
            <div class="container ss">
                <h2>Resumen de tu orden.</h2>
            </div>
        </div>
        </form>
        <div class="container text-center">

            <?php include("../includes/listaResumen.php"); ?>

            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                <div class="btn-group me-2" role="group" aria-label="First group">
                    <form action=""> <!-- Aqui poner a donde redirecciona el boton de abajo -->
                        <button type="submit" class="btn btn-success">Total: $<?php echo "";// Aqui poner el precio total ?></button>
                    </form>
                </div>

                <div class="btn-group me-2" role="group" aria-label="First group">
                    <form action=""> <!-- Aqui poner a donde redirecciona el fin de la compra -->
                        <button type="submit" class="btn btn-success">Finalizar Compra</button>
                    </form>
                </div>

            </div>
            
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>