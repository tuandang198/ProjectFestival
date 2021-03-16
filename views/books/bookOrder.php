<h1>Cart</h1>
<?php if(isset($_SESSION['cart'])): ?>
  <?php $result=showOrdersbyID();
        ?>
    <?php foreach($result as $item):?>
        <p><?=$item['name']?> x <?=$_SESSION['cart'][$item['book_id']]['quantity']?></p>
    <?php endforeach;?>
        <?php else:?>
        <p>Your cart is empty. Please add some products.</p>

    <?php endif;?>
