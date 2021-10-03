<?php
include 'config.php';


$usuario = $_POST["user"];   
$password = $_POST["pass"];
 

$result = mysqli_query($con,"SELECT * FROM cuentas WHERE Nombre = '$usuario'");
if($row = mysqli_fetch_array($result))
{     

 if($row["password"] == $password)
 {
  session_start();
  $_SESSION['nombre'] = $usuario;
  header("Location: inicio.php");  
 }
 else
 {
	echo '<script type="text/javascript"> alert("Contraseña incorrecta");window.location.href="index.php"</script>';
             
 }
}
else
{
	echo '<script type="text/javascript"> alert("Error de autentificacion");window.location.href="index.php"</script>';
}
mysqli_free_result($result);
mysqli_close($con);
?>