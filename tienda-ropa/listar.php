<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BaseDeDatos</title>
        <link rel="stylesheet" type="text/css" href="styles.css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
            <h1 class = "titulo"> Tienda de ropa </h1>
            <button type = "submit" class="btn btn-dark"><a href = "index.html" class = "link">Inicio</a></button>
            <button type = "submit" class="btn btn-dark"><a href = "listar.php" class = "link">Listar ropa</a></button>
            <button type = "submit" class="btn btn-dark"><a href = "agregar.html" class = "link">Agregar ropa</a></button>
            <h5>Lista de ropa</h5>
            <h5>La siguiente lista muestra los datos de la ropa en stock </h5>
            <table class = "table">
            <tr>
                <th>ID</th>
                <th>TIPO-DE-PRENDA</th>
                <th>MARCA</th>
                <th>TALLE</th>
                <th>PRECIO</th>
            </tr>
                <?php
            // Conexion
            $conexion=mysqli_connect("localhost","root","root");
            mysqli_select_db($conexion,"tienda-ropa");

            // Orden SQL
            $consulta= "SELECT*FROM ropa";

            // Ejecutar la orden y obtener registros
            $datos= mysqli_query ($conexion, $consulta);

            // Mostrar los datos del registro ejercicio A
            while ($fila =mysqli_fetch_array($datos)) { ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['tipo-de-prenda']; ?></td>
                    <td><?php echo $fila['marca']; ?></td>
                    <td><?php echo $fila['talle']; ?></td>
                    <td><?php echo $fila['precio']; ?></td>
                </tr>
                <?php 
            }
        ?>
        </table>
        <!-- Ejercicio B -->
        <h5> Lista con los registros del tipo de prenda Buzo</h5>
        <br>
        <table class = "table">
            <tr>
                <th>ID</th>
                <th>TIPO-DE-PRENDA</th>
                <th>MARCA</th>
                <th>TALLE</th>
                <th>PRECIO</th>
            </tr>
                <?php
            // Conexion
            $conexion=mysqli_connect("localhost","root","root");
            mysqli_select_db($conexion,"tienda-ropa");

            // Orden SQL
            $consulta = "SELECT * FROM `ropa` WHERE `tipo-de-prenda` = 'buzo'";

            // Ejecutar la orden y obtener registros
            $datos= mysqli_query ($conexion, $consulta);

            // Mostrar los datos del registro ejercicio A
            while ($fila =mysqli_fetch_array($datos)) { ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['tipo-de-prenda']; ?></td>
                    <td><?php echo $fila['marca']; ?></td>
                    <td><?php echo $fila['talle']; ?></td>
                    <td><?php echo $fila['precio']; ?></td>
                </tr>
                <?php 
            }
        ?>
        </table>
        <!-- Ejercicio C -->
        <h5> Lista con los registros de la marca Nike</h5>
        <br>
        <table class = "table">
            <tr>
                <th>ID</th>
                <th>TIPO-DE-PRENDA</th>
                <th>MARCA</th>
                <th>TALLE</th>
                <th>PRECIO</th>
            </tr>
                <?php
            // Conexion
            $conexion=mysqli_connect("localhost","root","root");
            mysqli_select_db($conexion,"tienda-ropa");

            // Orden SQL
            $consulta = "SELECT * FROM `ropa` WHERE `marca` = 'nike'";


            // Ejecutar la orden y obtener registros
            $datos= mysqli_query ($conexion, $consulta);

            // Mostrar los datos del registro ejercicio A
            while ($fila =mysqli_fetch_array($datos)) { ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['tipo-de-prenda']; ?></td>
                    <td><?php echo $fila['marca']; ?></td>
                    <td><?php echo $fila['talle']; ?></td>
                    <td><?php echo $fila['precio']; ?></td>
                </tr>
                <?php 
            }
        ?>
        </table>
        <!-- Ejercicio D -->
        <h5> Lista con los registros cuyo precio es mayor a 500</h5>
        <br>
        <table class = "table">
            <tr>
                <th>ID</th>
                <th>TIPO-DE-PRENDA</th>
                <th>MARCA</th>
                <th>TALLE</th>
                <th>PRECIO</th>
            </tr>
                <?php
            // Conexion
            $conexion=mysqli_connect("localhost","root","root");
            mysqli_select_db($conexion,"tienda-ropa");

            // Orden SQL
            $consulta = "SELECT * FROM `ropa` WHERE `precio` > '500'";

            // Ejecutar la orden y obtener registros
            $datos= mysqli_query ($conexion, $consulta);

            // Mostrar los datos del registro ejercicio A
            while ($fila =mysqli_fetch_array($datos)) { ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['tipo-de-prenda']; ?></td>
                    <td><?php echo $fila['marca']; ?></td>
                    <td><?php echo $fila['talle']; ?></td>
                    <td><?php echo $fila['precio']; ?></td>
                </tr>
                <?php 
            }
        ?>
        </table>
    </body>
</html>