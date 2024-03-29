<?php header("content-type: application/x-javascript");
require "../controller/menuController.php";
$numberEnvase = envaseController::returnEnvases();
$numberProducto = productoController::returnProductoIndex();
?>
  let checkboxes = $("input[type=checkbox]")
  checkboxes.change(function() {
  enabledSettings = checkboxes
    .filter(":checked") // Filter out unchecked boxes.
    .map(function() { // Extract values using jQuery map.
      return this.value;
    }) 
    .get() // Get array.
    
  console.log(enabledSettings);
});

  function agregarCombo() {
    var agregarCombo =`
    <div class="popup">
    <div class="background" style="z-index: 0;"></div>
    <form action="../controller/menuprocessor.php" method="get">
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
                <input type="number" name="precioComboNeto" id="precioComboNeto" placeholder="Precio neto" readonly>
                <input type="number" name="precioCombo" id="precioCombo" placeholder="Precio de el combo">
              </div>
            </div>
            <div style="width: 50%">
              <h3 style="text-align: center;">Elementos del combo</h3>
              <table class="table">
                <tbody>
                  <tr>
                    <td colspan="3"><div><h4>Envases</h4></div></td>
                  </tr>
                  <tr>
                  <input type="hidden" name="numberEnvase" value="<?php
                    $numberEnvaseProcessor = envaseController::returnEnvases();
                    echo $numberEnvaseProcessor?>">
                    <input type="hidden" name="numberProducto" value="<?php 
                    $numberProductoProcessor = productoController::returnProductoIndex();
                    echo $numberProductoProcessor?>">
                  <?php 
                  $numberEnvase = envaseController::returnEnvases();
                      $i = 0;
                      while ($i < $numberEnvase){
                      ?>

                    <tr>
                      <td colspan="2"><div><p><?php echo envaseController::hidrateEnvaseNombre($i); ?></p></div></td>
                      <td colspan="2"><div> Precio:<?php echo envaseController::hidrateEnvasePrecio($i); ?></div></td>
                      <td><input type="checkbox"  name="envase<?php echo $i?>" value="<?php echo envaseController::hidrateEnvaseId($i)?>" class="form-check-input"></td>
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
                  $numberProducto = productoController::returnProductoIndex();
                      $i = 0;
                      while ($i < $numberProducto){
                      ?>
                    <tr>
                      <td colspan="2"><div><p><?php echo productoController::hidrateAllProductoNombre($i); ?></p></p></div></td>
                      <td colspan="2"><div>Precio:<div><?php echo productoController::hidrateAllProductoPrecio($i); ?></div></div></td>
                      <td><input name="producto<?php echo $i?>" type="checkbox" value="<?php echo productoController::hidrateAllProductoId($i)?>" class="form-check-input"></td>
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
    var checkboxes = document.querySelectorAll("input[type=checkbox]");
    $(checkboxes).change(function() {
    var precioNeto = 0;
    $(':checkbox:checked').each(function() {
        precioNeto = precioNeto + parseInt( $(this).val() );
    });
    document.getElementById("precioComboNeto").value = precioNeto;
});
  }
  function removeAgregarCombo(){
    $(".popup").remove();
  }

  function agregarEnvase(){
    var agregarEnvase = `  
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
        <h2 id="title" style="display: inline;">Agregar un envase</h2>
        <hr>
    </div>

    <div style="text-align: center;">
    <form action="../controller/menuprocessor.php" method="get">
      <input type="hidden" value="agregarEnvase" name="valor">
        <input type="text" placeholder="Nombre:" name="nombre"><br>
        <input type="text" placeholder="Descripcion:" name="descripcion">    <br>
        <input type="number" min="1" placeholder="Precio:" name="precio">    <br>
        <input type="number" min="1" placeholder="Cantidad de sabores:" name="capacidad">	    <br>

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
    $("body").append(agregarEnvase);

  }


  function removeAgregarEnvase(){
    $(".popupEnvase").remove();
  }

  function agregarHelado(){
    var agregarHelado= `  
    <div class="popupHelado">
    <div class="background" style="z-index:7;"></div>
    <div class="menuAdd"style="z-index:8;">
        <div class="addOrderTitle">
        <button type="button" onclick="removeAgregarHelado()" style="border:0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
        <h2 id="title" style="display: inline;">Agregar helado</h2>
        <hr>
    </div>

    <div style="text-align: center;">
    <form action="../controller/menuprocessor.php" method="get">
    <input type="hidden" value="agregarSaborHelado" name="valor">
    <input type="text" placeholder="Nombre:" name="nombre" >    <br>
    <input type="text" name="descripcion" size="40" placeholder="Descripcion"> <br>
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
    $("body").append(agregarHelado);

  }
  function removeAgregarHelado(){
    $(".popupHelado").remove();
  }

  function agregarProducto(){
    var agregarProducto= `  
    <div class="popupProducto">
    <div class="background" style="z-index:7;"></div>
    <div class="menuAdd"style="z-index:8;">
        <div class="addOrderTitle">
        <button type="button" onclick="removeAgregarProducto()" style="border:0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
          </svg>
        </button>
        <h2 id="title" style="display: inline;">Agregar producto</h2>
        <hr>
    </div>

    <div style="text-align: center;">
    <form action="../controller/menuprocessor.php" method="get">
    <input type="hidden" value="agregarProducto" name="valor">
        <input type="text" placeholder="Nombre:" name="nombre" >    <br>
        <input type="text" name="descripcion" size="40" placeholder="Descripcion">   <br>
        <input type="number" min="1" placeholder="Precio:" name="precio">    <br>

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
    $("body").append(agregarProducto);

  }
  function removeAgregarProducto(){
    $(".popupProducto ").remove();
  }