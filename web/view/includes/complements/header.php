<header class="nav-bar">
    <div class="logo">
        <h1><span>E</span>ruf<span>O</span></h1>
    </div>
    <div class="nav-bar__items">
        <li class="contenido">
            <a href="index.php">Inicio <i class="bi bi-house"></i></a>
        </li>
        <li class="contenido">
            <a href="#" onclick="tienda(<?php if(isset($_SESSION['user'])){echo $_SESSION['user']['idUser'];}else{null; } ?>)">Tienda <i class="bi bi-envelope"></i></a>
        </li>
        <li class="contenido">
            <a href="#" onclick="venta(<?php if(isset($_SESSION['user'])){echo $_SESSION['user']['idUser'];}else{null; } ?>)">Vender <i class="bi bi-envelope"></i></a>
        </li>
        <?php
        if (isset($_SESSION['user'])) {
            echo '<li class="contenidoU"><a href="#">'.$_SESSION['user']['name'].'<i class="bi bi-justify desplegar"></i></a>
                    
                <ul class="menu-despl">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Mis Productos</a></li>
                        <li><a href="#" onClick="cerrar()">Cerrar Sesion</a></li>
                    </ul>
                 </li>';
        } else {
            echo '<li class="contenido"><a href="#" id="inicioSesion">Iniciar Sesion</a></li>';
        }
        ?>
    </div>
</header>