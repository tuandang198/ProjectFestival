<?php
if (isset($_POST['updatePass'])) {
    $oldPass = md5($_POST['oldPass']);
    $newPass = md5($_POST['newPass']);
    $rePass = md5($_POST['rePass']);
    $result = getProfileDetail();
    $item = mysqli_fetch_array($result);
    $error = 0;
    if ($oldPass != $item['password'] || $newPass != $rePass || $oldPass == $newPass) {
        $error = 1;
    }

    if ($error == 0) {
        resetPass($newPass);
        $succeed = "Update password successfully";
    } elseif ($error == 1) {
        $warning = "Not success, Try again.";
    }
}
?>
<div class="wrapper bgded" style="background-image:url('../images/demo/backgrounds/03.png');">
    <section id="callback" class="hoc clear">
        <div>
            <h6 class="heading">Change password</h6>
            <p class="btmspace-30"><?php if (isset($succeed)) {
                                        echo $succeed;
                                    } elseif (isset($warning)) {
                                        echo $warning;
                                    } ?></p>
            <form action="" method="post">
                <div>
                    <fieldset>
                        <div>
                            <label for="">Enter old Password</label>
                            <input type="password" name="oldPass" id="" required>
                        </div>
                        <div>
                            <label for="">Enter New Password</label>
                            <input type="password" name="newPass" id="" required>
                        </div>
                        <div>
                            <label for="">Reconfirm New Password</label>
                            <input type="password" name="rePass" id="" required>
                        </div>
                        <div>
                            <input type="submit" value="Update Password" name="updatePass">
                        </div>
                    </fieldset>
                </div>

            </form>
        </div>
    </section>
</div>