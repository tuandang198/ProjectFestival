<?php
//include "models/customer.php";
if(isset($_POST['username'])){
    $result=checkUsername();
    if(mysqli_num_rows($result)>0){
        $alert="Your username has already been used.";
        echo "<script>location: .</script>";
    }else{
        insertUserAccount();
        echo "<script>location='?option=signin'</script>";
    }
}
?>
<script>
    function check_pass() {
    if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
        alert("Mật khẩu không trùng khớp");
    }
    
}



</script>
<div class="wrapper bgded" style="background-image:url('../images/demo/backgrounds/03.png');">
  <section id="callback" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div>
      <h6 class="heading">Sign up</h6>
      <p class="btmspace-30"><?php if(isset($alert)){echo $alert;} ?></p>
      <form method="post" action="#">
        <fieldset>
        <input type="text" value="" placeholder="Name" name="name" required pattern="[a-zA-Z]+\s+[a-zA-Z]+\s+[a-zA-Z]+" title="Vui lòng điền đầy đủ thông tin">
        <input type="text" value="" placeholder="Username" name="username" required title="Vui lòng điền đầy đủ thông tin">
        <input type="password" value="" placeholder="password" id="password"  name="password"  required pattern="[a-zA-Z0-9]{6,20}" title="Vui lòng điền đầy đủ thông tin">

        <input type="password" placeholder="Confirm Password" required name="confirm_password" id="confirm_password" onchange="check_pass();"></>
        <input type="tel" value="" placeholder="Phone Number" name="phone" required pattern="^0+[0-9]{9,10}" title="Vui lòng điền đầy đủ thông tin">
        <input type="email" value="" placeholder="Email" name="email" required pattern="[a-z]\w+@[a-z]\w+((\.[a-z]{3,3}\.[a-z]{2,2})|(\.[a-z]{2,3}))" title="Vui lòng điền đầy đủ thông tin">
        <input type="text" value="" placeholder="Address" name="address" required title="Vui lòng điền đầy đủ thông tin">
        <button type="submit" value="submit" name="submit" id="submit">Sign up</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>