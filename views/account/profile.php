<?php
//$query="select * from customer where id='".$_SESSION["userID"]."'";
$result=getProfileDetail();
$item=mysqli_fetch_array($result);
if(isset($_POST['update'])){
updateProfile();
echo "<script>location='?option=profile'</script>";
}
?> 
<div class="wrapper bgded" style="background-image:url('../images/demo/backgrounds/03.png');">
  <section id="callback" class="hoc clear"> 
    <div>
      <h6 class="heading">My profile</h6>
      <form method="post" action="">
        <fieldset>
         <input type="text" value="<?=$item['name']?>" name="name" placeholder="Name">
        <input type="tel" value="<?=$item['phone']?>" name="phone" placeholder="Phone Number">
        <input type="email" value="<?=$item['email']?>" name="email" placeholder="Email">
        <input type="text" value="<?=$item['address']?>" name="address" placeholder="Address">
        <button type="submit" value="update" name="update">Update profile</button>
        </fieldset>
      </form>
      <p><a href="?option=changePassword">Change password?</a></p>
    </div>
  </section>
</div>
