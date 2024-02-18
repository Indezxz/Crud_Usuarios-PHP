<?php
//seguridad de sesion 
session_start();
$varsesion=$_SESSION['usuario'];
if ($varsesion==null || $varsesion='') {
    echo "no tiene autorización";
    header("location:../login.html");
    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
    <title>PELIS DOG&reg; - ADMINISTRADOR</title>
    <link rel="shortcut icon" href="./img/icono.JPG" type="image/x-icon">
</head>
<body background="./img/fondo.jpg" >


    <!-- NOMBRE: USUARIO -->
    <center>
        <div class="bienvenida"><h1>BIENVENIDO ADMIN: &#128526; <?php echo $_SESSION['usuario'] ?>		&#128526;</h1>
        </div>
    
        <h3><a href="../../controllers/cerrar_sesion.php">CERRAR SESIÓN</a></h3>

    


    <!-- IMAGENES  -->
    <div class="container">
    <div class="row">
        <div class="col">
        <a href="../../models/tabla_usuarios.php"><img src="./img/usuario3.jpg" alt="" width="250px" height="250px"></a>
        </div>
        <div class="col">
        <a href="../../views/PELICULAS/peliculas.html">  <img src="./img/logo.JPG" alt="" width="250px" height="250px"> </a>
        </div>
        <div class="col">
        <a href="../../models/tabla_consultas.php"> <img src="./img/email2.webp" alt="" width="250px"> </a> 
        </div>
    </div>
    </div>

    
        
    <!-- Bootstrap/JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>


    <!-- CSS -->
<style>

    h1{
        width: 50%;
        margin-top: 40px;
        padding: 10px 10px;
        background-color: white;
    }
    h1:hover{
        color: black;
        background-color:cyan;
        transition: 500ms;
    }

    h3{
        border-radius: 20px;
    
        width: 25%;
        margin: 10px 10px;
        padding: 10px 10px;
        background-color:darkgrey;
    }

    h3:hover{
        background-color: red;
        color: white;
    }
    a{
        text-decoration: none;
    }
    img{
        margin-top: 50px;
        border-radius: 10px;
        cursor: pointer;
    }
    
</style>

</html>


