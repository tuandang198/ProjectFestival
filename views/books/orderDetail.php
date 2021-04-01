<?php 
$result=getProfileDetail();
$item=mysqli_fetch_array($result);
$result_s=showOrdersbyID();
$created_at=getDatetimeNow();
$userID=$item['id'];

  if(isset($_POST['order'])):
    $order_address=mysqli_real_escape_string($connect, $_POST['address']);
    $order_phone=$_POST['phone'];
    $connect->query("INSERT INTO `order`(`user_id`, `created_at`,`order_address`,`order_phone`) VALUES ('$userID','$created_at','$order_address','$order_phone')");
    $order=mysqli_fetch_array($connect->query("select order_id from `order` order by order_id desc limit 1"));
    $orderID=$order['order_id'];
    foreach($result_s as $item_s):
      $quantity=$_SESSION['cart'][$item_s['book_id']]['quantity'];
      $book_id=$item_s['book_id'];
      $product=mysqli_fetch_array($connect->query("select price from books where book_id=$book_id"));
      $price=$product['price'];
      $query_s="INSERT INTO `order_detail`(`order_id`, `book_id`, `quantity`, `price`) VALUES ('$orderID','$book_id','$quantity','$price')";
      $connect->query($query_s);
    endforeach;
    unset($_SESSION['cart']);
    echo "<script>alert('Thank you for your order!')</script>";
    echo "<script>location='?option=home'</script>";
  endif;

?>
<div class="wrapper row3" style="background-image:url('images/demo/backgrounds/04.png');">
  <main class="hoc container clear">
  	<div class="content three_quarter first"> 
		

</div>
  <section id="callback" class="hoc clear" > 
    <div>
      
      <h1>Order Detail:</h1>
    <?php foreach($result_s as $item_s):?>
       <p> | <?=$item_s['name']?> x <?=$_SESSION['cart'][$item_s['book_id']]['quantity']?> |</p>
    <?php endforeach;?>
    <p> Total price: <?php echo $_SESSION['totalOrder'];?>$</p>
    <h6 class="heading">User Detail</h6>
      <form method="post" action="">
        <fieldset>
        <label for="">Name</label>
         <input type="text" value="<?=$item['name']?>" name="name" placeholder="Name">
         <label for="">Phone</label>
        <input type="tel" value="<?=$item['phone']?>" name="phone" placeholder="Phone Number">
        <label for="">Email</label>
        <input type="email" value="<?=$item['email']?>" name="email" placeholder="Email">
        <label for="">Address</label>
        <input type="text" value="<?=$item['address']?>" name="address" placeholder="Address">
        <button type="submit" name="order">Order Now</button>
        </fieldset>
      </form>
    </div>
  </section>
  </div>
</div>
</main>