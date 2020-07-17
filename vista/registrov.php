<?php 
    require_once 'cnR.php';
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
    $insertar = "INSERT INTO usuarios(NOMBRE,APELLIDO, USUARIO, PASS, EMAIL) VALUES('$nombre', '$apellido', '$usuario', '$pass', '$email')";
    
    //Verificar que no se repitan usuarios
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE USUARIO = '$usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '<script>
                alert("Este usuario ya esta registrado");
                window.history.go(-1);
                </script>';
        exit;
    }
    //Verificar que no se repitan correos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE EMAIL = '$email'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script>
                alert("Este correo ya esta registrado");
                window.history.go(-1);
                </script>';
        exit;
    }
    //Verificar contraseñas
    if($pass != $pass2){
        echo '<script>
                alert("Las claves no coinciden");
                window.history.go(-1);
                </script>';
        exit;
    }

    //Ejecutar consulta
    $resultado = mysqli_query($conexion, $insertar);
    if(!$resultado){
        echo '<script>
                alert("Error al registrarse");
                window.history.go(-1);
                </script>';
    } else{
        echo '<script>
                alert("Usuario registrado exitosamente");
                location.href = "cuenta.php";
                </script>';
    }
   
    //Cerrar la conexion
    mysqli_close($conexion);

?>