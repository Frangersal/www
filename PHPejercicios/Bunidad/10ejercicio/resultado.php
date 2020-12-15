<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $Mb = $_POST['Mb'];
    $Kb = $Mb*1024;

    echo "$Mb Mb es quivalente a $Kb Kb.";


?>   
</body>
</html>