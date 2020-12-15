<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];

    echo "
    <h4>$nombre</h4><br>
    <h4>$direccion</h4><br>
    <h4>$telefono</h4><br>
    ";
    ?>    

</body>
</html>