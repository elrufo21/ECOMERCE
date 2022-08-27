<?php 
    require "connect.php";
    if(isset($_GET['idP'])){
        $id = $_GET['idP'];
        $sql = "SELECT * FROM product WHERE idProduct = $id";
        $query= $mdb->prepare($sql);
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    function listarP($idU){
        require "connect.php";
        $sql = "SELECT * FROM product WHERE idUser = $idU";
        $query= $mdb->prepare($sql);
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_OBJ);
        foreach($result as $dato){
            if($dato->SoldOut==1){
                $estado = "Vendido";
            }else{$estado="A la venta";}
            echo '<div class="card">'.
            '<img src="'.$dato->photo.'" alt="">'.    
            '<h4>'.$dato->nameProduct.'</h4>'.
            '<p>'.$dato->description.'</p>'.
            '<p>'.$estado.'</p>'.
            '</div>';
            
            
        
        }
        
    }
  
    
    
?>

