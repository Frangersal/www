<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>El resultado es: 
    <?php 
    $a = $_POST['a'];
    $b = $_POST['b'];

    $multiplica =$a*$b;

    // var_dump($aa);
    // var_dump($ba);

    echo $multiplica;

    ?>
</body>
</html>