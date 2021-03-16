<?php
$forgotAccount = $_SESSION['forgotAccount'];
?>

<div class="wrapper bgded" style="background-image:url('../images/demo/backgrounds/03.png');">
    <section id="callback" class="hoc clear">
        <div>
            <h6 class="heading">We found an account associated with '<?= $forgotAccount ?>'</h6>
            <p class="btmspace-30">An email will be send to you with instructions on how to reset your password.</p>
            <form action="" method="post">
                <input type="submit" value="Receive new password by email." name="receivePass">
            </form>
        </div>
    </section>
</div>