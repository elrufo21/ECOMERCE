<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../../../plugin/estyle/login.css">
</head>

<body>
    <div class="login-user">
        <div class="box">
            
            <h1>Inicio de Sesion</h1>
            <div class="container">

                <form action="../../../../controller/user/loginController.php" method="POST">

                    <input type="mail" placeholder="example@email.com" name="email">


                    <input type="password" name="password" placeholder="Contraseña">

                    <button type="submit" name="enviar">Ingresar</button>
                </form>

            </div>
            <span class="span">¿No tiene una cuenta?<a href="#" id="crear" onclick="urlCrear()">Cree una</a></span><br>
            <span class="span2">¿Olvidaste tus credenciales?<a href="register.php">Recuperar</a></span>
            <h4 class="logo"><span class="letra">E</span>ruf<span class="letra">O</span></h4>
        </div>
    </div>

    <script src="../../../../plugin/js/register.js">

    </script>
</body>

</html>