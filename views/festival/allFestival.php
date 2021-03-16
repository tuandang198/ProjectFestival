
      
<?php
$results_per_page = 4;
$sql=$query = "select * from festival where status=1";
if(isset($_GET['religionID'])){
    $query.=" and religion_id=".$_GET['religionID'];
};
$result = mysqli_query($connect, $sql);
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
} 
$sql.= ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_array($result)) {
  ?>

<div class="posts">
    <?php foreach($result as $item):?>
      <figure class="group">
        <div><a class="imgover" href="?festival=festivalDetail&id=<?=$item['fes_id']?>"><img src="<?=$item['title_image']?>" alt=""></a></div>
        <figcaption>
          <h6 class="heading"><?=$item['title']?></h6>
          <p><?=$item['description']?></p> <!-- Gioi thieu chung -->
          <footer><a class="btn" href="?festival=festivalDetail&id=<?=$item['fes_id']?>">Đọc tiếp</a></footer>
        </figcaption>
      </figure>
      <?php endforeach;?>
    </div>
      
<?php }?>
<br>
<nav class="pagination">
<ul>
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<li><a href="?festival=show&page=' . $page . '">' . $page . '</a> </li> ';
}

?>
</div>
        </ul>
      </nav>
      <div class="1">a</div>
    

