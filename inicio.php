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
        //colores
        $skin = $row['skin'];
        $vida = $row['vida'];
		$chaleco = $row['chaleco'];
        $dinero = $row['dinero'];
        $nivel = $row['nivel'];
        $trabajo = $row['trabajo'];
        $vip = $row['vip'];
        if($row['vip'] == 0)
        {
            $vip = 'No Vip';
        }
        else if($row['vip'] == 1)
        {
            $vip = 'Eres Vip';
        }
        if($row['trabajo'] == 0)
		{
		$trabajo = 'Ninguno';
		}
		else if($row['trabajo'] == 1)
		{
		$trabajo = 'Medico';
		}
		else if($row['trabajo'] == 2)
		{
		$trabajo = 'Mecanicos';
		}
		else if($row['trabajo'] == 3)
		{
		$trabajo = 'Armero';
		}
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
                    <h4><?php echo " Bienvenido: $username <br> Vip: $vip"?></h4>
                    <div id="skin">
                        <center><img src="img/skins/Skin_<?php echo $skin?>.png" width="55" height="100"></center>
                    </div>
                    <center>
                        <h3>General</h3>
                        <table width="300" border="0" align="center" bgcolor="#FFFFFF">
                            <tr>
                                <td width="145" height="20">
                                    <center>Vida</center>
                                </td>
                                <td width="145">
                                    <center><a style="color:#F00"><?php echo $vida?>/100</a></center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>Armadura:</center>
                                </td>
                                <td>
                                    <center><?php echo $chaleco?>/100</center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>Dinero:</center>
                                </td>
                                <td>
                                    <center><?php echo $dinero?></center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>Trabajo:</center>
                                </td>
                                <td>
                                    <center><?php echo $trabajo?></center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>Nivel:</center>
                                </td>
                                <td>
                                    <center><?php echo $nivel?></center>
                                </td>
                            </tr>
                </div>
            </div>
        </div>
    </div>

</body>

</html>