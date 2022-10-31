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
       <td colspan="3"><div><h4>Envases</h4></div></td>
     </tr>
     <?php 
      $numberEnvase = envaseController::returnEnvases();
      $i = 0;
      while ($i < $numberEnvase){
      ?>
     <tr>
       <td colspan="2"><div><p><?php echo envaseController::hidrateEnvaseNombre($i); ?></p></div></td>
       <td>
         <button type="button" onclick="" style="border:0px;">
           <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
             <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
             <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
           </svg>
         </button>
         <button type="button" onclick="" style="border:0px;">
           <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
             <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
             <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
           </svg>
         </button>
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
            <td colspan="3"><div><h4>Productos</h4></div></td>
        </tr>
        <?php 
          $numberproducto = productoController::returnProductoIndex();
          $i = 0;
          while ($i < $numberproducto){
        ?>
        <tr>
            <td colspan="2"><div><p><?php echo productoController::hidrateAllProductoNombre($i); ?></p></div></td>
            <td>
            <button type="button" onclick="" style="border:0px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
              </svg>
            </button>
                <button type="button" onclick="" style="border:0px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                </button>
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
           <td colspan="3"><div><h4>Sabores helado</h4></div></td>
       </tr>
       <?php 
          $numberhelado = saborHelado::returnHelados();
          $i = 0;
          while ($i < $numberhelado){
        ?>
       <tr>
           <td colspan="2"><div><p><?php echo saborHelado::hidrateHeladoNombre($i);?></p></div></td>
           <td>
           <button type="button" onclick="" style="border:0px;">
             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
               <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
               <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
             </svg>
           </button>
               <button type="button" onclick="" style="border:0px;">
                   <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                       <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                       <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                   </svg>
               </button>
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
           <td colspan="3"><div><h4>Combo</h4></div></td>
       </tr>
       <?php 
          $numbercombo = combocontroller::returnCombo();
          $i = 0;
          while ($i < $numbercombo){
        ?>
       <tr>
           <td colspan="2"><div><p><?php echo combocontroller::hidrateComboNombre($i);?></p></div></td>
           <td>
           <button type="button" onclick="" style="border:0px;">
             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
               <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
               <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
             </svg>
           </button>
               <button type="button" onclick="" style="border:0px;">
                   <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                       <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                       <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                   </svg>
               </button>
           </td>
       </tr>
       <?php 
        $i++;
        } 
        ?>
   </tbody>
 </table>
</div>
  </body>
</html>