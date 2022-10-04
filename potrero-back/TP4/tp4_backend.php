<!DOCTYPE html>
<html lang="es" dir = "ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP N 4</title>
</head>
<body>
    <h3>Ejercicio N 1</h3>
    <?php
    $numerospares = [2,4,6,8,10,12,14,16,18,20];
    echo "<br>";
    print_r ($numerospares);
    ?>
    <h3>Ejercicio N 2</h3>
    <?php
    $datos = [ 'Pedro' => 34, 'Ana'  => 1];
    print_r($datos);
    ?>
    <h3>Ejercicio N 3</h3>
    <?php
    $datos2 = ['nombre' => "Pedro" , 'apellido' => "Torres", 'direccion' => "Av Mayor 3703", 'telefono' => 1122334455];
    print_r($datos2);
    ?>
    <h3>Ejercicio N 4</h3>
    <?php
    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    print_r($ciudades);
    foreach ($ciudades as $valor) {
        print " <p> $valor </p>";
    }

    ?>
      <h3> Ejercicio N 5 </h3>
    <?php
 $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
 print_r($ciudades);
    foreach ($ciudades as $indice => $valor) {
        print "<p>El indice de Madrid es : $valor[0]$valor[2]</p>";
        return $indice;
    }
?></body>
</html>
