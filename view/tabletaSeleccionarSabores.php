<?php 
require "../controller/menuController.php";
?>
<div class="row">
    <table class="table">
       <?php 
          $numberhelado = heladocontroller::returnHelados();
          $i = 0;
          while ($i < $numberhelado){
        ?>
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
   
 </table>  
</div>