<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="D:/Xampp/htdocs/El-Comerciante/view/dolcezzainterfaces/personal/estiloPersonal/estiloComanda.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function func(){
var checkBoxnum = document.querySelectorAll('input[type="checkbox"]:checked').length;
var unchecked = document.querySelectorAll('input[type="checkbox"]:not(:checked)').length;
const heading = document.getElementById('Title');
var maxSabores = 4
var aelegir = unchecked - maxSabores + 1
heading.textContent = "Selecciona " + aelegir + " Sabores"


if (aelegir == 0){
    alert("no hay sabores que elegir");
    document.querySelectorAll('input[type="checkbox"]:not(:checked)').disabled = true;
}
else {
}
}
</script>
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

</body>
</html>