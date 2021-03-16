<?php
if (isset($_GET['add'])) {
    $id = intval($_GET['ID']);
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $query = "select * from books where book_id=$id";
        $result = $connect->query($query);
        if (mysqli_num_rows($result) != 0) {
            $_SESSION['cart'][$result['book_id']] = array(
                "quantity" => 1,
                "price" => $result['price']
            );
        } else {
            $message = "This product is invalid";
        }
    }
}
?>

<div>
    <?php if (isset($message)) {
        echo $message;
    } ?>
    <div class="">
        <a href="?order=bookDetail&ID=<?= $result['book_id'] ?>">
            <img src="images/books/<?= $result['img'] ?>" alt="">
        </a>
        <p><?= $result['name'] ?> </p>
        <p>by <?= $result['author'] ?></p>
        <div class="">
            Religion: <?= $result['religion'] ?></a>
        </div>
        <p><?= $result['description'] ?></p>


    </div>
    <?php if (isset($_SESSION['customerAccount'])) : ?>
        <div>
            <button class="btn btn-warning my-3"><a onclick="addToCart(<?= $result['book_id'] ?>)" style="color: white;">Add to cart </a><i class="fas fa-shopping-cart"></i></button>
        </div>
    <?php else : ?>
        <div>
            <button class="btn btn-warning my-3"><a href="index.php?account=signin" style="color: white;">Add to cart </a><i class="fas fa-shopping-cart"></i></button>
        </div>
    <?php endif; ?>

</div>
<script>
function addToCart(bookID){
    $.get('index.php?order=books&action=add&id='+bookID,function message(){
        alert('Add success!')
    })
}
</script>