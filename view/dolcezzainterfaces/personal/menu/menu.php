<?php session_start(); 
require "/Xampp/htdocs/El-Comerciante/controller/personal/menu/menuController.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estiloPersonal/estiloMenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Menú</title>
</head>


<body>
<script src="../menu/desplegables/agregarenvase.php"></script>
<script src="../menu/desplegables/agregarhelado.php"></script>
<script src="../menu/desplegables/agregarproducto.php"></script>
<script src="../menu/desplegables/agregarcombo.php"></script>
<div class="titlebox">
<div class="buttons">
  <div id="agregarpop">
        <button type="button" class="btn btn-success" onclick="agregarEnvase()"><img src="https://cdn0.iconfinder.com/data/icons/fastfood-29/64/ice-cream-dessert-topping-cup-food-sweet-25.png"><br>Agregar Envase </i>
        </button>
      </div>
      <div id="agregarpop">
        <button type="button" class="btn btn-success" onclick="agregarProducto()"><img src="https://cdn4.iconfinder.com/data/icons/food-and-equipment-outline/32/cup-25.png"><br>Agregar Producto </i>
        </button>
      </div>
      <div id="agregarpop">
        <button type="button" class="btn btn-success" onclick="agregarHelado()"><img src="https://cdn0.iconfinder.com/data/icons/valentine-2119/64/Valentine_Outline__ice_cream-love-valentines-sweetheart-romantic-25.png"><br>Agregar Sabor Helado </i>
        </button>
      </div>
      <div id="agregarpop">
        <button type="button" class="btn btn-success" onclick="agregarCombo()"><img src="https://cdn0.iconfinder.com/data/icons/ice-cup-cake-1/227/icecupcake-10-28.png"><br>Agregar Combo </i>
        </button>
      </div>
</div>
  <h1>Menú del restaurante</h1>
  <div class="titleboxspacer"></div>
