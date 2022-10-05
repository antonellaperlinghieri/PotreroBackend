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
    foreach($numerospares as $valor) {
        print ("<p> $valor</p>");
    }    
    ?>
    <h3>Ejercicio N 2</h3>
    <?php
    $datos = [ 'Pedro' => 34, 'Ana'  => 1];
    print_r ("<p>$datos</p>")   
    ?>
    <h3>Ejercicio N 3</h3>
    <?php
    $datos2 = ['nombre' => "Pedro" , 'apellido' => "Torres", 'direccion' => "Av Mayor 3703", 'telefono' => 1122334455];
    foreach($datos2 as $valor) {
        print ("<p>$valor</p>");
    }    
    ?>
    <h3>Ejercicio N 4</h3>
    <?php
    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    foreach ($ciudades as $indice => $valor) {
        print "<p>La ciudad conel indice $indice tiene el nombre de : $valor</p>";
    }    
    ?>
      <h3> Ejercicio N 5 </h3>
    <?php
        $ciudades = ["MD"=>"Madrid","BCL"=> "Barcelona","LD"=> "Londres","NY"=> "New York","LA"=> "Los Angeles","CCG"=> "Chicago"];
        foreach ($ciudades as $indice => $valor) {
        print "<p>La ciudad con el indice $indice tiene el nombre de $valor</p>";
    }
    ?>
  </body>
</html>
