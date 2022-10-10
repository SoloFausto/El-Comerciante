<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estiloPersonal/estiloDispositivos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Dispositivos vinculados</title>
</head>
<body>
<div class="titlebox">
  <div class="titleboxspacer"></div>
  <h1>Dispositivos</h1>
  <div class="titleboxspacer"></div>
</div>
<div class="page">  
    <div class="content">
        <table class="dispositivos">
          <tr>
              <td><div><p class="mesa">Mesa:*numero de mesa*</p></div></td>
              <td><div><p class="mesa">Codigo de vinculacion:*Codigo*</p></div></td>
              <td class="edgeButton">
                <div> 
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

    <table class="b">
        <form action="">
            <tr>
                <td class="num">Ingrese el numero que aparece en la pantalla para vincular: <input type="text"></td>
                <td class="edgeButton">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="auto" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                    </button>
                </td>
            </tr>
        </form>
    </table>

    <?php include("../../../dolcezzainterfaces/includes/barraLat.html"); //Trae toda la barra lateral de "Barnew/barraLat.html"?> 

</div>
</body>
</html>