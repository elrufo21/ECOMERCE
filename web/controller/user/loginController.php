<?php

    $mail = $_POST['email'];
    $password = $_POST['password'];
    require "../../model/connect.php";

    $sql = "SELECT * FROM usuario WHERE email = '$mail'";
    $q = $mdb->prepare($sql);
    $q->execute(array());
    $dato = $q->fetch(PDO::FETCH_ASSOC);

    if (isset($dato["idUser"])) {
        if($dato["password"]==$password){
            session_start();

            $_SESSION['user']=array();
            $_SESSION['user']['name']=$dato['name'];
            $_SESSION['user']['email']=$dato['email'];
            $_SESSION['user']['birth']=$dato['dateBirth'];
            $_SESSION['user']['idUser']=$dato['idUser'];
            header("Location: ../../index.php");

            
        }else{
            echo "Fallo en la contraseña";
        }
    }else{
        echo "El email no existe";
    }

