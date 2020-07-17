<?php 
 /*   include 'cn.php';
    //Recibir los datos y almacenarlos en variables
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $pass= $_POST["pass"];
    $pass2= $_POST["pass2"];
    $espacios = false;
    $cont = 0;
    

    //Consulta para insertar
    $insertar = "INSERT INTO productos(NOMBRE, PRECIO, IMAGEN) VALUES('$name', '$precio', '$imagen')";


    //Cerrar la conexion
    mysqli_close($conexion);*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Luxury Store</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo_css.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../javascript/javascript.js"></script>
</head>
<body >
    <div class="width-3">
        
    
    <form action="productos.php" class="formulario" method="POST" name="productos" enctype="multipart/form-data">
            <h4 class="formulario__titulo">INGRESAR PRODUCTO</h4>
              <div class="contenedor-inputs">
                <label class="formulario__label">Nombre <em>*</em></label>
                <input class="formulario__input" id="nombre" name="nombre" type="text" required><br>
                <label class="formulario__label">Precio <em>*</em></label>
                <input class="formulario__input" id="precio" name="precio" type="text" required><br>
                <label class="formulario__label">Imagen<em>*</em></label>               
                <input class="" id="imagen" name="imagen" type="file" required><br>
              </div>
              <input type="submit" class="formulario-submit" value="Ingresar producto">
            </form>
    </div>

</body>
</html>

