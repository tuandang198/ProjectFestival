<?php
session_start();
$connect = new mysqli('localhost', 'root', '', 'db_festival');
mysqli_set_charset($connect, 'utf8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="../ckeditor/ckeditor.js"></script>
    <title>Administrator</title>
</head>
<body>
<?php
    if(!isset($_SESSION['adminAccount'])){
        include "../views/admin/signin.php";
    }else{
        include "../views/admin/controlpanel.php";
    }
    ?>
</body>
</html>