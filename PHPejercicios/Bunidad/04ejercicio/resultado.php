<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
        <?php
            $a = $_POST['a'];
            $b = $_POST['b'];

            $suma = $a+$b;
            $resta = $a-$b;
            $mult = $a*$b;
            $div = $a/$b;

            echo "Suma de $a y $b es: ".$suma."<br>";
            echo "Resta de $a y $b es: ".$resta."<br>";
            echo "Multiplicacion de $a y $b es: ".$mult."<br>";
            echo "Division de $a y $b es: ".$div."<br>";
        
        ?>
</body>
</html>