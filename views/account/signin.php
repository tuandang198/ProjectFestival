<?php
//include "models/customer.php";
if(isset($_POST['username'])){
    $username=mysqli_real_escape_string($connect,$_POST['username']);
    $result=checkAccount();
    $item=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==0){
        $alert="Invalid username or password";
    }else{
        $_SESSION['customerAccount']=$username;
        echo "<script>location='?option=home'</script>";
    }
}
?>
<div class="wrapper bgded" style="background-image:url('../images/demo/backgrounds/03.png');">
  <section id="callback" class="hoc clear"> 
    <div>
      <h6 class="heading">Sign in</h6>
      <p class="btmspace-30"><?php if(isset($alert)){echo $alert;} ?></p>
      <form method="post" action="#">
        <fieldset>
          <input type="text" value="" placeholder="Username" name="username">
          <input type="password" value="" placeholder="Password" name="password">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div>
    <a href="?account=searchUser">Forgot your password?</a>
    </div>
  </section>
</div>

