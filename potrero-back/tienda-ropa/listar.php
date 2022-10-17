<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta base de datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <h1> Tienda de ropa </h1>
    <button type = "submit"><a href = "index.html">Inicio</a></button>
    <button type = "submit"><a href = "listar.php">Listar ropa</a></button>
    <button type = "submit"><a href = "agregar.html">Agregar ropa</a></button>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa en stock </p>
    <table class = "table">
    <tr>
        <th>ID</th>
        <th>TIPO-DE-PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
</table>

    <?php
    // Conexion
     $conexion=mysqli_connect("127.0.0.1","root","root");
     mysqli_select_db($conexion,"tienda-ropa");

     // Orden SQL
     $consulta= "SELECT*FROM ropa";

     // Ejecutar la orden y obtener registros
     $datos= mysqli_query ($conexion, $consulta);

     // Mostrar los datos del registro
     while ($fila =mysqli_fetch_array($datos)) {
        ?>
        <tr>
            <td><?php echo $reg['id']; ?></td>
            <td><?php echo $reg['tipo-de-prenda']; ?></td>
            <td><?php echo $reg['marca']; ?></td>
            <td><?php echo $reg['talle']; ?></td>
            <td><?php echo $reg['precio']; ?></td>
        </tr>
        <?php 
     }
?>
</body>
</html>