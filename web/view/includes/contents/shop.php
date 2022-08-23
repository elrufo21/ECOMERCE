<?php
require_once "controller/shop/shopController.php";

?>

<div class="container">
    <?php foreach ($result as $dato) {
    ?>

        <div class="card">
            <img src="<?php echo $dato->photo ?>" alt="">
            <h4><?php echo $dato->nameProduct ?></h4>
            <p><?php echo $dato->description ?></p>
            <a href="view/includes/contents/product.php?idP=<?php echo $dato->idProduct?>">Comprar $<?php echo $dato->price ?></a>
        </div>
    <?php } ?>
</div>
