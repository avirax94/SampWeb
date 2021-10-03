<?php
session_start();
if(!isset($_SESSION['nombre'])) 
{
  header('Location: index.php'); 
  exit();
}
?>
<?php
  include 'config.php';
  $username = $_SESSION['nombre'];
  $query = mysqli_query($con,"SELECT * FROM cuentas WHERE Nombre = '$username'");
  while($row = mysqli_fetch_assoc($query))
    { 
        $admin = $row['admin'];
    }
    $fquery = mysqli_query($con,"SELECT * FROM noticias");
		while($row = mysqli_fetch_assoc($fquery))
		{ 
        $titulo = $row['titulo'];
        $texto = $row['detalle'];
        $userpos = $row['usuarios'];
        $fecha = $row['fecha'];
    }  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EternalSamp - Inicio</title>
    <?php require_once "scripts.php" ; ?>
</head>

<body>
    <br><br><br>
    <div class="container">
    <a href="inicio.php" class="btn btn-primary btn-lg active">Inicio</a>
                    <a href="home.php" class="btn btn-primary btn-lg active">Noticias</a>
                    <a href="salir.php" class="btn btn-primary btn-lg active">Salir</a>
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron">
                    <div class="noticias">
                    <center><h1>Noticias</h1></center>
                    <h2><?php echo "$titulo";?></h2>
                    <p><?php echo "$texto";?>
                   </p>
                   <label>Creador por:</label>
                   <?php echo $userpos?><br>
                   <label>Fecha</label>
                   <?php echo $fecha?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>