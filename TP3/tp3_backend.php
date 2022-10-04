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

    for ($num = 0 ; $num >= 100; $num++) {
        if ($num == 100) {
            break;
        }
    echo $num;
}
    ?>
</body>
</html>