<!DOCTYPE html>
<html lang="es" dir = "ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3</title>
</head>
<body>
    <h3>Ejercicio N 1</h3>
    <?php 
    $num = 0;

    for ($i = 0 ; $i < 20; $i++) {
        echo "<br>";
        $num += 1;
        echo $num;
    }
    ?>
    <h3>Ejercicio N 2 </h3>
    <?php
    $numero = 100;
    for ($numero = 100; $numero > 0 ; $numero--) {
        echo "<br>";
        echo $numero;
    }
    ?>
    <h3>Ejercicio N 3 </h3>
    <?php
    $numeropar = 2;
    for($numeropar=2; $numeropar<=100; $numeropar= $numeropar+2){
        if(($numeropar%2) == 0){
            echo '<b>'.$numeropar.'</b><br>';
        }else{
            echo $numeropar."</br>";
        }
    }
    ?>
    <h3> Ejercicio N 4</h3>
    <?php
  $numeroimpar = 1;
  for($numeroimpar=1; $numeroimpar<=102; $numeroimpar= $numeroimpar+2){
      if(($numeroimpar%2) == 0){
          echo '<b>'.$numeroimpar.'</b><br>';
      }else{
          echo $numeroimpar."</br>";
      }
  }
?>
<h3>Ejercicio N 5</h3>
<?php
 $suma = 0;
 for ($i = 1; $i < 21;$i++) {
   print "<p> $i + $suma =  $i</p>"; 
 }

?>

<h3>Ejercicio N 6 </h3>
<?php
for($numeropar=2; $numeropar<=20; $numeropar= $numeropar+2){
    if(($numeropar%2) == 0){
        print "<p> $numeropar + $suma =  $numeropar</p>"; 
    }
}     
?>
</body>
</html>