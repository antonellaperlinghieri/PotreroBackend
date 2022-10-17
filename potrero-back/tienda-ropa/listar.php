<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta base de datos</title>
</head>
<body>
    <h1> Tienda de ropa </h1>
    <button type = "submit"><a href = "index.html">Inicio</a></button>
    <button type = "submit"><a href = "listar.php">Listar ropa</a></button>
    <button type = "submit"><a href = "agregar.html">Agregar ropa</a></button>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa en stock </p>
    <tr>
        <th>ID</th>
        <th>TIPO-DE-PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>

    <?php
    // Conexion
     $conexion=mysqli_connect("127.0.0.1","root","");
     mysqli_select_db($conexion,"tienda-ropa");

     // Orden SQL
     $consulta= "SELECT*FROM ropa";

     // Ejecutar la orden y obtener registros
     $datos= mysqli_query ($conexion, $consulta);

     // Mostrar los datos del registro
     while ($fila =mysqli_fetch_array($datos)); {
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