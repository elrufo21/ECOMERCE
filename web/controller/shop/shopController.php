<?php 
    
    if(isset($_GET['cate'])){
        $cate = $_POST['category'];
        header("Location:../../index.php?tienda=1&filtro=$cate");
    }else{
        include "model/connect.php";
        $sql = "SELECT * FROM product";
        $query= $mdb->prepare($sql);
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_OBJ);  
    }
    
    
    
    