<!DOCTYPE html>
<html lang="es">
  <?php session_start(); ?>
  <head>
    <meta charset="utf-8">
    <title>Inicio de Tablet</title>
     <!-- Boostrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../estiloTablet/estiloIndex.css">
  </head>
  <body>

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
        <img src="../../resources/dolcezza.png" alt="Logo de Dolcezza" class="imgDolcezza">

        <form method="POST" action="../../../../controller/tableta/inicio/loginTableta.php">

        <!-- texto -->
        <label for="username">Ingrese el codigo: </label>

        <!-- Boton de Nueva tableta -->
        <input type="text" name="bottonTab" maxlength="4">
        <input type="submit" name="botonTablet">

      </form>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>