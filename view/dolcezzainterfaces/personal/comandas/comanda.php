<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <link rel="stylesheet" href="../estiloPersonal/estiloComanda.css">
    <title>Comandas</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
  function formattable(){
    $('#tablaprods').DataTable();}
  function agregarComanda() {
    var popup =`<div class="popup">
      <div class="background" style="z-index: 0;"></div>
      <div class="menuPop">
        <form action="">
          <div class="popTitle">
            <div>
              <label for="mesa">Mesa:</label>
              <input type="number" id="mesa" name="mesa" min="1" >
              <label for="llevar">Llevar:</label>
              <input type="checkbox" id="llevar" onclick="disableMesa()">
            </div>
            <h2>Agregar</h2>
            <button type="button" onclick="agregarPlato()" style="border:0px;" id="agregar">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
              <p>Agregar plato a la comanda</p>
            </button>
            <button type="button" onclick="removeAgregarComanda()" style="border:0px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
              </svg>
            </button>
          </div>
          
        </form>
        <hr>
        <h3 style="text-align: center;">Productos a pedir</h3>
          <div class="">
              <table class="table tablaprods">
                  
                      <tr class="envase">
                          <td><div><p>*Nombre de el envase*</p></div></td>
                          <td><div><p>*Cantidad de sabores*</p></div></td>
                          <td><div><p>*Precio*</p></div></td>
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
                      <tr>
                          <td></td>
                          <td colspan="2"><div><p>*Nombre de el sabor*</p></div></td>
                          <td>
                              <button type="button" onclick="" style="border:0px;">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                      <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                  </svg>
                              </button>
                          </td>
                      </tr>
                          <tr>
                              <td></td>
                              <td colspan="2"><div><p>*Nombre de el sabor*</p></div></td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td></td>
                              <td colspan="2"><div><p>*Nombre de el sabor*</p></div></td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td></td>
                              <td colspan="2"><div><p>*Nombre de el sabor*</p></div></td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td></td>
                              <td colspan="2"><div><p>*Nombre de el sabor*</p></div></td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td><div><p>*Nombre de el plato*</p></div></td>
                              <td>Cantidad</td>
                              <td>Precio</td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td><div><p>*Nombre de el plato*</p></div></td>
                              <td>Cantidad</td>
                              <td>Precio</td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td><div><p>*Nombre de el plato*</p></div></td>
                              <td>Cantidad</td>
                              <td>Precio</td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td><div><p>*Nombre de el plato*</p></div></td>
                              <td>Cantidad</td>
                              <td>Precio</td>
                              <td>
                                  <button type="button" onclick="" style="border:0px;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                          <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                      </svg>
                                  </button>
                              </td>
                          </tr>
              </table>
          </div>
    </div>`;
    $("body").append(popup);
    var popup = document.getElementById("agregarpop");
  formattable();
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
  }
  function removeAgregarComanda(){
    $(".popup").remove();
  }
  function agregarPlato(){
    var agregar = `<div class="agregarPlatoPopUp">
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
                    <tr>
                        <td></td>
                        <td><button onclick="agregarHelado()"><div><p>Envase de N kilos (N Sabores)</p></div></button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="agregarHelado()"><div><p>Envase de N kilos (N Sabores)</p></div></button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="agregarHelado()"><div><p>Envase de N kilos (N Sabores)</p></div></button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="agregarHelado()"><div><p>Envase de N kilos (N Sabores)</p></div></button></td>
                    </tr>
                    <tr>
                        <td colspan="2"><div><h4>Comidas</h4></div></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href=""><div><p>(Titulo de comida)</p></div></a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href=""><div><p>(Titulo de comida)</p></div></a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href=""><div><p>(Titulo de comida)</p></div></a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href=""><div><p>(Titulo de comida)</p></div></a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href=""><div><p>(Titulo de comida)</p></div></a></td>
                    </tr>
                    <tr>
                        
                        <td></td>
                        <td><a href=""><div><p>(Titulo de comida)</p></div></a></td>
                    </tr>
            </table>
        </div>
        <br>
        </div>
    </div>`;
    $(".popup").before(agregar);
  }
  function removeAgregarPlato(){
    $(".agregarPlatoPopUp").remove();
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

</script>

<div>
  <div class="titlebox">
    <div id="agregarpop">
      <button type="button" class="btn btn-success" onclick="agregarComanda()"><i class="bi bi-plus-circle"><br>Agregar </i>
      </button>
    </div>
      <h1>Comandas</h1>
    <div class="titleboxspacer"></div>
    </div>
  <div class="page">  
    <div class="content">
      <div class="table-responsive table-wrapper">
        <table class="table ">
          <tr class="articuloN">
              <td><div><p>*FOTO*</p></div></td>
              <td><div><p>*Nombre de producto*</p></div></td>
              <td><div><p>*Precio*</p></div></td>
              <td>
                <div> 
                  <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                  </button>
                  <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
                  </button>
                </div>
              </td> 
          </tr>
        </table>
      </div>  
    </div>

    <?php include("../../../dolcezzainterfaces/Barnew/barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 

</body>
</html>

