<?php
require "/Xampp/htdocs/El-Comerciante/controller/personal/menu/menuController.php";
?>

<table class="table">
  <tbody>

    <th><p>Nombre</p></th>
    <th><p>Descripción</p></th>
    <th><p>Precio</p></th>
    <th></th>
        
        <?php 
          $numberproducto = productoController::returnProductoIndex();
          $i = 0;
          while ($i < $numberproducto){
        ?>
         <script>
         function modificarProducto<?php echo $i; ?>(){
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
      <input type="hidden" value="<?php echo productoController::hidrateAllProductoId($i);?>" name="id">
        <input type="text" placeholder="Nombre:" name="nombre" value="<?php echo productoController::hidrateAllProductoNombre($i);?>"><br>
        <input type="text" placeholder="Descripcion:" name="descripcion" value="<?php echo productoController::hidrateAllProductoDescripcion($i);?>">    <br>
        <input type="number" min="1" placeholder="Precio:" name="precio" value="<?php echo productoController::hidrateAllProductoPrecio($i);?>">    <br>
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
            <td><div><p><?php echo productoController::hidrateAllProductoNombre($i); ?></p></div></td>
            <td><div><p><?php echo productoController::hidrateAllProductoDescripcion($i);?></p></div></td>
            <td><div><p><?php $precio = productoController::hidrateAllProductoPrecio($i); echo "$ $precio"?></p></div></td>
            
            <td><form action="../../../../controller/tableta/comandaTab.php" method="get">
              <input type="hidden" name="deleteProducto" value="<?php echo productoController::hidrateAllProductoId($i);?>"> 
                <button type="submit" onclick="" style="border:0px;" class="btn btn-outline-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="SVGw3org" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
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