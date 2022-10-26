<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="c">
    <?php
        while($row = mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['apellido'] ?></td>
                <td><?php echo $row['cedula'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><button type='sumbit' class='mod'>Modificar</button> <button type='' class='elim'>Eliminar</button></td>
            </tr>
        <?php } ?>
        </div> 

</body>
</html>
