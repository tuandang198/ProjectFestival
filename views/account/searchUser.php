<?php
//include "models/customer.php";
if (isset($_POST['emailPhone'])) {
    $emailPhone = $_POST['emailPhone'];
    $result = searchUser($emailPhone);
    if (mysqli_num_rows($result) == 0) {
        $alert = "Your email or phone number that you entered is invalid.";
    } else {
        $_SESSION['forgotAccount'] = $emailPhone;
        echo "<script>location='?option=sendEmail'</script>";
    }
}
?>
<div class="wrapper bgded" style="background-image:url('../images/demo/backgrounds/03.png');">
    <section id="callback" class="hoc clear">
        <div>
            <h6 class="heading">I forgot my account</h6>
            <p class="btmspace-30"><?php if (isset($alert)) {
                                        echo $alert;
                                    } ?></p>
            <form action="" method="post">
                <fieldset>
                    <label for="">Please enter your email address or phone number</label>
                    <input type="text" name="emailPhone" id="">
                    <input type="submit" value="Search">
                </fieldset>
            </form>
        </div>
    </section>
</div>