
<?php header("content-type: application/x-javascript");?>
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
    <form action="/El-comerciante/controller/personal/menu/menuprocessor.php" method="get">
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