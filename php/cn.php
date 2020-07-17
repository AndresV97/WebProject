<?php 
    define("SERVIDOR","localhost");
    define("USUARIO","root");
    define("PASS","");
    define("DB","luxury");
    
    function conexionSQL(){
        $link = new mysqli(SERVIDOR,USUARIO,PASS,DB);
        if($link->connect_error) {
            $error = "Error de conexion: ".$link->connect_errno
                    ."Mensaje: ".$link->connect_error;
            die($error);
        }else{
            $q = "SET CHARACTER SET UTF8";
            $link->query($q);
            return $link;
    /*else{
        echo "Conectado a la base de datos <br ?>"; 
    }*/
        }
    }
?>