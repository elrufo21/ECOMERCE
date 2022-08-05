<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../../../plugin/estyle/register.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <form action="../../../../controller/user/registerController.php" method="post">
                <input type="text" placeholder="Nombres" name="name" required>
                <input type="text" placeholder="Apellido Paterno" name="firstName" required>
                <input type="text" placeholder="Apellido Materno" name="lastName" required>
                <label>
                    Fecha de Nacimiento<input type="date" name="dateBith" required> 
                </label>
                <input type="mail" placeholder="Email" name="email" required>
                <input type="password" placeholder="Contraseña" name="password" required>
                <input type="password" placeholder="Confirmar Contraseña" name="passwordComf" required>
                <button class="boton" type="submit" name="registrarse" >Registrarse</button>
            </form>
        </div>
    </div>
</body>

</html>