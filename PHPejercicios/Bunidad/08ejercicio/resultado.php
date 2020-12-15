<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $horas = $_POST['horas'];
    $salario = $horas*12;


    echo "El salario del trabajador debe ser: $salario";
    
    ?>
    
</body>
</html>