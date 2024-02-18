<?php

//conectar a la base de datos
include("../models/db.php");

//declarar variables
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

//consulta sql

$consulta2="SELECT*FROM usuarios where usuario = '$usuario'";

//Ejecuta una consulta a nuestra base de datos

$resultado2= mysqli_query($conexion,$consulta2);

//almacena en un array 
$filas= mysqli_fetch_array($resultado2);





error_reporting(0);

    if ($filas['usuario']==$usuario) { // el nombre de usuario ya existe
        
     echo '<script> alert("ELIJA OTRO NOMBRE DE USUARIO");
     window.location="../views/LOGIN/registro2(1).html" </script>'; 



    }else{

     //consulta sql
     $consulta="INSERT INTO `usuarios` (`usuario`, `correo`, `contraseña`, `id_cargo`) VALUES ('$usuario', '$correo', '$contraseña', '2'); ";
     
     //Ejecuta lo q hicimos anteriormente(el agregar un usuario:cliente
     $resultado= mysqli_query($conexion,$consulta);

     echo '<script> alert("CUENTA CREADA CON EXITO");
     window.location="../index.html" </script>'; 
     }





mysqli_close($conexion);
 
   
?>