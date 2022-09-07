<!DOCTYPE html>
<html lang="es" dir= "ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <?php

    echo "Hola Mundo";

    ?>
    <br>
    <hr>
    <h2>Ejercicio 2</h2>
    <?php

    $mensaje = "Hola Mundo";
    echo $mensaje;

    ?>
    <br>
    <hr>
    <h2>Ejercicio 3</h2>
    <h3>Suma</h3>
    <?php

    $numero1 = 18;
    $numero2 = 10;

    echo $numero1 + $numero2 ;
    ?>
    <br>
    <h3>Resta</h3>
    <?php

    echo $numero1 - $numero2;

    ?>
    <br>
    <h3>Multiplicación</h3>
    <?php

    echo $numero1 * $numero2;

    ?>
    <br>
    <h3>División</h3>
    <?php

    echo $numero1 % $numero2;

    ?>
    <br>
    <h3>Resto</h3>
    <?php

    echo $numero1 / $numero2;

    ?>

    <br>
    <hr>
    <h2>Ejercicio 4</h2>
    <?php

    $gradoscelsius = 20;
    $gradosfahrenheit = 32;

    echo ($gradoscelsius * 1.8) + $gradosfahrenheit;
    ?>
   <br>
   <hr>
   <h2>Perímetro y área de un rectángulo </h2>
   <?php

   $base = 18;
   $altura = 12;

   echo $base * $altura;
   ?>
    <h2>Perímetro de un circulo</h2>
    <?php
    $pi = 3.14;
    $radio = 30;

    echo $pi * $radio;
    ?>
</body>
</html>