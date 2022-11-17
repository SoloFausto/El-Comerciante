<?php session_start(); 
@$agregarComandaId = $_GET['id'];
@$envaseId = $_GET['idEnvase'];

require ("../controller/comandaController.php");
if(!isset($agregarComandaId)){
  $idNuevaComanda = comandaController::createComandaEnCurso($_SESSION["id"]);
  header("Location: agregarComanda.php?id=$idNuevaComanda");
  setcookie("idComanda",$agregarComandaId);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<script>
function agregarPlato(){
    var agregarPlato= `
    <div class="agregarPlatoPopUp">
        <div class="background" style="z-index: 2;"></div>
        
        <div class="menuAdd">
            <div class="addOrderTitle">
            <button type="button" onclick="removeAgregarPlato()" style="border:0px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </button>
            <h2>Agregar a la orden</h2>
            <hr>
        </div>
        <div id="tablaenvprods">
            <table class="table">
            <tr>
                        <td colspan="2"><div><h4>Envases</h4></div></td>
                    </tr>

                    <?php $numberEnvases = envaseController::returnEnvases();
                            $i = 0;
                            while ($i < $numberEnvases){?>
                                <tr>
                                
                                    
                                    <td><div><p><?php echo envaseController::hidrateEnvaseNombre($i);?></p></div></td>
                                    <td>
                                    
                                    <?php echo envaseController::hidrateEnvasePrecio($i);?> pesos.</td>
                                    <td>
                                    <form>
                                    <input type="hidden" name="id" value="<?php echo $agregarComandaId;?>">
                                    <input type="hidden" name="idEnvase" value="<?php echo envaseController::hidrateEnvaseId($i); ?>">
                                      <button type="submit" style="border:0px;" >
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                           <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                           <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                      </button>
                                      </form>
                                    </td>
                                    
                                </tr>
                                
                            <?php 
                            $i++;
                            } ?>
                    <tr>
                        <td colspan="2"><div><h4>Comidas</h4></div></td>
                       

                    </tr>
                    
                    <?php 
                            $numberProducts = productoController::returnProductoIndex();
                            $i = 0;
                            while ($i < $numberProducts){
                            ?>
                            <tr>
                            
                              <td><div><p><?php echo productoController::hidrateAllProductoNombre($i);?></p></div></td>
                              <td><?php echo productoController::hidrateAllProductoPrecio($i);?> pesos.</td>
                              <td>
                                    <div> 
                                    <form action="../controller/agregarComandaProcessor.php">
                                    <input type="hidden" name="idComanda" value="<?php echo $agregarComandaId;?>">
                                    <input type="hidden" name="valor" value="agregarProducto">
                                    <input type="hidden" name="producto" value="<?php echo productoController::hidrateAllProductoId($i);?>">
                                    <button type="submit" style="border:0px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </button>
                                    </form>
                                    </div>
                                </td>
                                
                          </tr>
                          <?php 
                            $i++;
                            } ?>
                    
            </table>
        </div>
        
        <br>
        </div>

    </div>
    `;
    $("body").append(agregarPlato);
  }
function removeAgregarPlato(){
  $(".agregarPlatoPopUp").remove();
}
   function agregarSabor(){
    var agregarSabor= `
    <div class="agregarPlatoPopUp">
        <div class="background" style="z-index: 2;"></div>
        
        <div class="menuAdd">
            <div class="addOrderTitle">
            <button type="button" onclick="removeAgregarPlato()" style="border:0px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16" >
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </button>
            <h2>Agregar a la orden</h2>
            <hr>
        </div>
        <div id="tablaenvprods">
        <form action="../controller/agregarComandaProcessor.php">
        <table class="table">
        <input type="hidden" name="valor" value="agregarHelado">
        <input type="hidden" name="idComanda" value="<?php echo $agregarComandaId;?>">
        <input type="hidden" name="idEnvase" value="<?php echo $envaseId;?>">
        <input type="hidden" name="numeroSabores" value="<?php echo heladoController::returnHelados()?>">
        <?php 
            $numberhelado = heladocontroller::returnHelados();
            $i = 0;
            while ($i < $numberhelado){
          ?>
        <tr>
          <td><div class="col-sm-8"><p><?php echo heladocontroller::hidrateHeladoNombre($i);?></p></div></td>
          <td class="col-sm-4">
            <input type="checkbox" name="sabor<?php echo $i?>" value="<?php echo heladoController::hidrateHeladoId($i);?>" class="form-check-input">
          </td>
        </tr>
        <?php 
          $i++;
          } 
          ?>
        </table> 
        <button type="submit" style="position: relative; left: 150px; border: 0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
          </svg>
        </button>
        </form>
        </div>
        
        <br>
        </div>

    </div>
        
    `;
    $("body").append(agregarSabor);
  }
</script>
<!-- Estos 3 traen los desplegables desde esas rutas. -->
<script src="scriptsComanda.php"></script>
<script src="agregarPlatoComanda.php"></script>
<?php 
if(isset($envaseId)){
  echo "<script>agregarSabor()</script>";
}?>
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
              <table class="table">
                <thead>
                  
                </thead>
                
                  <?php
                  try{
                   $numberProducts = productoController::returnProductos($agregarComandaId);
                   $numberEnvase = envaseController::countRelatedEnvases($agregarComandaId);
                  }
                  catch(mysqli_sql_exception $e){



                  }
                  if ($agregarComandaId != ""){ 
                   
                    $a = 0;
                    while ($a < $numberEnvase){
                    
                    ?>
                      <tr>
                       <td><h3>Nombre Envase</h3></td>
                       <td><h3>Capacidad</h3></td>
                       <td><h3>Precio</h3></td>
                      </tr>
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
                      <tr>
                        <td></td>
                        <td><h4>Sabor</h4></td>
                        <td><h4>Cantidad</h4></td>
                      </tr>
                      <?php
                      $numberHelado = heladoController::countRelatedHeladosComandaNumEnvase($agregarComandaId,$a);
                      $b = 0;
                      while($b < $numberHelado){
                      ?>
                      
                      <tr class="sabor">
                          <td></td>
                          <td><div><p><?php echo heladoController::hidrateHeladoNombreWithNumEnvaseComanda($agregarComandaId,$a,$b)?></p></div></td>
                          <td><div><p><?php echo heladoController::hidrateHeladoCantidadWithNumEnvaseComanda($agregarComandaId,$a,$b)?></p></div></td>
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
                        $b++; 
                        }
                            $a++;
                            } ?>
                            <tr>
                            <td><h3>Nombre Producto</h3></td>
                            <td><h3>Descripcion</h3></td>
                            <td><h3>Precio</h3></td>
                            </tr>
                          <?php 

                           
                            $c = 0;
                            while ($c < $numberProducts){
                            ?>
                          <tr class="producto">
                              <td><div><p><?php echo productoController::hidrateProductoNombre($agregarComandaId,$c);?></p></div></td>
                              <td><?php echo productoController::hidrateProductoDescripcion($agregarComandaId,$c);?></td>
                              <td><?php echo productoController::hidrateProductoPrecio($agregarComandaId,$c);?></td>
                              <td>
                              <form action="../controller/agregarComandaProcessor.php">
                                    <input type="hidden" name="idComanda" value="<?php echo $agregarComandaId;?>">
                                    <input type="hidden" name="valor" value="eliminarProducto">
                                    <input type="hidden" name="producto" value="<?php echo productoController::hidrateProductoId($agregarComandaId,$c);?>">
                                    <button type="submit" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                            </form>
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

    <?php include("barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 
</body>
</html>

