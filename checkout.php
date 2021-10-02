<?php

    session_start();

    if(!isset($_SESSION['roll_id'])){
        header('location: login.php');
    }else{
        if($_SESSION['roll_id'] != 2){
            header('location: login.php');
        }
    }
?>

<html>
<head>
    <title>Checkout</title >
    <meta http-equiv="content-type"  content="text/html;charset=utf-8">
    <link rel="stylesheet" type="text/css" href="./css/by.css"/>
</head>
<body background="/backgrounds/cerro.jpg">
    <?php
        echo "<center>";
        echo "<h1>Checkout...</h1>";
        echo "</center>";
        echo "<center>";
        echo"<h2>Formas de Pago</h2>";
        echo "<a class='btn' href='Debito.php'>Debito</a>&nbsp;&nbsp;";
        echo "<a class='btn' href='Credito.php'>Credito</a><br><br>";
        echo "<a href='carrito.php'><img src='./icon/back.png' width='120px'></a>";
        echo "</center>";
    ?>
</body>
</html>