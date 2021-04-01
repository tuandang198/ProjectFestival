<div class="wrapper row3" style="background-color: #dcccb0;">
    <main class="hoc container clear">
        <div class="content three_quarter first">
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
                    <a href="?option=bookDetail&ID=<?= $result['book_id'] ?>">
                        <img src="images/books/<?= $result['img'] ?>" alt="">
                    </a>
                    <p style="font-weight: bold;"><?= $result['name'] ?> </p>
                    <p style="font-weight: bold;">by <?= $result['author'] ?></p>

                    <?php if (isset($_SESSION['customerAccount'])) : ?>
                        <div class="addToCart">
                            <button class="btn btn-warning my-3"><a onclick="addToCart(<?= $result['book_id'] ?>)" style="color: white;">Add to cart </a><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    <?php else : ?>
                        <div>
                            <button class="btn btn-warning my-3"><a href="index.php?account=signin" style="color: white;">Add to cart </a><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    <?php endif; ?>

                    <div class="">
                        Religion:<?php $relid = $result['religion'];
                                    $relBook = showRelByBookID($relid);
                                    echo $relBook['religion_name'] ?></a>
                    </div>
                    <p>Description:</p>
                    <div><?= $result['description'] ?></div>


                </div>



            </div>
            <script>
                function addToCart(bookID) {
                    $.get('index.php?option=books&action=add&id=' + bookID, function message() {
                        alert('Add success!')

                    })
                }
            </script>
        </div>
    </main>
</div>