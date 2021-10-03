<!DOCTYPE html>
<html lang="en">
<head>
    <title>EternalSamp - Login</title>
    <?php require_once "scripts.php"; ?>
</head>
<body style="background-color:gray">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">Login</div>
                    <div class="panel panel-body">
                        <div style="text-align: center;">
                            <img src="/img/fondo.jpg" height="150">
                        </div>
                        <p></p>
                        <form action="verificar.php" method="post">
                        <p></p>
                        <label>Usuarios</label>
                        <input type="text" class="form-control input-sm" name="user" required placeholder="Escribe tu usuario">
                        <label>Contraseña</label>
                        <input type="password" class="form-control input-sm" name="pass" required placeholder="Escribe tu contraseña">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Iniciar Sesión" name="iniciar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>