</div>

  <?php include("../../../dolcezzainterfaces/includes/barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 
  
<div class="content">
  <table class="table">
   <tbody>
     <tr>
       <td ><div><h4>Envases</h4></div></td>
     </tr>
     <?php 
      $numberEnvase = envaseController::returnEnvases();
      $i = 0;
      while ($i < $numberEnvase){
      ?>
      <script>
         function modificarEnvase<?php echo $i; ?>(){
        var modificarEnvase = `  
    <div class="popupEnvase">
    <div class="background" style="z-index:7;"></div>
    <div class="menuAdd"style="z-index:8;">
        <div class="addOrderTitle">
        <button type="button" onclick="removeAgregarEnvase()" style="border:0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
        <h2 id="title" style="display: inline;">Modificar un envase</h2>
        <hr>
    </div>

    <div style="text-align: center;">
    <form action="/El-comerciante/controller/personal/menu/menuprocessor.php" method="get">
      <input type="hidden" value="modifyEnvase" name="valor">
      <input type="hidden" value="<?php echo envaseController::hidrateEnvaseId($i);?>" name="id">
        <input type="text" placeholder="Nombre:" name="nombre" value="<?php echo envaseController::hidrateEnvaseNombre($i);?>"><br>
        <input type="text" placeholder="Descripcion:" name="descripcion" value="<?php echo envaseController::hidrateEnvaseDescripcion($i);?>">    <br>
        <input type="number" min="1" placeholder="Precio:" name="precio" value="<?php echo envaseController::hidrateEnvasePrecio($i);?>">    <br>
        <input type="number" min="1" placeholder="Cantidad de sabores:" name="capacidad" value="<?php echo envaseController::hidrateEnvaseCapacidad($i);?>">	    <br>

        <br>
            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
              </svg>
            </button>
        </div>
    </form>
    <br>
    </div>
</div>
    `;
    $("body").append(modificarEnvase);
  }
      </script>
     <tr>
       <td ><div><p><?php echo envaseController::hidrateEnvaseNombre($i); ?></p></div></td>
       <td>
         <button type="button" onclick="modificarEnvase<?php echo $i; ?>()" style="border:0px;">
           <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
             <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
             <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
           </svg>
         </button>
         <form action="../../../../controller/personal/menu/menuprocessor.php" method="get">
          <input type="hidden" name="deleteEnvase" value="<?php echo envaseController::hidrateEnvaseId($i);?>"> 
          <button type="submit" onclick="" style="border:0px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
            </svg>
          </button>
         </form>
       </td>
     </tr>
     <?php 
        $i++;
       } 
      ?>
    </tbody>
 </table>
  <table class="table">
        <tr>
            <td ><div><h4>Productos</h4></div></td>
        </tr>
        <?php 
          $numberproducto = productoController::returnProductoIndex();
          $x = 0;
          while ($x < $numberproducto){
        ?>
         <script>
         function modificarProducto<?php echo $x; ?>(){
        var modificarProducto = `  
    <div class="popupEnvase">
    <div class="background" style="z-index:7;"></div>
    <div class="menuAdd"style="z-index:8;">
        <div class="addOrderTitle">
        <button type="button" onclick="removeAgregarEnvase()" style="border:0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
        <h2 id="title" style="display: inline;">Modificar un envase</h2>
        <hr>
    </div>

    <div style="text-align: center;">
    <form action="/El-comerciante/controller/personal/menu/menuprocessor.php" method="get">
      <input type="hidden" value="modifyProducto" name="valor">
      <input type="hidden" value="<?php echo productoController::hidrateAllProductoId($x);?>" name="id">
        <input type="text" placeholder="Nombre:" name="nombre" value="<?php echo productoController::hidrateAllProductoNombre($x);?>"><br>
        <input type="text" placeholder="Descripcion:" name="descripcion" value="<?php echo productoController::hidrateAllProductoDescripcion($x);?>">    <br>
        <input type="number" min="1" placeholder="Precio:" name="precio" value="<?php echo productoController::hidrateAllProductoPrecio($x);?>">    <br>
        <br>
            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
              </svg>
            </button>
        </div>
    </form>
    <br>
    </div>
</div>
    `;
    $("body").append(modificarProducto);
  }
      </script>
        <tr>
            <td ><div><p><?php echo productoController::hidrateAllProductoNombre($x); ?></p></div></td>
            <td>
            <button type="button" onclick="modificarProducto<?php echo $x; ?>()" style="border:0px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
              </svg>
            </button>
            <form action="../../../../controller/personal/menu/menuprocessor.php" method="get">
              <input type="hidden" name="deleteProducto" value="<?php echo productoController::hidrateAllProductoId($x);?>"> 
                <button type="submit" onclick="" style="border:0px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </button>
            </form>
            </td>
        </tr>
        <?php 
        $x++;
        } 
        ?>
    </tbody>
  </table>
 <table class="table">
       <tr>
           <td ><div><h4>Sabores helado</h4></div></td>
       </tr>
       <?php 
          $numberhelado = heladocontroller::returnHelados();
          $i = 0;
          while ($i < $numberhelado){
        ?>
        <script>
         function modificarHelado<?php echo $i; ?>(){
        var modificarHelado = `  
    <div class="popupEnvase">
    <div class="background" style="z-index:7;"></div>
    <div class="menuAdd"style="z-index:8;">
        <div class="addOrderTitle">
        <button type="button" onclick="removeAgregarEnvase()" style="border:0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
        <h2 id="title" style="display: inline;">Modificar un envase</h2>
        <hr>
    </div>

    <div style="text-align: center;">
    <form action="/El-comerciante/controller/personal/menu/menuprocessor.php" method="get">
      <input type="hidden" value="modifyHelado" name="valor">
      <input type="hidden" value="<?php echo heladoController::hidrateHeladoId($i);?>" name="id">
        <input type="text" placeholder="Nombre:" name="nombre" value="<?php echo heladoController::hidrateHeladoNombre($i);?>"><br>
        <input type="text" placeholder="Descripcion:" name="descripcion" value="<?php echo heladoController::hidrateHeladoDescripcion($i);?>">    <br>
        <br>
            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
              </svg>
            </button>
        </div>
    </form>
    <br>
    </div>
</div>
    `;
    $("body").append(modificarHelado);
  }
      </script>
       <tr>
           <td ><div><p><?php echo heladocontroller::hidrateHeladoNombre($i);?></p></div></td>
           <td>
           <button type="button" onclick="modificarHelado<?php echo $i; ?>()" style="border:0px;">
             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
               <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
               <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
             </svg>
           </button>
           <form action="../../../../controller/personal/menu/menuprocessor.php" method="get">
           <input type="hidden" name="deleteHelado" value="<?php echo heladocontroller::hidrateHeladoId($i);?>"> 
               <button type="submit" style="border:0px;">
                   <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                       <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                       <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                   </svg>
               </button>
           </form>
           </td>
       </tr>
       <?php 
        $i++;
        } 
        ?>
   </tbody>
 </table>
 <table class="table">
       <tr>
           <td ><div><h4>Combos</h4></div></td>
       </tr>
       <?php 
          $numbercombo = combocontroller::returnCombo();
          $y = 0;
          while ($y < $numbercombo){
        ?>
        <script>
         function modificarCombo<?php echo $y; ?>(){
        var modificarCombo = `  
        <div class="popup">
    <div class="background" style="z-index: 0;"></div>
    <form action="/El-Comerciante/controller/personal/menu/menuprocessor.php" method="get">
    <div class="menuPop">
        <div class="popTitle">
          <h2>Modificar Combo</h2>
          <button type="button" onclick="removeAgregarCombo()" style="border:0px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
          </button>
        </div>
      <hr>
        <div class="agregarComboDiv">
          <div style=" margin-left: 50px; display: flex; flex-direction: column; gap: 10px; ">
          <input type="hidden" value="modificarCombo" name="valor">
              <input type="text" name="nombre" id="nombreCombo" placeholder="Nombre de el combo" style="width: 50vh; height: 5vh;" value="<?php echo combocontroller::hidrateComboNombre($y)?>">
              <input type="text" name="descripcion" id="descripcionCombo" placeholder="Descripcion de el combo" style="height:30vh" value="<?php echo combocontroller::hidrateComboDescripcion($y)?>">
              <div>
                <input type="number" name="precioComboNeto" id="precioComboNeto" placeholder="Precio neto" readonly>
                <input type="number" name="precioCombo" id="precioCombo" placeholder="Precio de el combo" value="<?php echo combocontroller::hidrateComboPrecio($y)?>">
              </div>
            </div>
            <div style="width: 50%">
              <h3 style="text-align: center;">Productos a pedir</h3>
              <table class="table">
                <tbody>
                  <tr>
                    <td colspan="3"><div><h4>Envases</h4></div></td>
                  </tr>
                  <tr>
                  <input type="hidden" name="id" value="<?php
                    echo combocontroller::hidrateComboId($y);?>">
                    <input type="hidden" name="numberEnvase" value="<?php
                    $numberEnvaseProcessor = envaseController::returnEnvases();
                    echo $numberEnvaseProcessor?>">
                    <input type="hidden" name="numberProducto" value="<?php 
                    $numberProductoProcessor = productoController::returnProductoIndex();
                    echo $numberProductoProcessor?>">
                  <?php 
                  $numberEnvase = envaseController::returnEnvases();
                      $a = 0;
                      while ($a < $numberEnvase){
                      ?>

                    <tr>
                      <td colspan="2"><div><p><?php echo envaseController::hidrateEnvaseNombre($a); ?></p></div></td>
                      <td colspan="2"><div><p> Precio:<div id="precioArticulo"><?php echo envaseController::hidrateEnvasePrecio($a); ?></div></div></td>
                      <td><input type="checkbox" name="envase<?php echo $a?>" value="<?php echo envaseController::hidrateEnvaseId($a)?>" class="form-check-input"  <?php echo envaseController::hidrateCheckedEnvases($a,combocontroller::hidrateComboId($y))?>></td>
                    </tr>
                    <?php 
                        $a++;
                      } 
                      ?>
                  </tr>
                  <tr>
                    <td colspan="3"><div><h4>Productos</h4></div></td>
                  </tr>
                  <tr>
                  <?php 
                  $numberProducto = productoController::returnProductoIndex();
                      $b = 0;
                      while ($b < $numberProducto){
                      ?>
                    <tr>
                      <td colspan="2"><div><p><?php echo productoController::hidrateAllProductoNombre($b); ?></p></p></div></td>
                      <td colspan="2"><div><p> Precio:<div id="precioArticulo"><?php echo productoController::hidrateAllProductoPrecio($b); ?></div></div></td>
                      <td><input type="checkbox" name="producto<?php echo $b?>" value="<?php echo productoController::hidrateAllProductoId($b)?>" class="form-check-input" <?php echo productoController::hidrateCheckedProducto($b,combocontroller::hidrateComboId($y))?>></td>
                    </tr> 
                    <?php 
                        $b++;
                      } 
                      ?>
                    <td>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <button type="submit" style="position: relative; left: 85vw; border: 0px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
            </svg>
          </button>
      </form>
    </div>
  </div>
    `;
    $("body").append(modificarCombo);
    var checkboxes = document.querySelectorAll("input[type=checkbox]");
    var preciosArticulos = document.querySelectorAll('#precioArticulo');
    var precioNeto = 0;
    console.log(checkboxes);
    $(checkboxes).change(function() {
      for (let i = 0; i < preciosArticulos.length; i++) {
        precioNeto = precioNeto + preciosArticulos[i];
      }
      document.getElementById("precioComboNeto").value = precioNeto; 
});

  }

      </script>
       <tr>
           <td ><div><p><?php echo combocontroller::hidrateComboNombre($y);?></p></div></td>
           <td>
           <button type="button" onclick="modificarCombo<?php echo $y; ?>()" style="border:0px;">
             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
               <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
               <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
             </svg>
           </button>
           <form action="../../../../controller/personal/menu/menuprocessor.php" method="get">
           <input type="hidden" name="deleteCombo" value="<?php echo combocontroller::hidrateComboId($y);?>"> 
          <button type="submit" onclick="" style="border:0px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
            </svg>
          </button>
         </form>
           </td>
       </tr>
       <?php 
        $y++;
        } 
        ?>
   </tbody>
 </table>
</div>
  </body>
</html>