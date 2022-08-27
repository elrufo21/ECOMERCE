<?php 
    require "../../model/connect.php";

    if (isset($_POST['registrarse'])) {
        $name = $_POST['name'];
        $firstName= $_POST['firstName'];
        $lastName= $_POST['lastName'];
        $email= $_POST['email'];
        $dateBirth= $_POST['dateBith'];
        $password= $_POST['password'];
        $passwordComf= $_POST['passwordComf'];
        if ($password != $passwordComf) {
            header("Location: ../../view/includes/user/sesion/register.php");
        }else{
            $sql = "INSERT INTO usuario(`name`,`firstName`,`lastName`,`email`,`password`,`dateBirth`) VALUES (?,?,?,?,?,?)";
            $sql=$mdb->prepare($sql);
            $sql->bindParam(1,$name);
            $sql->bindParam(2,$firstName);
            $sql->bindParam(3,$lastName);
            $sql->bindParam(4,$email);
            $sql->bindParam(5,$password);
            $sql->bindParam(6,$dateBirth);
            $sql->execute();
            header("Locatio: ../../view/includes/user/sesion/login.php");
        }

    }else{
        echo "<script type='text/javascript'> alert('No se pudo registrar')</script>";
        header("Location: ../../view/includes/user/sesion/register.php");
    }

?>
