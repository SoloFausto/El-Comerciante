
<?php header("content-type: application/x-javascript");?>
function comandasViejas(){
    window.location.href = "comandasViejas.php";

}
function agregarComanda(){
    window.location.href = "agregarcomanda.php";
}
function ventanaComanda(){
    window.location.href = "comanda.php";
}
function disableMesa(){
    var checkbox = document.getElementById("llevar");
    var mesa = document.getElementById("mesa");
    
    if (mesa.disabled == true){
      mesa.value = '';
      mesa.disabled = false;
    } 
    else if(mesa.disabled == false){
      mesa.value = '';
      mesa.disabled = true;
    }
  }function removeAgregarComanda(){
    $(".popup").remove();
  }

  function agregarHelado(){
    var agregarHelado = `  
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
            <h2 id="Title">Selecciona N Sabores</h2>
            <hr>
        </div>
        <div>
            <form action=""></form>
            <table class="table">
                
                    <tr>
                        <td colspan="2">
                            <div><h4>(Nombre de el sabor)</h4></div>
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" onclick="func()">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div><h4>(Nombre de el sabor)</h4></div>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Bike"onclick="func()">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div><h4>(Nombre de el sabor)</h4></div>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Bike"onclick="func()">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div><h4>(Nombre de el sabor)</h4></div>
                            <input type="checkbox" id="vehicle4" name="vehicle4" value="Bike" onclick="func()">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div><h4>(Nombre de el sabor)</h4></div>
                            <input type="checkbox" id="vehicle5" name="vehicle5" value="Bike" onclick="func()">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div><h4>(Nombre de el sabor)</h4></div>
                            <input type="checkbox" id="vehicle6" name="vehicle6" value="Bike" onclick="func()">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div><h4>(Nombre de el sabor)</h4></div>
                            <input type="checkbox" id="vehicle7" name="vehicle7" value="Bike" onclick="func()">
                        </td>
                    </tr>
            </table>
            <div style="text-align: center;">
                <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                  </svg>
                </button>
            </div>
        </form>
        </div>
        <br>
        </div>
    </div>
    `;
    $(".agregarPlatoPopUp").before(agregarHelado);

  }
  function removeAgregarHelado(){
    $(".popupHelado").remove();
  }
  function agregarPlato(){
    var agregar = `
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
        <div>
            <table class="table">
            <tr>
                        <td colspan="2"><div><h4>Envases</h4></div></td>
                    </tr>
            <?php require "../../../../../controller/personal/comanda/comandacontroller.php";
                            $numberEnvases = envaseController::countEnvases();
                            $i = 0;
                            while ($i < $numberEnvases){?>
                                <tr>
                                    <td><div><p><?php echo envaseController::hidrateEnvaseNombre($i);?></p></div></td>
                                    <td><?php echo envaseController::hidrateEnvasePrecio($i);?> pesos.</td>
                                    <td>
                                        <div> 
                                            <button style="border:0px;" onclick="agregarHelado()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </button>
                                        </div>
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
                              <td><div><p><?php echo productoController::hidrateAllProductoNombre($i);?></p></div></td>
                              <td><?php echo productoController::hidrateAllProductoPrecio($i);?> pesos.</td>
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
                          <?php 
                            $i++;
                            } ?>
            </table>
        </div>
        <br>
        </div>
    </div>
    `;
    $(".popup").before(agregar);
  }
  function removeAgregarPlato(){
    $(".agregarPlatoPopUp").remove();
  }
