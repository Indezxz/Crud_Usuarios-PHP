<?php
//conectar a la base de datos
include("../models/db.php");

//variable
$ID=$_POST['txtID'];

$borrar = "DELETE FROM contacto where id = '$ID'";

//ejecuta :el boton eliminar
mysqli_query($conexion,$borrar);

//redireccionar
mysqli_close($conexion);

echo '<script> alert("CONSULTA ELIMINADA");
    window.location="../models/tabla_consultas.php" </script>'; 


?>