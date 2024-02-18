<?php
//para volver de la pagina 
session_start();
$varsesion=$_SESSION['usuario'];
if ($varsesion=='Gabriel') {
   
    header("location:../views/LOGIN/admin.php");
    
}elseif ($varsesion=='Juan') {
   
    header("location:../views/LOGIN/admin.php");
    
}

else{

    header("location:../views/LOGIN/cliente.php");
}
?>