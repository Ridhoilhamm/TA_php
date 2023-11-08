<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php 
include("header.php");
    session_start();
?>
<h2>Selamat datang <?=$_SESSION['username']?> di website Perpus Online.</h2>


</body>
</html>