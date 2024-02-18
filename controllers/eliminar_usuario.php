<?php
//conectar a la base de datos
include("../models/db.php");

//variable
$ID=$_POST['txtID'];

if ($ID>2) {
    
//sentencia eliminar sql
$borrar = "DELETE FROM usuarios where id = '$ID'";

//ejecuta :el boton eliminar
mysqli_query($conexion,$borrar);

//redireccionar
mysqli_close($conexion);
echo '<script> alert("USUARIO ELIMINADO");
    window.location="../models/tabla_usuarios.php" </script>'; 


}else{
    echo '<script> alert("NO PUEDES BORRAR USUARIOS NIVEL: ADMIN");
    window.location="../models/tabla_usuarios.php" </script>'; 
}
?>