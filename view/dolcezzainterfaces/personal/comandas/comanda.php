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
    <div class="popup">
        <div class="background"></div>
        <div class="menuAdd">
            <div class="addOrderTitle">
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

        </form>
        </div>
        <br>
        </div>
      </div>
    `;
    $(".agregarPlatoPopUp").before(agregarHelado);

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
    <div class="navbar barnav">
      <div class="icon">
        <a href="../paginaPrincipal/inicio.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="58" fill="black" class="bi bi-house" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
        </a>
      </div>
      <div class="icon">
        <a href="../comandas/comanda.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="58" fill="black" class="bi bi-sticky" viewBox="0 0 16 16">
            <path d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1h-11zM2 2.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V8H9.5A1.5 1.5 0 0 0 8 9.5V14H2.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V9.5a.5.5 0 0 1 .5-.5h4.293L9 13.793z"/>
          </svg>
        </a>
      </div>

      <div class="icon">
        <a href="../dispositivosVinculados/dispositivos.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="58" fill="black" class="bi bi-tablet" viewBox="0 0 16 16">
            <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
          </svg>
          </a>
      </div>

      <div class="icon  selected_item">
        <a href="../usuarios/usuarios.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="58" fill="black" class="bi bi-people" viewBox="0 0 16 16">
              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
            </svg>
        </a>
      </div>

      <div class="icon">
        <a href="../menu/menu.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="58" fill="black" class="bi bi-list-ol" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
          <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
        </svg>
        </a>
      </div>

    </div>
</div>
</body>
</html>

