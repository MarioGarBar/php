<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php   
    

        
        require("datos_conexion.php");
       

        //conexion con funcion mysqli_connect
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contraseña);
        //Seleccionamos BBDD
        mysqli_select_db($conexion,$db_nombre);


       

        //Agregar utf8 para usar caracteres latinos
        mysqli_set_charset($conexion,"utf8");

        //Query
        $consulta="INSERT INTO `artículos`(`SECCIÓN`, `NOMBRE ARTÍCULO`, `FECHA`, `PAÍS DE ORIGEN`, `PRECIO`) 
        VALUES ('DEPORTES', 'RAQUETA DE BADMINTON', '01/01/2022', 'CHINA', 30.56);
        ";



        $resultado=mysqli_query($conexion, $consulta);
        
        

        mysqli_close($conexion);

    ?>


</body>
</html>