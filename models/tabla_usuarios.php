<?php
//se puede cambiar a include(db.php);
//conectar a la base de datos
//conectar a la base de datos
include("../models/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap / CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
    

    <title>PELIS DOG&reg; - REGISTRO DE USUARIOS</title>
    <link rel="shortcut icon" href="../views/LOGIN/img/icono.JPG" type="image/x-icon"></title>
</head>

<body>
    <h1></h1>
    <h1></h1>
    <h1 style="text-align:center "  >REGISTRO DE USUARIOS</h1>    
    
    <div class="espacio_tabla">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Cargo</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>

            <tbody>

            <?php

                error_reporting(0);

                $sql="SELECT * FROM usuarios";
                $result = mysqli_query($conexion,$sql);
           
               

                while ($mostrar = mysqli_fetch_array($result)) {
                   

            ?>
                <tr>
                    <td> <?php echo $mostrar['id'] ?> </td>
                    <td> <?php echo $mostrar['usuario'] ?> </td>
                    <td> <?php echo $mostrar['correo'] ?> </td>
                    <td> <?php echo $mostrar['contraseña'] ?> </td>
                    <td> <?php 
                    
                    if ($mostrar['id_cargo']==1) {
                        echo "Admin";
                    }elseif ($mostrar['id_cargo']==2) {
                        echo "Cliente <br>Basico";
                    }elseif ($mostrar['id_cargo']==3) {
                        echo "Cliente <br> Premium";
                    }
            
                    ?></td>
                    <td> <button class="btn btn-success" type="submit">Editar</button> </td>
                    <!--Boton Eliminar/formulario en php -->
                    <td>
                        <form action="../controllers/eliminar_usuario.php" method="post">
                            <input type="hidden" value="<?php echo $mostrar['id'] ?>" name="txtID" id="">
                            <input type="submit"  class="btn btn-danger"  value="Eliminar" name="btnEliminar">

                        </form>
                    </td>
                 </tr>

            <?php
                };
            ?>
        </tbody>
        </table>


    </div>

                <h3>&nbsp;&nbsp;<a href="../views/LOGIN/admin.php">VOLVER AL MENÚ PRINCIPAL</a></h3>



<!-- Bootstrap/JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

<style>
    * {
    box-sizing: border-box;
}
body{
    margin: 0;
    padding: 0;
    background-color: lightgray;
}


.espacio_tabla{
  margin-top: 60px;
 width: 70% ;
 margin-left: auto;
 margin-right: auto;
}
@media(max-width:740px) /*cuando es menor al tamaño de 740   */
{
.espacio_tabla{
margin-top: 60px;
 width: 100% ;
}
}
</style>