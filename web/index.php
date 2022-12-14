<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="plugin/estyle/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="plugin/estyle/shop.css">
    
</head>

<body>
    <?php
    session_start();
    ?>
    <?php
    include "view/includes/complements/header.php";
    ?>
    <?php
        if (isset($_GET['venta'])) {
            include "view/includes/contents/sell.php";
        }elseif (isset($_GET['tienda'])) {
            include "view/includes/contents/shop.php";
        }
    ?>

    <?php
    include "view/includes/complements/footer.php"
    ?>
    <script src="plugin/js/index.js">

    </script>
</body>

</html>