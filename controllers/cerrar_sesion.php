<?php
//cierra sesion y redirecciona a pagina de login 
session_start();
session_destroy();
header("location:../index.html");
?>