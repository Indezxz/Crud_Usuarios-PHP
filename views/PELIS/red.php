<?php
//seguridad de sesion 
session_start();
$usuario=$_SESSION['usuario'];

//conectar a la base de datos
include("../../models/db.php");


//Variable consulta basica de SQL
$consulta="SELECT*FROM usuarios where usuario = '$usuario' ";

//Ejecuta una consulta a nuestra base de datos
$resultado= mysqli_query($conexion,$consulta);


//almacena en un array 
$filas= mysqli_fetch_array($resultado);

error_reporting(0);

    if ($filas['id_cargo']==1 || $filas['id_cargo']==3) { // el usuario : es admin o cliente premium
        ?>
<!---------------------------------------------------------------------
-----------------------------------------------------------------------
----------------------------------------------------------------------->        
<!-- COMIENZA LA PARTE DE HTML -->
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PELIS DOG&reg; - Turning Red</title>
    <link rel="shortcut icon" href="./img/icono.JPG" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b355a0cb3a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img class="dogg" src="./img/peliis doog.png" alt="" >
            <img class="nombre" src="./img/nombre_doog.png" alt="">
        </div>
        

        <div class="nav-menu">
            <input type="checkbox" id="check">
             <label for="check" class="checkbtn">
                 <i class="menu-icon"><img src="./img/bars.1" alt="">
                    </i>
             </label>
            <ul cl>
                <a href="../PELICULAS/peliculas.html">INICIO</a>
                <a href="../CATALOGO/index.html">CATALOGO</a>
                <a href="../NOSOTROS/NOSOTROS.html ">NOSOTROS</a>
                <a href="../EQUIPO/equipo.html">EQUIPO</a>
                <a href="../CONTACTO/contactoss13.html">CONTACTO</a>
                <a href="../../controllers/validar.php" class="nav-login">MENÚ PRINCIPAL</a>
            </ul>    
        </div>
    </header>

   
        <br> <br> <br>
   

    <div class="container">
        <div class="row">
          <div class="col-4">
            <img src="./img/poster_pelis/poster-red.jpg" alt="" width="300px">
          </div>
          <div class="col-8" style="font-size:20px;" >
            
                    <h2 style="background-color:grey; padding: 10px;" >TURNING RED</h2>
                    <br>
                    Año:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2022                        <br>
                    Duracion: &nbsp;&nbsp; 1h 40m    <br>
                    Género:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comedia/Infantil         <br>
                    <br>
                    Sipnósis: <br> Mei Lee, una niña de 13 años un poco rara pero segura de sí misma,
                    que se debate entre seguir siendo la hija obediente que su madre
                    quiere que sea y el caos de la adolescencia. 
          </div>
        </div>

    </div>    
   
   
   <div class="mirar">
    <h1>VER ONLINE</h1>
    
    <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          SERVIDOR 1
        </a>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
          SERVIDOR 2
        </a>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
          SERVIDOR 3
        </a>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
          SERVIDOR 4
        </a>
      
  </p>

    <div class="collapseing" id="collapseExample">
      <div class="card card-body">
        <iframe style="margin: 0 auto;" width="900" height="600" src="https://www.youtube.com/embed/-q-5MhqUN9E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="collapse" id="collapseExample1">
      <div class="card card-body">
        <iframe style="margin: 0 auto;" width="900" height="600" src="https://www.youtube.com/embed/a-ItDRMICpI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="collapse" id="collapseExample2">
      <div class="card card-body">
        <iframe style="margin: 0 auto;" width="900" height="600" src="https://www.youtube.com/embed/XdKzUbAiswE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="collapse" id="collapseExample3">
      <div class="card card-body">
        <iframe style="margin: 0 auto;" width="900" height="600" src="https://www.youtube.com/embed/wTI01q3ep-M?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    
</div>

<div class="mirar">
    <h1>COMENTARIOS</h1>
    
    <script id="cid0020000318491992519" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 900px;height: 300px;">{"handle":"pelisdog","arch":"js","styles":{"a":"707070","b":100,"c":"FFFFFF","d":"FFFFFF","k":"707070","l":"707070","m":"707070","n":"FFFFFF","p":"10.62","q":"707070","r":100,"fwtickm":1}}</script>
</div>
<br>
<br>
   





    <!--::::Pie de Pagina::::::-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="./img/peliis doog.png" alt="Logo de SLee Dw" width="60px" height="180px">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Pelis Dog fue creado por el Grupo 10 del Curso del Taller Programación Web. </p>
                <p>Es un servicio de Streaming por suscripción que les permite a sus usuarios ver series y películas sin publicidad, en un dispositivo con conexiónn a internet.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100082458677045" class="fa fa-facebook"></a>
                    <a target="_blank"  href="https://www.instagram.com/peliss_dog/" class="fa fa-instagram"></a>
                    <a target="_blank" href="https://twitter.com/AdeDiaz88373560" class="fa fa-twitter"></a>
                    <a target="_blank" href="https://chat.whatsapp.com/HEGTPGRE4tiDCP0boewusy" class="fa-brands fa-whatsapp"></a>
                  
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>PELIS DOG</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
<!--::::Pie de Pagina::::::-->
  

    <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;
        function initLandbot() {
          if (!myLandbot) {
            var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
            s.addEventListener('load', function() {
              var myLandbot = new Landbot.Livechat({
                configUrl: 'https://chats.landbot.io/v3/H-1262140-BEDWZOIDRHGRAT91/index.json',
              });
            });
            s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
          }
        }
        </script>
         <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

<?php

    }
    elseif ($filas['id_cargo']==2) { // el usuario : es cliente basico

        ?>
        <!---------------------------------------------------------------------
        -----------------------------------------------------------------------
        ----------------------------------------------------------------------->        
        <!-- COMIENZA LA PARTE DE HTML -->
                <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
              <title>PELIS DOG&reg; - Turning Red</title>
               <link rel="shortcut icon" href="./img/icono.JPG" type="image/x-icon">
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
           
            <!-- Fontawesome -->
            <script src="https://kit.fontawesome.com/b355a0cb3a.js" crossorigin="anonymous"></script>
        
            <link rel="stylesheet" href="./css/style.css">
        </head>
        <body>
            <header>
                <div class="logo">
                    <img class="dogg" src="./img/peliis doog.png" alt="" >
                    <img class="nombre" src="./img/nombre_doog.png" alt="">
                </div>
                
        
                <div class="nav-menu">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="menu-icon"><img src="./img/bars.1" alt="">
                            </i>
                    </label>
                    <ul cl>
                        <a href="../PELICULAS/peliculas.html">INICIO</a>
                        <a href="../CATALOGO/index.html">CATALOGO</a>
                        <a href="../NOSOTROS/NOSOTROS.html ">NOSOTROS</a>
                        <a href="../EQUIPO/equipo.html">EQUIPO</a>
                        <a href="../CONTACTO/contactoss13.html">CONTACTO</a>
                        <a href="../../controllers/validar.php" class="nav-login">MENÚ PRINCIPAL</a>
                    </ul>    
        </div>
            </header>
        
           
                <br> <br> <br>
           
        
            <div class="container">
                <div class="row">
                  <div class="col-4">
                    <img src="./img/poster_pelis/poster-red.jpg" alt="" width="300px">
                  </div>
                  <div class="col-8" style="font-size:20px;" >
                    
                            <h2 style="background-color:grey; padding: 10px;" >TURNING RED</h2>
                            <br>
                            Año:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2022                        <br>
                            Duracion: &nbsp;&nbsp; 1h 40m    <br>
                            Género:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Comedia/Infantil         <br>
                            <br>
                            Sipnósis: <br> Mei Lee, una niña de 13 años un poco rara pero segura de sí misma,
                            que se debate entre seguir siendo la hija obediente que su madre
                            quiere que sea y el caos de la adolescencia. 
                  </div>
                </div>
        
            </div>    
           
           
           <div class="mirar">
            <h1>VER ONLINE</h1>
            
            <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  SERVIDOR 1
                </a>
          </p>
        
            <div class="collapseing" id="collapseExample">
              <div class="card card-body">
                <iframe style="margin: 0 auto;" width="680" height="400" src="https://www.youtube.com/embed/-q-5MhqUN9E?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            
        </div>
        
        <div class="mirar">
            <h1>COMENTARIOS</h1>
            <br>
            <h4> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; No Disponible (solo Usuarios Premium)</h4>
        </div>
        <br>
        <br>
           
        
        
        
        
        
            <!--::::Pie de Pagina::::::-->
            <footer class="pie-pagina">
                <div class="grupo-1">
                    <div class="box">
                        <figure>
                            <a href="#">
                                <img src="./img/peliis doog.png" alt="Logo de SLee Dw" width="60px" height="180px">
                            </a>
                        </figure>
                    </div>
                    <div class="box">
                        <h2>SOBRE NOSOTROS</h2>
                        <p>Pelis Dog fue creado por el Grupo 10 del Curso del Taller Programación Web. </p>
                        <p>Es un servicio de Streaming por suscripción que les permite a sus usuarios ver series y películas sin publicidad, en un dispositivo con conexiónn a internet.</p>
                    </div>
                    <div class="box">
                        <h2>SIGUENOS</h2>
                        <div class="red-social">
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100082458677045" class="fa fa-facebook"></a>
                            <a target="_blank"  href="https://www.instagram.com/peliss_dog/" class="fa fa-instagram"></a>
                            <a target="_blank" href="https://twitter.com/AdeDiaz88373560" class="fa fa-twitter"></a>
                            <a target="_blank" href="https://chat.whatsapp.com/HEGTPGRE4tiDCP0boewusy" class="fa-brands fa-whatsapp"></a>
                          
                        </div>
                    </div>
                </div>
                <div class="grupo-2">
                    <small>&copy; 2022 <b>PELIS DOG</b> - Todos los Derechos Reservados.</small>
                </div>
            </footer>
        <!--::::Pie de Pagina::::::-->
          
        
            
                 <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        </body>
        </html>
        
        <?php        



    }

else {
    echo '<script> alert("ERROR INEXPLICABLE");
     window.location="../../index.html" </script>'; 
   
   

}

?>