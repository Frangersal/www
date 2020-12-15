<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php 
    $a=144;
    $b=999;

    $suma=$a+$b;
    $resta=$a-$b;
    $multiplicacion=$a*$b;
    $division=$a/$b;

    echo "valor de a: ".$a,"<br>";
    echo "valor de b: ".$b,"<br>";
    echo " 
    <table border='1'>
        <tr>
            <td><b>suma</b></td>
            <td>$suma</td>
        </tr>
        <tr>
            <td><b>resta</b></td>
            <td>$resta</td>
        </tr>
        <tr>
            <td><b>multiplicacion</b></td>
            <td>$multiplicacion</td>
        </tr>
        <tr>
            <td><b>division</b></td>
            <td>$division</td>
        </tr>
    </table>";
    ?>
    <br>
    
</body>
</html>