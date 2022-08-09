<?php 
    if (isset($_GET['s'])) {
        session_start();
        session_destroy();
        header("Location: ../index.php");
    }
