<?php 
    include "model/connect.php";
    $sql = "SELECT * FROM product";
    $query= $mdb->prepare($sql);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_OBJ);

