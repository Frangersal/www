<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $total = $_POST['total'];

    $baseImponible = $total/1.20;

    echo "La base imponible de $total es: $baseImponible ";
    
    ?>
    
</body>
</html>