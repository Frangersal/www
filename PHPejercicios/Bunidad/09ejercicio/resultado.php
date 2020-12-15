<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $altura = $_POST['altura'];
    $radio = $_POST['radio'];
    $pi = pi();

    $area = ($pi*$altura*($radio*$radio))/3;

    echo "El area del cono es: $area";
?>
</body>
</html>