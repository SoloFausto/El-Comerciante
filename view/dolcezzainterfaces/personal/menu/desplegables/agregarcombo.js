
  function agregarCombo() {
    var agregarCombo =`
    <div class="popup">
    <div class="background" style="z-index: 0;"></div>
    <div class="menuPop">
      <form action="">
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
      <h3 style="text-align: center;">Productos a pedir</h3>
        <div class="">
            <table class="table">
                <tbody>
                  <tr>
                    <td colspan="3"><div><h4>Envases</h4></div></td>
                  </tr>
                  <tr>
                    <td colspan="2"><div><p>Envase:(Nombre de el envase)</p></div></td>
                    <td>
                        <input type="checkbox">
                    </td>
                  </tr>
                     <tr>
                         <td colspan="3"><div><h4>Productos</h4></div></td>
                     </tr>
                     <tr>
             
                         <td colspan="2"><div><p>Producto:(Nombre de producto)</p></div></td>
                         <td>
                            <input type="checkbox">
                         </td>
                     </tr>
                    <tr>
                        <td colspan="3"><div><h4>Sabores helado</h4></div></td>
                    </tr>
                    <tr>
             
                        <td colspan="2"><div><p>Sabor:(Nombre de sabor)</p></div></td>
                        <td>
                            <input type="checkbox">
                        </td>
                    </tr>
                </tbody>
              </table>
              <button type="button" onclick="agregarCombo2()" style="border:0px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg>
</button>
        </div>
        </form>
    </div>
</div>
    `;
    $("body").append(agregarCombo);
  }
  function agregarCombo2(){
  var agregarCombo2 = `
  <div class="menuPop">
  <form action="">
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
  <h3 style="text-align: center;">Productos a pedir</h3>
    <div class="">
        <table class="table">
            <tbody>
              <tr>
                <td colspan="3"><div><h4>Envases</h4></div></td>
              </tr>
              <tr>
                <td colspan="2"><div><p>Envase:(Nombre de el envase)</p></div></td>
                <td>
                    <input type="checkbox">
                </td>
              </tr>
                 <tr>
                     <td colspan="3"><div><h4>Productos</h4></div></td>
                 </tr>
                 <tr>
         
                     <td colspan="2"><div><p>Producto:(Nombre de producto)</p></div></td>
                     <td>
                        <input type="checkbox">
                     </td>
                 </tr>
                <tr>
                    <td colspan="3"><div><h4>Sabores helado</h4></div></td>
                </tr>
                <tr>
         
                    <td colspan="2"><div><p>Sabor:(Nombre de sabor)</p></div></td>
                    <td>
                        <input type="checkbox">
                    </td>
                </tr>
            </tbody>
          </table>
          <button type="button" onclick="agregarCombo2()" style="border:0px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
</svg>
</button>
    </div>
    </form>
</div>
  `;
  $(".menuPop").remove();
  $(".popup").append(agregarCombo2);
}
  function removeAgregarCombo(){
    $(".popup").remove();
  }