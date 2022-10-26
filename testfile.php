<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        // require "../El-Comerciante/model/comanda.php";
        //require "../El-Comerciante/model/usuario.php";
        //require "../El-Comerciante/model/producto.php";
        //require_once "../El-Comerciante/model/helado.php";
        //require_once "../El-Comerciante/model/envase.php";
        include "controller/include/connection.php";
        //require_once "/Xampp/htdocs/El-Comerciante/controller/personal/comandacontroller.php";
        include "C:/xampp/htdocs/El-Comerciante/model/Tableta.php";
        $Tableta = new tableta(conectar());
        $veri = $Tableta->cargarTabletaLogin("XWJK");
        
        if($veri == true){
            echo "<h1>asdasdas</h1>";
        }else{
            echo "<h1>wawawawwaa</h1>";
        }
         ?>
    </div>
</body>
</html>
