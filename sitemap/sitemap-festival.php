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
    <title>sitemap-festival</title>
</head>
<body>
<?php
include "../models/festival.php";
    $festival=showAllFes();
    ?>
	<h1>LIST OF BOOK</h1>
<table class="table table-bordered" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>Book URL: </th>
        <th>Created: </th>
        
    </tr>
    <tbody>
        <?php foreach($festival as $item):?>
            <tr>
            <td><a href="../?option=festivalDetail&id=<?=$item['fes_id']?>"><?=$item['title']?></a></td>
			<td><?=$item['created_at']?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
    </thead>
</table>
</body>
</html>