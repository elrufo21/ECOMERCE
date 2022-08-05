<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login-user">
        <h1>Inicio de Sesion</h1>
        <form action="../../../../controller/user/loginController.php" method="POST">
            <label>Correo Electronico
                <input type="mail" placeholder="example@email.com" name="email">
            </label>
            <label>Contraseña
                <input type="password" name="password">
            </label>     
            <button type="submit" name="enviar">Ingresar</button>
        </form>
        <span>¿No tiene una cuenta?<a href="#">Cree una</a></span>
    </div>
</body>
</html>