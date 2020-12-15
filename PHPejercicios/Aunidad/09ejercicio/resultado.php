<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $dolares = $_POST['dolares'];
            $pesos = 20/$dolares;

            echo "$dolares dolares equivale a $pesos pesos";
        
        ?>
    </div>
</body>
</html>