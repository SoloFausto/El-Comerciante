<!DOCTYPE html>

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   require_once __DIR__. '/vendor/autoload.php';
   $fixer = new Fixer("/Xampp/El-Comerciante"); 
   $fixer->report($inspectDirPath, "APP_ROOT");    // Only reporting.

   ?>

</body>
</html>
