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
<?php include "layout/header.php"?>
<div>
<div class="clear" style="padding: 0 0 0px 0;" > 
<?php include "controllers/controller.php" ?>

</div>
<?php include "layout/footer.php" ?>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script type="text/javascript">
               $(document).ready(function() { /// Wait till page is loaded
   $('.addToCart').click(function(){
      $(' #cart-drawer').load('?option=books #cart-drawer', function() {
      });
   });
}); 
</script>
</body>
</html>