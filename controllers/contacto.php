<?php
    //conectar a la base de datos
    include("../models/db.php");

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $consulta="INSERT INTO `contacto` (`nombre`, `correo`, `telefono`, `mensaje`) VALUES ('$nombre', '$correo', '$telefono', '$mensaje'); ";
     
    //Ejecuta lo q hicimos anteriormente(el agregar un nuevo mensaje a la base de datos)
    $resultado= mysqli_query($conexion,$consulta);

    //Redirecciona
    header("Location:../views/CONTACTO/enviado.html");

   // $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\Teléfono: " . $telefono . "\nMensaje: " . $mensaje;
    // mail($destino,"Contacto", $contenido);
    // header("Location:Location:enviado.html");

    mysqli_close($conexion);

?>