<?php 

    $dia = $_POST['dia'];

    switch ($dia) {
        case '1':
            echo "Domingo";
            break;

        case '2':
            echo "Lunes";
            break;

        case '3':
            echo "Martes";
            break;

        case '4':
            echo "Miercoles";
            break;

        case '5':
            echo "Jueves";
            break;

        case '6':
            echo "Viernes";
            break;

        case '7':
            echo "Sabado";
            break;
                                                                                    
        default:
            echo "Ese dia no existe";
            break;
    }

?>