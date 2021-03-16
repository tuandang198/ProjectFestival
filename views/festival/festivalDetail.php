<div>
    <p><?= $result['title'] ?></p>
    <p>By <?= $result['author'] ?></p><!-- Tac gia-->
    <p>Created at:<?= $result['created_at'] ?></p><!-- Ngay tao-->
    <h6 class="heading">Religion: <?= $result['religion_name'] ?></h6><!-- Ton giao-->
    <div><?= $result['article'] ?></div><!-- Noi dung-->
    <div>
        <?php if (isset($_SESSION['customerAccount'])) : ?>
            <button class="btn btn-warning my-3" ><a style="color: white;"href="downloadPDF.php?id=<?= $result['fes_id'] ?>">Download PDF</a></button>
        <?php else : ?>
            <button class="btn btn-warning my-3" ><a style="color: white;" href="?account=signin">Download PDF</a></button>
        <?php endif; ?>
    </div> s
</div>
 
<h6>Recommended Books</h6>
<div>
    <?php foreach ($book as $item) : ?>
        <div style="width: 50%;">
            <div class="one_quarter">
                <a href="?order=bookDetail&ID=<?= $item['book_id'] ?>">
                    <img src="images/books/<?= $item['img'] ?>" alt="">
                </a>
                <p><?= $item['name'] ?></p>
                <p><?= $item['price'] ?>$</p>
                <?php if (isset($_SESSION['customerAccount'])) : ?>
                    <div>
                        <button class="btn btn-warning my-3"><a href="?order=bookDetail&ID=<?= $item['book_id'] ?>">Add to cart </a><i class="fas fa-shopping-cart"></i></button>
                    </div>
                <?php else : ?>
                    <div>
                        <button class="btn btn-warning my-3"><a href="index.php?account=signin" style="color: white;">Add to cart </a><i class="fas fa-shopping-cart"></i></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>