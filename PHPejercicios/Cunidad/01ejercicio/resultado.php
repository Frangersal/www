<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $dia = $_POST['dia'];

        switch ($dia) {
            case 'lunes':
                echo "Matematicas";
                break;
            
            case 'martes':
                echo "Quimica";
                break;
        
            case 'miercoles':
                echo "Programacion";
                break;
    
            case 'jueves':
                echo "Estadistica";
                break;

            case 'viernes':
                echo "Principios electricos";
                break;
                                                    
            default:
                echo "Dia no definido";
                break;
        }
    
    ?>
    
</body>
</html>