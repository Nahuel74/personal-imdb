<?php 
    if (!isset ($_SESSION["id"])){
        header("location: /index.php?error=nologin");
        exit();
    }
?>