<?php

//declarar variables
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


//conectar a la base de datos
include("../models/db.php");


//Variable consulta basica de SQL
$consulta="SELECT*FROM usuarios where usuario = '$usuario' and contraseña ='$contraseña' ";

//Ejecuta una consulta a nuestra base de datos
$resultado= mysqli_query($conexion,$consulta);


//almacena en un array 
$filas= mysqli_fetch_array($resultado);

error_reporting(0);

    if ($filas['id_cargo']==1) { // el usuario : es administrador
        header("location:../views/LOGIN/admin.php");
    }
    elseif ($filas['id_cargo']==2) { // el usuario : es cliente basico
    
        header("location:../views/LOGIN/cliente.php");
    }
    elseif ($filas['id_cargo']==3) { // el usuario : es cliente premium
    
        header("location:../views/LOGIN/cliente.php");
    }

else {
    echo '<script> alert("USUARIO O CONTRASEÑA INVALIDO");
     window.location="../index.html" </script>'; 
   
   

}

mysqli_free_result($resultado);
mysqli_close($conexion);



?>