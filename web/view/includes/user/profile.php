<?php
session_start();
require "../../../model/userModel.php";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nombre ?></title>
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <style type="text/css">
        html {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-size-adjust: 100%;
            line-height: 1.4;
        }

        * {
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            color: #404040;
            font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
        }

        .perfil-usuario {
            background: linear-gradient(#726f6f, transparent);
            color: #333;
        }

        .perfil-usuario .sombra {
            position: absolute;
            display: block;
            background: linear-gradient(transparent, rgba(0, 0, 0, .5));
            width: 100%;
            height: 50%;
            bottom: 0;
            left: 0;
        }

        .perfil-usuario .portada-perfil,
        .perfil-usuario .sombra {
            border-radius: 0 0 20px 20px;
        }

        .perfil-usuario img {
            width: 100%;
        }

        .contenedor-perfil {
            max-width: 1024px;
            margin-left: auto;
            margin-right: auto;
        }

        .perfil-usuario .contenedor-perfil {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 90%;
        }

        .perfil-usuario .portada-perfil {
            display: block;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            height: 20rem;
            margin-bottom: .5rem;
        }

        .perfil-usuario .avatar-perfil {
            display: block;
            width: 230px;
            height: 230px;
            background-color: #D9DCF1;
            position: absolute;
            bottom: -65px;
            left: 4rem;
            border-radius: 50%;
            overflow: hidden;
            border: 8px solid #FFFFFF;
            box-shadow: 0 0 12px 2px rgba(0, 0, 0, .2);
        }

        .perfil-usuario .cambiar-foto {
            position: absolute;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: rgba(0, 0, 0, .5);
            height: 57%;
            bottom: 0;
            left: 0;
            color: #fff;
            text-decoration: none;
            transform: translateY(50%);
            opacity: 0;
            transition: all ease-in 200ms;
        }

        .perfil-usuario .cambiar-foto i {
            margin-bottom: .5rem;
            font-size: 2rem;
        }

        .perfil-usuario .avatar-perfil:hover .cambiar-foto {
            transform: translateY(0);
            opacity: 1;
        }

        .perfil-usuario .datos-perfil {
            position: absolute;
            display: block;
            width: calc(100% - 230px - 8rem);
            right: 0;
            bottom: 0;
            color: #fff;
            text-shadow: 0 0 5px rgba(0, 0, 0, .2);
            padding-bottom: 1rem;
            padding-right: 1rem;
        }

        .perfil-usuario .titulo-usuario {
            font-size: 2.3rem;
            white-space: nowrap;
            margin-bottom: .5rem;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .perfil-usuario .bio-usuario {
            font-size: 1em;
            margin-bottom: .75rem;
        }

        .perfil-usuario .lista-perfil {
            list-style: none;
        }

        .perfil-usuario .lista-perfil li {
            display: inline-block;
            font-size: 1em;
            margin-right: 1rem;
        }

        .perfil-usuario .opcciones-perfil {
            display: block;
            position: absolute;
            right: 2rem;
            top: 1rem;
        }

        .perfil-usuario .opcciones-perfil button {
            border: 0;
            padding: 8px 20px;
            border-radius: 8px;
            background-color: rgba(0, 0, 0, .5);
            color: #fff;
            cursor: pointer;
        }

        .perfil-usuario .menu-perfil ul {
            display: flex;
            list-style: none;
            margin-left: calc(200px + 8rem);
            width: calc(100% - 200px - 8rem);
        }

        .perfil-usuario .menu-perfil ul li {
            margin-right: 1rem;
        }

        .perfil-usuario .menu-perfil a {
            display: block;
            text-decoration: none;
            color: inherit;
            padding: 8px 20px;
            font-weight: bold;
            border-radius: 8px;
            transition: all ease-in 100ms;
        }

        .perfil-usuario .menu-perfil a:hover {
            background-color: #dc3545;
            color: #fff;
        }

        .perfil-usuario .icono-perfil {
            display: none;
            margin-right: .75rem;
        }

        @media (max-width: 780px) {
            .perfil-usuario .contenedor-perfil {
                width: 100%;
            }

            .perfil-usuario .avatar-perfil {
                left: calc(50% - 115px)
            }

            .perfil-usuario .datos-perfil {
                bottom: 200px;
                left: 0;
                width: 100%;
                padding: 15px;
                text-align: center;
            }

            .perfil-usuario .bio-usuario {
                font-size: 1em;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }

            .perfil-usuario .titulo-usuario {
                font-size: 2.1rem;
            }

            .perfil-usuario .portada-perfil {
                height: 28rem;
            }

            .perfil-usuario .menu-perfil ul {
                flex-direction: column;
            }

            .perfil-usuario .lista-perfil {
                display: block;
            }

            .perfil-usuario .menu-perfil {
                margin-top: 2rem;
            }

            .perfil-usuario .menu-perfil ul {
                display: flex;
                list-style: none;
                margin-left: auto;
                margin-right: auto;
                padding-top: 2.5rem;
                width: 70%;
                background-color: #fff;
                border-radius: 12px;
                box-shadow: 0 0 12px 2px rgba(0, 0, 0, .1);
            }

            .perfil-usuario .icono-perfil {
                display: inline-block;
            }
        }

        .container {
            width: 100%;
            max-width: 1000px;
            height: 500px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: auto;
            margin-top: 20px;
            border: solid black 2px;
            overflow-y: scroll;
        }

        .container .card {
            width: 280px;
            height: 350px;
            border-radius: 8px;
            border: solid 1px #3498db;
            box-sizing: 0 2px 2px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            margin: 20px;
            text-align: center;
            transition: all 0.25s;
        }

        .container .card:hover {
            transform: translateY(-15px);
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
        }

        .container .card img {
            width: 280px;
            height: 220px;
        }

        .container .card h4 {
            font-weight: 600;
        }

        .container .card p {
            padding: 0 1rem;
            font-size: 16px;
            font-weight: 300;
        }

        .container .card a {
            font-weight: 500;
            text-decoration: none;
            color: #3498db;

        }
    </style>

    <?php


    ?>
    <section class="perfil-usuario">
        <div class="contenedor-perfil">
            <div class="portada-perfil" style="background-image: url('https://thestartingidea.com/wp-content/uploads/2018/12/ecommerce-tools.png');">
                <div class="sombra"></div>
                <div class="avatar-perfil">
                    <img src="https://thumbs.dreamstime.com/b/smiley-cara-feliz-del-vector-94248929.jpg" alt="img">

                    <a href="" class="cambiar-foto">
                        <i class="fas fa-camera"></i>
                        <span>Cambiar foto</span>
                    </a>
                </div>
                <div class="datos-perfil">
                    <h4 class="titulo-usuario"><?php echo $nombre ?></h4>
                    <p class="bio-usuario">Email: <?php echo $email ?></p>
                    <ul class="lista-perfil">
                        <li>Productos Publicados: <?php products($_GET['id']); ?></li>
                        <li>Productos Vendidos: <?php productsSell($_GET['id']); ?></li>
                        <li></li>
                    </ul>
                </div>
                <div class="opcciones-perfil">
                    <button type="" onclick="window.location = '../../../index.php'">Volver</button>
                    <button type=""><i class="fas fa-wrench"></i></button>
                </div>
            </div>
            <div class="menu-perfil">
                <ul>
                    <li><a href="#" title=""><i class="icono-perfil fas fa-bullhorn"></i> Productos</a></li>
                    <li><a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Informacion</a></li>

                </ul>
            </div>
        </div>
    </section>
    <div class="container">
        <?php
        require "../../../model/productModel.php";
        listarP($_GET['id']);
        ?>
    </div>
    <style>
        .mensaje a {
            color: inherit;
            margin-right: .5rem;
            display: inline-block;
        }

        .mensaje a:hover {
            color: #309B76;
            transform: scale(1.4)
        }
    </style>
    <div class="mis-redes" style="display: block;position: fixed;bottom: 1rem;left: 1rem; opacity: 0.5; z-index: 1000;">
        <p style="font-size: .75rem;">user</p>
        <div>
            <a target="_blank" href=""><i class="fab fa-facebook-square"></i></a>
            <a target="_blank" href=""><i class="fab fa-twitter"></i></a>
            <a target="_blank" href=""><i class="fab fa-instagram"></i></a>
            <a target="_blank" href=""><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</body>

</html>