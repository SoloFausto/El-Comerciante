<?php header("content-type: application/x-javascript");
require "/Xampp/htdocs/El-Comerciante/controller/personal/menu/menuController.php";

?>

  function agregarCombo() {
    var agregarCombo =`
    <div class="popup">
    <div class="background" style="z-index: 0;"></div>
    <form action="/El-Comerciante/controller/personal/menu/menuprocessor.php" method="get">
    <div class="menuPop">
        <div class="popTitle">
          <h2>Agregar Combo</h2>
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
          <input type="hidden" value="agregarCombo" name="valor">
              <input type="text" name="nombre" id="nombreCombo" placeholder="Nombre de el combo" style="width: 50vh; height: 5vh;">
              <input type="text" name="descripcion" id="descripcionCombo" placeholder="Descripcion de el combo" style="height:30vh;">
              <div>
                <input type="number" name="precioComboNeto" id="precioComboNeto" placeholder="Precio neto">
                <input type="number" name="precioCombo" id="precioCombo" placeholder="Precio de el combo">
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
                  <?php 
                      $numberEnvase = envaseController::returnEnvases();
                      $i = 0;
                      while ($i < $numberEnvase){
                      ?>
                    <tr>
                      <td colspan="2"><div><p><?php echo envaseController::hidrateEnvaseNombre($i); ?></p></div></td>
                      <td><input type="checkbox" name="envase" value="<?php echo envaseController::hidrateEnvaseId($i)?>" class="form-check-input"></td>
                    </tr>
                    <?php 
                        $i++;
                      } 
                      ?>
                  </tr>
                  <tr>
                    <td colspan="3"><div><h4>Productos</h4></div></td>
                  </tr>
                  <tr>
                  <?php 
                      $numberproducto = productoController::returnProductoIndex();
                      $i = 0;
                      while ($i < $numberproducto){
                      ?>
                    <tr>
                      <td colspan="2"><div><p><?php echo productoController::hidrateAllProductoNombre($i); ?></p></p></div></td>
                      <td><input type="checkbox" name="producto" value="<?php echo productoController::hidrateAllProductoId($i)?>" class="form-check-input"></td>
                    </tr> 
                    <?php 
                        $i++;
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
    $("body").append(agregarCombo);
  }
  function removeAgregarCombo(){
    $(".popup").remove();
  }