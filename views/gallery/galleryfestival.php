<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
    <div id="gallery"> 
      
        <?php
$results_per_page = 4;
$sql='SELECT * FROM festival';
$result = mysqli_query($connect, $sql);
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results/$results_per_page);
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$this_page_first_result = ($page-1)*$results_per_page;
$sql='SELECT * FROM festival LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_array($result)) {
  ?>

        <figure>
          <header class="heading" style="text-align: center;">Festival Gallery </header>
          <ul class="nospace clear">
          <?php foreach($result as $item):?>
            <div><a class="imgover" href="?option=festivalDetail&id=<?=$item['fes_id']?>"><img src="<?=$item['title_image']?>" alt=""></a></div>
        
          </ul>
          <figcaption style="text-align: center;"><p><?= $item['title'] ?></p></figcaption>
          <?php endforeach;?>
        </figure>
      
<?php }?>
<nav class="pagination">
        <ul style="margin: 62px 0 0 0;">
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<li><a href="?option=galleryfestival&page=' . $page . '">' . $page . '</a> </li> ';
}

?>
</div>
        </ul>
      </nav>
    </div>
    <div class="clear"></div>
  </main>
</div>

