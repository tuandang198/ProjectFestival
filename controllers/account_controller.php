<?php
include "models/user.php";

switch ($_GET['account']) {
    case 'signin':
        include "views/account/signin.php";
        break;
    case 'signup':
        include "views/account/signup.php";
        break;
    case 'signout':
        unset($_SESSION['customerAccount']);
        unset($_SESSION['cart']);
        echo "<script>location='?option=home'</script>";
        break;
    case 'profile':
        include "views/account/profile.php";
        break;
    case 'searchUser':
        include "views/account/searchUser.php";
        break;
    case 'sendEmail':
        include "views/account/sendEmail.php";
        break;
    case 'changePassword':
        include "views/account/changePassword.php";
        break;
}
