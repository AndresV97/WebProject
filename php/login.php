<?php 
    session_start();
    require_once "cn.php";
    /*$user = $_POST['username'];
    $pass1 = $_POST['contraseña'];

    $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE USUARIO = '".$user."' and PASS = '".$pass1."'");
    $nf = mysqli_num_rows($query);

    if ($nf == 1){
        echo "Bienvenido" .$user;
        header("Location: index.php");
    }
    elseif ($nf == 0){
        echo "El usuario no existe";
        header("Location: login.php");
        exit;
    }*/
    function verificarUsuario(){
        print($_POST['username'].":<br>");
    
        $mysql = conexionSQL();
    
        $q = "SELECT * FROM usuarios WHERE USUARIO='".$_POST['username']."' AND PASS='".$_POST['contraseña']."'";
        $Users = $mysql->query($q);
        $datos = mysqli_fetch_array ($Users);
        print($q."<br>");
        if(mysqli_num_rows($Users)!=0){
            session_start();
            $_SESSION['USUARIO'] = $_POST['username'];
            $_SESSION['auth'] = true;
            //header("Location: cuenta.php?log=true");
            
        }else{
            print("No hay usuarios");
        }
        if(isset($_SESSION['auth']) && $_SESSION['auth'] == true&& isset($_POST['login'])){
            print("Existe");
            $_SESSION['log']=true;
            $_SESSION['EMAIL'] = $datos[5];
            echo $datos[5];
            header("Location: ../php/index.php");	
        }else{
            print("No existe");
            header("Location: cuenta.php?error=true");
        }
    }
    
    verificarUsuario();
?>