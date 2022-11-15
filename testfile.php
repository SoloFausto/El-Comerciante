<!DOCTYPE html>
<?php require "/Xampp/htdocs/El-Comerciante/controller/personal/comanda/comandacontroller.php";

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
function agregarSabor(){
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
        <div>
            <table class="table">
                <tr>
                    <td ><div><h4>Sabores helado</h4></div></td>
                </tr>
                <?php 
                    $numberhelado = heladocontroller::returnHelados();
                    $i = 0;
                    while ($i < $numberhelado){
                    ?>
                <tr>
                    <td ><div><p><?php echo heladocontroller::hidrateHeladoNombre($i);?></p></div></td>
                    <td>
           <button type="button" onclick="modificarHelado<?php echo $i; ?>()" style="border:0px;">
             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
               <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
               <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
             </svg>
           </button>
           </td>
       </tr>
       <?php 
        $i++;
        } 
        ?>
            </table>
        </div>
        <br>
        </div>
    </div>
    `;

  }

</body>
</html>
