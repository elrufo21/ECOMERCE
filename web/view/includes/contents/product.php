<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="../../../plugin/estyle/product.css">
</head>

<body>
    <?php
    $idP = $_GET['idP'];

    require_once "../../../model/productModel.php";
    foreach ($result as $dato) {
        $idUser = $dato->idUser;
        require "../../../model/userModel.php";
    ?>
        <div class="container">

            <div class="ContrainerProduct">
            <h4 class="publicadoP">Publicado por <a href=""><?php echo $nombre ?></a> el <span><?php echo $dato->publicationDate?></span></h4>
                <div class="image">
                    <img src="<?php echo $dato->photo ?>" alt="">
                </div>
                <h1><?php echo $dato->nameProduct ?></h1>
                <h4><?php echo $dato->description ?></h4>
                <?php if($dato->state==1){
                    echo "<h4>Estado: Nuevo</h4>";
                }elseif($dato->state==2){
                    echo "<h4>Estado: Casi nuevo</h4>";
                }elseif($dato->state==3){
                    echo "<h4>Estado: Usado</h4>";
                }elseif($dato->state==4){
                    echo "<h4>Estado: Deteriorado</h4>";
                }?>
                <button><?php if($dato->descuento>0){
                    $total= $dato->price - ($dato->price*($dato->descuento/100));
                    echo "Total: "."<span>$total$</span>";
                }else{echo "Total: $dato->price$";}?></button>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>