<?php 
    require "connect.php";
    $id = $_GET['idP'];
    $sql = "SELECT * FROM product WHERE idProduct = $id";
    $query= $mdb->prepare($sql);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_OBJ);
    return $result;
    
    
?>

