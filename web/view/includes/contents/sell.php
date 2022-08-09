<div class="container-sell">
    <div class="content__sell">
        <form action="controller/shop/sellController.php?id=<?php echo $_GET["venta"]; ?>" method="POST">
            <h1>Publicar tu producto</h1>
            <label for="">Nombre del producto
                <input type="text" name="name">

            </label>
            <br>
            <label for="">Descripcion del producto
                <br>
                <textarea name="description" id="" cols="30" rows="5">
                </textarea>

            </label>
            <br>
            <label for="">Estado
                <select name="state">
                    <option value="1" selected>Nuevo</option>
                    <option value="2">Casi nuevo</option>
                    <option value="3">Usado</option>
                    <option value="4">Deteriorado</option>
                </select>
            </label>


            <label for="">Foto del producto
                <input type="text" name="photo">

            </label>
            <br>
            <label for="">Precio del Producto
                <input type="number" name="price">

            </label>

            <label for="">Categoria
                <select name="category">
                    <option value="elec" selected>Electronica</option>
                    <option value="ropa">Ropa y Calzados</option>
                    <option value="colec">Coleccionable</option>
                    <option value="chata">Chatarra</option>
                    <option value="hogar">Cosas del Hogar</option>
                    <option value="variado">Otros</option>
                </select>
            </label>
            <br>
            <label for="">Descuento
                <input type="number" min="0" max="100" name="descuento">
            </label>

            <button type="submit">Publicar</button>
        </form>
    </div>
</div>