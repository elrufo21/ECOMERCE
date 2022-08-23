<?php 
    require "../../model/connect.php";
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        $description = $_POST['description'];
        $state = $_POST['state'];
        $photo=$_POST['photo'];
        $price=$_POST['price'];
        $category=$_POST['category'];
        $descuento=$_POST['descuento'];
        $idUser = $_GET['id'];
        
        
        $sql = "INSERT INTO product(`nameProduct`,`description`,`state`,`photo`,`price`,`idUser`,`category`,`descuento`) VALUES (?,?,?,?,?,?,?,?)";
        $sql=$mdb->prepare($sql);
        $sql->bindParam(1,$name);
        $sql->bindParam(2,$description);
        $sql->bindParam(3,$state);
        $sql->bindParam(4,$photo);
        $sql->bindParam(5,$price);
        $sql->bindParam(6,$idUser);
        $sql->bindParam(7,$category);
        $sql->bindParam(8,$descuento);
        $sql->execute();
        
        header("Location: ../../index.php");
    }
?>