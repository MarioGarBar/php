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
       

        //conexion con funcion mysqli_connect
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
        //Seleccionamos BBDD
        mysqli_select_db($conexion,$db_nombre);


       

        //Agregar utf8 para usar caracteres latinos
        mysqli_set_charset($conexion,"utf8");

        $seccion=$_GET["seccion"];
        $nombre_art=$_GET["n_art"];
        $fecha=$_GET["fecha"];
        $pOrigen=$_GET["p_ori"];
        $precio=$_GET["precio"];



        //Query
        $consulta="UPDATE  ARTÍCULOS SET SECCIÓN='$seccion', `NOMBRE ARTÍCULO`='$nombre_art', FECHA='$fecha', `PAÍS DE ORIGEN`='$pOrigen', PRECIO='$precio'
        WHERE 'NOMBRE ARTÍCULO'='$nombre_art'";



        $resultado=mysqli_query($conexion, $consulta);

        if($resultado==false){
            echo "Error en la consulta";
        }else{
            echo "Datos registrados <br><br>";

            echo "<table><tr><td>$seccion</tr></td>";
            echo "<table><tr><td>$nombre_art</tr></td>";
            echo "<table><tr><td>$fecha</tr></td>";
            echo "<table><tr><td>$pOrigen</tr></td>";
            echo "<table><tr><td>$precio</tr></td></table>";

            
        }
        
        

        mysqli_close($conexion);

    ?>


</body>
</html>