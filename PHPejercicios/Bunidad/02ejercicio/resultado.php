<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $dolares = $_POST['dolares'];
    // $pesos = $_POST['pesos'];

    $dolaresToPesos = 20/$dolares;

    echo "$dolares dolares es equivalente a $dolaresToPesos pesos"
    
    ?>
    
</body>
</html>