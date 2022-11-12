<?php 
require "/Xampp/htdocs/El-Comerciante/controller/personal/menu/menuController.php";
?>
<div class="row">
    <table class="table">
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
           <td><div class="col-sm-8"><p><?php echo heladocontroller::hidrateHeladoNombre($i);?></p></div></td>
            <td class="col-sm-4">
            
                <input type="checkbox" class="form-check-input">
            </td>
        </tr>
       <?php 
        $i++;
        } 
        ?>
   </tbody>
 </table>  
</div>