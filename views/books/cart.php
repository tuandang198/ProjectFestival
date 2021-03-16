<?php 
  
    if(isset($_POST['submit'])){ 
        
        foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['cart'][$key]); 
                echo "<script>alert='Your cart is empty'</script>";
            }else{ 
                $_SESSION['cart'][$key]['quantity']=$val;
                
            } 
        } 
          
    }
?> 
<h1>View cart</h1>
<a href="?order=books">Go back to books page</a>
<form action="" method="post">
<div class="scrollable" style="color: black;">
<table>
<thead>
<tr> 
            <th>Name</th> 
            <th>Quantity</th> 
            <th>Price</th> 
            <th>Items Price</th> 
        </tr> 
          </thead>
        <?php 
                    
                     
                    $totalprice=0;
                    if(!isset($_SESSION['cart'])):
                        echo "<p style='color: white'>Cart is empty</p>";
                    else:
                        
                        $query = showOrdersbyID();
                        if(is_array($query) || is_object($query)){
                        foreach($query as $row): 
                        $subtotal=$_SESSION['cart'][$row['book_id']]['quantity']*$row['price']; 
                        $totalprice+=$subtotal; 
                        ?> 
                        <tr > 
                            <td><p><?php echo $row['name'] ?></p></td> 
                            <td><input type="number" name="quantity[<?php echo $row['book_id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['book_id']]['quantity'] ?>" /></td> 
                            <td><?php echo $row['price'] ?>$</td> 
                            <td><?php echo $_SESSION['cart'][$row['book_id']]['quantity']*$row['price'] ?>$</td> 
                        </tr> 
                    <?php endforeach;?> 
                    <?php }?>
                    <?php endif?>
                    <tr > 
                        <td colspan="4">Total Price: <?php $_SESSION['totalOrder']=$totalprice; echo $totalprice ?>$</td> 
                    </tr> 
          
    </table> 
    <br /> 
    <button type="submit" name="submit">Update Cart</button> 
    <button onclick=""><a href="?order=orderDetail">Order</a></button>
    </div>
</form> 
<br /> 
<p>To remove an item, set it's quantity to 0. </p>