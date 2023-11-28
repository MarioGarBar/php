<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="estilo.css" >
       

    
</head>
<body>
    <h1>Registo de articulos</h1>

    <form name="form1" method="get" action="registros.php">  
        <table>
            <tr>
                <td>Sección artículo</td>
                <td><label for="seccion"></label>
                <input type="text" name="seccion" id="seccion"></td>
            </tr>
            <tr>
                <td>Nombre artículo</td>
                <td><label for="n_art"></label>
                <input type="text" name="n_art" id="n_art"></td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><label for="fecha"></label>
                <input type="text" name="fecha" id="fecha"></td>
            </tr>
            <tr>
                <td>País de origen</td>
                <td><label for="p_ori"></label>
                <input type="text" name="p_ori" id="p_ori"></td>
            </tr>
            <tr>
                <td>Precio</td>
                <td><label for="precio"></label>
                <input type="text" name="precio" id="precio"></td>
            </tr>
                <td>&nbsp</td>
                <td>&nbsp</td>
            <tr>
                <td><input type="submit" name="enviar" id="enviar" value= "Enviar"></td>
                <td><input type="reset" name="borrar" id="borrar" value= "borrar"></td>

    




        </table>





    </form>
    


</body>
</html>