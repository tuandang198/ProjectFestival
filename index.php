<?php
session_start();
$connect = new mysqli('localhost', 'root', '', 'db_festival');
mysqli_set_charset($connect, 'utf8');
?>
<!DOCTYPE html>
<html lang="">
<head>
<title>Shiphile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php if(isset($_GET['request']) || isset($_GET['order']) || isset($_GET['festival'])):?>
<?php include "layout/headerFes.php"?>
<?php else:?>
<?php include "layout/header.php"?>
<?php endif;?>
<div class="clear">
<?php if(isset($_GET['option'])):?>
<?php include "controllers/controller.php" ?>
<?php elseif(isset($_GET['festival'])):?>
<?php include "controllers/fes_controller.php" ?>
<?php elseif(isset($_GET['account'])):?>
<?php include "controllers/account_controller.php" ?>
<?php elseif(isset($_GET['order'])):?>
<?php include "controllers/order_controller.php"?>
<?php else:?>
<?php $query = "SELECT * FROM `festival` WHERE `status`=1 ORDER BY RAND ( ) LIMIT 2";
    $result = $connect->query($query); include "layout/home.php";?>   
<?php endif;?>
</div>
<?php include "layout/footer.php" ?>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>