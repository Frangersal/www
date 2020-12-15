
<!-- Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horass extras. Escribe
un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horass
ordinarias (40 primeras horass de trabajo) se pagan a 12 euros la horas. A partir de la horas 41, se
pagan a 16 euros la horas.  -->

<?php 

$horas = $_POST['horas'];
$salario = 0;

if ($horas<=40) {
    $salario = $horas*12;
    echo "El trabajador gana: $salario";

}elseif ($horas>=41) {
    $horasDespuesDeCuarenta=$horas-40;    
    $salario = ($horas*12)+($horasDespuesDeCuarenta*16);
    echo "El trabajador gana: $salario";
    
}

?>