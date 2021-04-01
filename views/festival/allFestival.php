
 <div class="wrapper row3" style="background-color: #dcccb0;">   

<?php
$results_per_page = 4;
$result = showFestival();
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results/$results_per_page);
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$this_page_first_result = ($page-1)*$results_per_page;
$sql='select * from festival where status=1';
 if(isset($_GET['religionID'])){
  $sql.=" and religion_id=".$_GET['religionID'];
}elseif(isset($_POST['search'])){
  $sql.=" and title like '%" . $_POST['search_name'] . "%'";
} 
$sql.= ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($connect, $sql);
// echo print_r($sql);
?>

<div class="posts" style="background-color: #dcccb0; min-height:100vh;">
<?php if(!isset($_GET['religionID'])):?>
<div id="comments">
      <form action="" method="post">
      <div >
                <input type="text" placeholder="Search" name="search_name">
                <input type="submit" value="Submit" name="search" hidden>
                </div>
      </form>
      </div>
<?php endif;?>
    <?php foreach($result as $item):?>
      <figure class="group">
        <div><a style="margin: 80px 56px 0 142px;" class="imgover" href="?option=festivalDetail&id=<?=$item['fes_id']?>"><img src="<?=$item['title_image']?>" alt=""></a></div>
        <figcaption style="padding: 140px 120px 0 126px;">
          <h6 class="heading" ><?=$item['title']?></h6>
          <p><?=$item['description']?></p> <!-- Gioi thieu chung -->
          <footer><a style="background-color: #e68e14; color: black;" class="btn" href="?option=festivalDetail&id=<?=$item['fes_id']?>">Đọc tiếp</a></footer>
        </figcaption>
      </figure>
      <?php endforeach;?>
    </div>
      

<nav class="pagination" style="padding-bottom: 10px;padding-top: 20px;">
<ul> 
<?php
if(isset($_GET['religionID'])){
  for ($page=1;$page<=$number_of_pages;$page++) {
    echo '<li><a style="color: black;border: black thin solid;" href="?option=showFes&religionID=' . $_GET['religionID'] . '&page=' . $page . '">' . $page . '</a> </li> ';
}
}elseif(isset($_POST['search_name'])){
  for ($page=1;$page<=$number_of_pages;$page++) {
    echo '<li><a style="color: black;border: black thin solid;" href="?option=showFes&search=' . $_POST['search_name'] . '&page=' . $page . '">' . $page . '</a> </li> ';
}
}
else{
  for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<li><a style="color: black;border: black thin solid;" href="?option=showFes&page=' . $page . '">' . $page . '</a> </li> ';
}
}


?>

        </ul>
      </nav>
      </div>
      </div>

