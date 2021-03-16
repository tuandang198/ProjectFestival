<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
    <div id="gallery"> 
      
        <?php
$results_per_page = 5;
$sql='SELECT * FROM books';
$result = mysqli_query($connect, $sql);
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results/$results_per_page);
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$this_page_first_result = ($page-1)*$results_per_page;
$sql='SELECT * FROM books LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_array($result)) {
  ?>

        <figure>
          <header class="heading">Book Gallery</header>
          <ul class="nospace clear">
          <?php foreach($result as $item):?>
            <a href="?order=bookDetail&ID=<?= $item['book_id'] ?>">
            <img src="images/books/<?= $item['img'] ?>" alt="">
        </a>
        
          </ul>
          <figcaption><p><?= $item['name'] ?></p></figcaption>
          <?php endforeach;?>
        </figure>
      
<?php }?>
<nav class="pagination">
        <ul>
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<li><a href="?option=gallerybook&page=' . $page . '">' . $page . '</a> </li> ';
}

?>

        </ul>
      </nav>
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>
