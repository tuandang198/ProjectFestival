<div class="wrapper row3" style="background-color: #dcccb0;">
<main class="hoc container clear">
<div class="content three_quarter first">
<?php
if (isset($_GET['action']) && $_GET['action'] == "add") {

    $id = intval($_GET['id']);

    if (isset($_SESSION['cart'][$id])) {

        $_SESSION['cart'][$id]['quantity']++;
    } else {

        $query_s = "SELECT * FROM books 
            WHERE book_id=$id";
        $result_s = $connect->query($query_s);
        if (mysqli_num_rows($result_s) != 0) {
            $item_s = mysqli_fetch_array($result_s);

            $_SESSION['cart'][$item_s['book_id']] = array(
                "quantity" => 1,
                "price" => $item_s['price']
            );
        } else {

            $message = "This product id is invalid!";
        }
    }
}

?>
<?php if (isset($message)) {
    echo $message;
}
?>

<?php
$results_per_page = 6;
$result = showbooks();
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results/$results_per_page);
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}
$this_page_first_result = ($page-1)*$results_per_page;
$sql='select * from books where status=1';
 if(isset($_GET['religionID'])){
  $sql.=" and religion=".$_GET['religionID'];
}elseif(isset($_POST['search'])){
  $sql.=" and name like '%" . $_POST['search_name'] . "%'";
}
$sql.= ' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($connect, $sql);

while($item = mysqli_fetch_array($result)) {
  ?>

<div>
        <div class="one_quarter">
            <a href="?option=bookDetail&ID=<?= $item['book_id'] ?>">
                <img class="imgr borderedbox inspace-5" src="images/books/<?= $item['img'] ?>" alt="">
            </a>
            <p><?= $item['name'] ?></p>
            <p><?= $item['price'] ?>$</p>
            <?php if (isset($_SESSION['customerAccount'])) : ?>
                <div class="addToCart">
                    <button class="btn btn-warning my-3"><a onclick="addToCart(<?= $item['book_id'] ?>)"
                     style="color: white;">Add to cart </a><i class="fas fa-shopping-cart"></i></button>
                </div>
            <?php else : ?>
                <div>
                    <button class="btn btn-warning my-3"><a href="index.php?account=signin" style="color: white;">Add to cart </a><i class="fas fa-shopping-cart"></i></button>
                </div>
            <?php endif; ?>
        </div>
    </div>
      
<?php }?>
</div>
<div class="sidebar one_quarter">
<h6>Book Category</h6>
      <nav class="sdb_holder">
        <ul>
          <li>Religion</li>
            <ul>
            <?php
            $query = "select * from religion where status=1";
            $result = $connect->query($query);
            ?>
            <?php foreach ($result as $item) : ?>
              <li><a href="?option=books&religionID=<?= $item['id'] ?>"><?= $item['religion_name']?></a></li>

            <?php endforeach; ?>            
            </ul>
          </li>
        </ul>
      </nav>
      <?php if(!isset($_GET['religionID'])):?>
      <div id="comments">
      <form action="" method="post">
      <div >
                <input type="text" placeholder="Search book" name="search_name">
                <input type="submit" value="Search" name="search">
                </div>
      </form>
      </div>
      <?php endif;?>
    </div>
</div>
<nav class="pagination">
        <ul>
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<li><a href="?option=books&page=' . $page . '">' . $page . '</a> </li> ';
}

?>

        </ul>
      </nav>
<script>
function addToCart(bookID){
    $.get('index.php?option=books&action=add&id='+bookID,function message(){
        alert('Add success!')
    })
}
</script>
</main>
</div>