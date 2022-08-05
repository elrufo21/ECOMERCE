<header class="nav-bar">
    <div class="logo">
        <h1><span>E</span>ruf<span>O</span></h1>
    </div>
    <div class="nav-bar__items">
        <li class="contenido">
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Contacto</a>
        </li>
        <?php
        if (isset($_SESSION['user'])) {
            echo '<li><a href="#">Usuario</a></li>';
        } else {
            echo '<li><a href="#" id="inicioSesion">Iniciar Sesion</a></li>';
        }
        ?>
    </div>
</header>