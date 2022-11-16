<?php header("content-type: application/x-javascript");
include "../controller/comandaController.php";
?>
function comandasViejas(){
    window.location.href = "comandasViejas.php";

}
function agregarComanda(){
    window.location.href = "agregarComanda.php";
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
      mesa.value = '0';
      mesa.disabled = true;
    }
  }function removeAgregarComanda(){
    $(".popup").remove();
  }
