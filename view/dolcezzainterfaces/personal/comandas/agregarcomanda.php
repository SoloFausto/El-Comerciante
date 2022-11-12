<?php session_start(); 
@$agregarComandaId = $_GET['id'];
require ("../../../../controller/personal/comanda/comandacontroller.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estiloPersonal/estiloComanda.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Comandas</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<!-- Estos 3 traen los desplegables desde esas rutas. -->
<script src="/El-Comerciante/view/dolcezzainterfaces/personal/comandas/desplegables/scripts.php"></script>

<!--  ----------------------------------------------  -->
<div>
  <div class="titlebox">
    <h1>Agregar Comanda</h1>
    </div>
</div>
  <div class="page">  
    <div class="content">
    
      <div class="menuPop">
        <form action="">
          <div class="popTitle">
            <div>
              <label for="mesa">Mesa:</label>
              <input type="number" id="mesa" name="mesa" min="1" >
              <label for="llevar">Llevar:</label>
              <input type="checkbox" id="llevar" onclick="disableMesa()" class="form-check-input">
            </div>
            <h2></h2>
            <button type="button" onclick="agregarPlato()" style="border:0px;" id="agregar">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
              <p>Agregar plato a la comanda</p>
            </button>
            <button type="button" onclick="removeAgregarComanda()" style="border:0px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </button>
          </div>
          
        </form>
        <hr>
        <h3 style="text-align: center;">Productos Agregados</h3>
          <div style="display:flex;flex-direction: column; align-items: center;">
              <table class="table tablaprods">
                  <?php if ($agregarComandaId != ""){ 
                    $numberEnvase = envaseController::countRelatedEnvases($agregarComandaId);
                    $a = 0;
                    while ($a < $numberEnvase){
                    
                    ?>

                      <tr class="envase">
                          <td><div><p><?php echo envaseController::hidrateEnvaseNombreWithComanda($agregarComandaId,$a);?></p></div></td>
                          <td><div><p><?php echo envaseController::hidrateEnvaseCapacidadWithComanda($agregarComandaId,$a);?></p></div></td>
                          <td><div><p><?php echo envaseController::hidrateEnvasePrecioWithComanda($agregarComandaId,$a);?></p></div></td>
                          <td>
                              <div> 
                                  <button style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                      </svg>
                                  </button>
                              </div>
                          </td> 
                      </tr>
                      <tr class="sabor">
                          <td></td>
                          <td colspan="2"><div><p>*Nombre de el sabor*</p></div></td>
                          <td>
                              <button type="button" onclick="" style="border:0px;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                  </svg>
                              </button>
                          </td>
                      </tr>
                      <?php 
                            $a++;
                            } ?>
                    
                     


                      
                          <?php 

                            $numberProducts = productoController::returnProductos($agregarComandaId);
                            $c = 0;
                            while ($c < $numberProducts){
                            ?>
                          <tr class="producto">
                              <td><div><p><?php echo productoController::hidrateProductoNombre($agregarComandaId,$c);?></p></div></td>
                              <td><?php echo productoController::hidrateProductoDescripcion($agregarComandaId,$c);?></td>
                              <td><?php echo productoController::hidrateProductoPrecio($agregarComandaId,$c);?></td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                            <?php 
                            $c++;
                            } ?>
                          </tr>
                          
              </table>
              
              <button type="button" onclick="removeAgregarComanda()" style="border:0px; border-radius:50px; width:50px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
              </svg>
            </button>
            <?php }
              else {
                
              }
              ?>
          </div>


    </div>

    <?php include("../../../dolcezzainterfaces/includes/barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 

</body>
</html>

