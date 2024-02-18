<?php
//declarar variable
$codigo=$_POST['codigo'];


error_reporting(0);

if ($codigo==22222) { // el codigo : es 22222
    echo '<script> alert("CODIGO DE REGALO VALIDO");
     window.location="../views/LOGIN/registro2(3).html" </script>'; 
  

}
elseif ($codigo==12345) { // el usuario : es 12345
    echo '<script> alert("CODIGO DE REGALO VALIDO");
     window.location="../views/LOGIN/registro2(3).html" </script>'; 
    
}
else {
    echo '<script> alert("CODIGO DE REGALO INVALIDO");
     window.location="../views/LOGIN/registro2(2).html" </script>'; 
   
}


?>