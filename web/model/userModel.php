<?php 
    require "connect.php";

    $sqlU = "SELECT * FROM usuario WHERE idUser=$idUser";
    $query= $mdb->prepare($sqlU);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_OBJ);
    foreach($result as $datoU){
        $nombre = $datoU->name." ".$datoU->firstName;
        $email = $datoU->email;
    }
?>