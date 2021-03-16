<?php
include "../models/admin.php";
if(isset($_POST['admin'])){
    $admin=$_POST['admin'];
    $password=md5($_POST['password']);
    
    $result=checkAdminAccount($admin,$password);
    $item=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==0){
        $alert="Invalid password or username.";
    }else{
        $_SESSION['adminAccount']=$admin;
        echo "<script>location='?option=home'</script>";
    }
}
?>

  <section id="callback" class="hoc clear"> 
    <div>
      <h6 class="heading">Administrator Account</h6>
      <p class="btmspace-30"><?php if(isset($alert)){echo $alert;} ?></p>
      <form method="post" action="">
        <fieldset>
          <input type="text" value="" placeholder="admin" name="admin">
          <input type="password" value="" placeholder="Password" name="password">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </section>