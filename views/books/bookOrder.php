<h1>Cart</h1>
<?php
    $alert_cart="Your cart is empty. Please add some products.";
     if(isset($_SESSION['cart'])){
    $query = "select * from books where book_id in (";
    foreach ($_SESSION['cart'] as $id => $value) {
        $query .= $id . ",";
    }
    $query = substr($query, 0, -1) . ") order by name asc";
    $result = $connect->query($query);
    
   if(is_array($result) || is_object($result)){
       foreach($result as $item){
           echo " <p>" . $item['name'] . "x" . $_SESSION['cart'][$item['book_id']]['quantity'] . "</p>";
       }
   }else{
   echo $alert_cart;
}
}else{
echo $alert_cart;
}
?>