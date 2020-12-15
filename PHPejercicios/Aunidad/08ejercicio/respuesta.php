<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php 
    
        $pesos = $_POST['pesos'];
        $dolares = $pesos*20;

        echo "$pesos de pesos es igual a $dolares dolares";
    ?>
</body>
</html>