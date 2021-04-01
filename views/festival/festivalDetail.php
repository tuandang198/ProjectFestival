<div class="wrapper row3" style="background-color: #dcccb0;">
<main class="hoc container clear">
<div class="content three_quarter first">
    <h6 class="heading" style="font-weight: bold;"><?= $result['title'] ?></h6>
    <p>Religion: <?= $result['religion_name'] ?></p><!-- Ton giao-->
    <div style="font-weight: bold;"><?=$result['description']?></div> 
    <div><?= $result['article'] ?></div><!-- Noi dung-->
    <p>By <?= $result['author'] ?> Created at:<?= $result['created_at'] ?></p><!-- Tac gia-->
    <div>
        <?php if (isset($_SESSION['customerAccount'])) : ?>
            <button class="btn btn-warning my-3" ><a style="color: black;"href="downloadPDF.php?id=<?= $result['fes_id'] ?>">Download PDF</a></button>
        <?php else : ?>
            <button class="btn btn-warning my-3" ><a style="color: black;" href="?option=signin">Download PDF</a></button>
        <?php endif; ?>
    </div>
</div>
 
<div class="sidebar one_quarter"> 
<h6>Recommended Books</h6>
<div>
    <?php foreach ($book as $item) : ?>
        <div class="one_quarter" style="width: 50%;">
            <a href="?option=bookDetail&ID=<?= $item['book_id'] ?>">
                <img class="imgr borderedbox inspace-5" src="images/books/<?= $item['img'] ?>" alt="">
            </a>
            <p><?= $item['name'] ?></p>
            <p><?= $item['price'] ?>$</p>
            </div>
    <?php endforeach; ?>
</nav>
</div>
</div>

</main>
</div>