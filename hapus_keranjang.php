<?php
    session_start();
    unset($_SESSION['cart'][$_GET['']]);
    header('location: keranjang.php');
?>
