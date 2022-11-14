<!DOCTYPE html>
<html lang="es">
  <?php session_start(); ?>
  <head>
    <meta charset="utf-8">
    <title>Inicio de Tablet</title>
     <!-- Boostrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="estiloIndex.css">
  </head>
  <body>

        <div class="back">
            <form action="../index.html">
                <button type="submit" class="btn btn-outline-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6vh" height="6vh" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg>
                </button>
            </form>
        </div>


     <!-- Este codigo es de boostrap, genera la alerta -->
     <div class="container">
      <?php if(isset($_SESSION['mensaje'])){ ?>
          <div class="alert alert-<?= $_SESSION['mensaje-color']; ?> alert-dismissible fade show" style="margin: 1%; width: 20%; margin-left: 40%;" role="alert">
              <?= $_SESSION['mensaje'] ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php session_unset(); } ?>
    </div>

    <div class="login-box">
        <img src="resources/dolcezza.png" alt="Logo de Dolcezza" class="imgDolcezza">

        <form method="POST" action="../controller/tabletaLogin.php">

        <!-- texto -->
        <label for="username">Ingrese el codigo: </label>

        <!-- Boton de Nueva tableta -->
        <input type="text" name="bottonTab" style="text-transform: uppercase" minlength="4" maxlength="4" autofocus>
        <input type="submit" name="botonTablet">

      </form>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>