<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require ("../controller/comandaController.php");?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloComanda.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Comandas</title>
</head>
<body>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<!-- Estos 3 traen los desplegables desde esas rutas. -->
<script src="scriptsComanda.php"></script>

<!--  ----------------------------------------------  -->
<div>
  <div class="titlebox">
    <div id="agregarpop">
        <button type="button" class="btn btn-success" onclick="agregarComanda()"><i class="bi bi-plus-circle"><br>Agregar </i>
        </button>
        <button type="button" class="btn btn-success" onclick="comandasViejas()"><i>Comandas viejas </i>
        </button>
      </div>
    <h1>Comandas</h1>
    <div class="titleboxspacer"></div>
    </div>
</div>
  <div class="page">  
    <div class="content">
      <div class="table-responsive table-wrapper">
        <table class="table" style="width: 85%;">
          <?php $numberComandas = comandacontroller::returnComandaIndex();
          $i = 0;
           while ($i < $numberComandas){
            ?>
          <tr class="articuloN">
              <td><div><p>Numero de comanda:<?php echo comandacontroller::hidrateComandaId($i);?></p></div></td>
              <td><div><p>Mesa:<?php echo comandacontroller::hidrateComandaMesa($i);?></p></div></td>
              <td><div><p>Fecha:<?php echo comandacontroller::hidrateComandaFecha($i);?></p></div></td>
              <td><div><p>Forma de pago:<?php echo comandacontroller::hidrateComandaFormaPago($i);?></p></div></td>
              <td>
                <div>
                  <form action="../controller/comandaProcessor.php" method="get">
                    <input type="hidden" name="info" value="<?php echo comandacontroller::hidrateComandaId($i);?>">
                    <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                    </button>
                  </form>
                  <form action="../controller/comandaProcessor.php" method="get">
                  <input type="hidden" name="delete" value="<?php echo comandacontroller::hidrateComandaId($i);?>"> 
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                  </button>
                  </form>
                </div>
              </td> 
          </tr>
          <?php 
          $i++;
          } 
          ?>
        </table>
      </div>  
    </div>

    <?php include("barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 

</body>
</html>

