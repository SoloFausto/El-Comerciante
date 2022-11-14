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
      mesa.value = '0';
      mesa.disabled = true;
    }
  }function removeAgregarComanda(){
    $(".popup").remove();
  }