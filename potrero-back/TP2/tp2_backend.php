<!DOCTYPE html>
<html lang="es" dir= "ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabajo practico 2</title>
</head>
<body>
    <?php

    $numeropositivo = 1;

    if ($numeropositivo > 0) {
        echo "es un numero positivo";
    } 

    ?>
    <br>
    <?php

    $numero = 5;

    if ($numero > 1  && $numero < 10) {
        echo "es mayor y menor a ";
    } 
    ?>
    <br>
    <?php

    $numero3 = 15;

    if ($numero3 > 10 || $numero3 < 2 ){
        echo "es mayor o menor a";
    }

    ?>
    <br>
    <?php
    $numero1 = 25;
    $numero2 = 20;

    if ($numero1 > $numero2){
        echo $numero1 + $numero2 ;
        echo "<br>" ;
        echo $numero1 - $numero2;
    } elseif ($numero2 > $numero1) {
        echo $numero2 * $numero1;
        echo "<br>";
        echo $numero1 / $numero2;
        echo "<br>";
        echo $numero1 % $numero2;
    } elseif ($numero2 == $numero1){
        echo "Los numeros ingresados son iguales";
    }
    ?>
    
</body>
</html>