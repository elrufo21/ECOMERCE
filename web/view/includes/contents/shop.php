<?php 
require_once "controller/shop/shopController.php";    
foreach($result as $dato){
?>

<div class="product-container">
    <div class="product">
        <img  alt="150px" class="img" src="<?php echo $dato->photo?>">
        <span><?php echo $dato->nameProduct ?></span>
        <span>Descripcion:</span>
        <span>Estado</span>
        <button type="button">Comprar <span>$<?php echo $dato->price?></span></button>
    </div>
</div>
<?php }?>