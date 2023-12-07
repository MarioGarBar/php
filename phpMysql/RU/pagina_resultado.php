<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require("../datos_conexion.php");
        $busqueda=$_GET["buscar"];

        //conexion con funcion mysqli_connect
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
        //Seleccionamos BBDD
        mysqli_select_db($conexion,$db_nombre);
        //Agregar utf8 para usar caracteres latinos
        mysqli_set_charset($conexion,"utf8");

        $consulta="SELECT * FROM artículos WHERE `NOMBRE ARTÍCULO` LIKE '%$busqueda%'";
        $resultado=mysqli_query($conexion,$consulta);

        while($fila=mysqli_fetch_assoc($resultado)){
            echo "<form action='actualizar.php' method='get'><br><br>";
            
            echo "<label>Nombre Artítulo <input type='text' name='n_art' value='" . $fila['NOMBRE ARTÍCULO']. "'></label><br>";

            echo "<label>Sección <input type='text' name='seccion' value='" . $fila['SECCIÓN']. "'></label><br>";

            echo "<label>Fecha <input type='text' name='fecha' value='" . $fila['FECHA']. "'></label><br>";

            echo "<label>País de origen <input type='text' name='p_ori' value='" . $fila['PAÍS DE ORIGEN']. "'></label><br>";

            echo "<label>Precio <input type='text' name='precio' value='" . $fila['PRECIO']. "'></label><br>";
             
            echo "<input type='submit' value='Actualizar' name='actualizar'>";
            echo "</form>";
        }

        mysqli_close($conexion);
    ?>
</body>
</html>