<?php 
    require "connect.php";
    $idUser = $_GET['id'];
    $sqlU = "SELECT * FROM usuario WHERE idUser=$idUser";
    $query= $mdb->prepare($sqlU);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_OBJ);
    foreach($result as $datoU){
        $nombre = $datoU->name." ".$datoU->firstName;
        $email = $datoU->email;
    }

    function products($idU){
        $cantidadP=0;
        require "connect.php";
        $sql = "SELECT * FROM product WHERE idUser = $idU";
        $query= $mdb->prepare($sql);
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_OBJ);
        foreach ($result  as $dato) {
            $cantidadP++;
        }
        echo $cantidadP;
    }
    function productsSell($idU){
        $cantidadS=0;
        require "connect.php";
        $sql = "SELECT * FROM product WHERE idUser = $idU";
        $query= $mdb->prepare($sql);
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_OBJ);
        foreach ($result  as $dato) {
            if($dato->SoldOut==1){
                $cantidadS++;
            }
        }
        echo $cantidadS;
    }
?>