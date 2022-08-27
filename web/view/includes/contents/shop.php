<?php
require_once "controller/shop/shopController.php";

?>
<style>
    .filtro {
        position: absolute;
    }
</style>
<div class="container">
    <div class="filtro">
        <form action="controller/shop/shopController.php?cate=1" method="post">
            <select name="category">
                <option value="elec" selected>Electronica</option>
                <option value="ropa"  <?php if($_GET['filtro']=="ropa"){echo "selected";}?>>Ropa y Calzados</option>
                <option value="colec" <?php if($_GET['filtro']=="colec"){echo "selected";}?>>Coleccionable</option>
                <option value="chata"  <?php if($_GET['filtro']=="chata"){echo "selected";}?>>Chatarra</option>
                <option value="hogar"  <?php if($_GET['filtro']=="hogar"){echo "selected";}?>>Cosas del Hogar</option>
                <option value="variado"  <?php if($_GET['filtro']=="variado"){echo "selected";}?>>Otros</option>
            </select>
            <button type="submit" name="filtro">Filtrar</button>
        </form>
    </div>
    <?php

    if (isset($_GET['filtro'])) {
        require "model/connect.php";
        $cate = $_GET["filtro"];
        $sql = "SELECT * FROM product WHERE category = '$cate'";
        $query = $mdb->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $dato) { ?>
            <div style="margin-top: 13px;">
                <div class="card">
                    <img src="<?php echo $dato->photo ?>" alt="">
                    <h4><?php echo $dato->nameProduct ?></h4>
                    <p><?php echo $dato->description ?></p>
                    <a href="view/includes/contents/product.php?idP=<?php echo $dato->idProduct ?>&id=<?php echo $dato->idUser ?>">Comprar $<?php echo $dato->price ?></a>
                </div>
            </div>
        <?php }
    } else {
        foreach ($result as $dato) { ?>

            <div style="margin-top: 13px;">
                <div class="card">
                    <img src="<?php echo $dato->photo ?>" alt="">
                    <h4><?php echo $dato->nameProduct ?></h4>
                    <p><?php echo $dato->description ?></p>
                    <a href="view/includes/contents/product.php?idP=<?php echo $dato->idProduct ?>&id=<?php echo $dato->idUser ?>">Comprar $<?php echo $dato->price ?></a>
                </div>
            </div>
    <?php }
    } ?>
</div>