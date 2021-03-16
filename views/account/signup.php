<?php
//include "models/customer.php";
if(isset($_POST['username'])){
    $result=checkUsername();
    if(mysqli_num_rows($result)>0){
        $alert="Your username has already been used.";
        echo "<script>location: .</script>";
    }else{
        insertUserAccount();
        echo "<script>location='?account=signin'</script>";
    }
}
?>
<div class="wrapper bgded" style="background-image:url('../images/demo/backgrounds/03.png');">
  <section id="callback" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div>
      <h6 class="heading">Sign up</h6>
      <p class="btmspace-30"><?php if(isset($alert)){echo $alert;} ?></p>
      <form method="post" action="#">
        <fieldset>
        <input type="text" value="" placeholder="Name" name="name" required>
        <input type="text" value="" placeholder="Username" name="username" required>
        <input type="password" value="" placeholder="Password" name="password" required>
        <input type="tel" value="" placeholder="Phone Number" name="phone" required>
        
        <input type="email" value="" placeholder="Email" name="email">
        <input type="text" value="" placeholder="Address" name="address">
        <button type="submit" value="submit">Sign up</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>