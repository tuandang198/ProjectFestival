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

while($item = mysqli_fetch_array($result)) {
  ?>

<div>
        <div class="one_quarter">
            <a href="?order=bookDetail&ID=<?= $item['book_id'] ?>">
                <img src="images/books/<?= $item['img'] ?>" alt="">
            </a>
            <p><?= $item['name'] ?></p>
            <p><?= $item['price'] ?>$</p>
            <?php if (isset($_SESSION['customerAccount'])) : ?>
                <div>
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
<nav class="pagination">
        <ul>
<?php
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<li><a href="?order=books&page=' . $page . '">' . $page . '</a> </li> ';
}

?>

        </ul>
      </nav>
<script>
function addToCart(bookID){
    $.get('index.php?order=books&action=add&id='+bookID,function message(){
        alert('Add success!')
    })
}
</script>