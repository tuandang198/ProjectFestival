<?php
include "models/user.php";
include "models/books.php";
include "models/festival.php";
include "models/companyInfo.php";
if(isset($_GET['option'])){
    switch($_GET['option']){
        case 'home':
            $result=showRandFestival();
            include "layout/home.php"; 
            break;
        case 'aboutus':
            $result=showAboutUs();
            include "views/aboutus/aboutus.php";
            break;
        case 'galleryfestival':
            $result=showGallery();
            include "views/gallery/galleryfestival.php";
            break;
        case 'gallerybook':
            $result=showBookGallery();
            include "views/gallery/gallerybook.php";
            break;
        case 'feedback':
            include "views/aboutus/feedback.php";
            break;
        //////////////////////////////////////////account
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
        //////////////////////////////////////festival
        case 'showFes':
            $result=showFestival();
            include "views/festival/allFestival.php";
            break;
        case 'festivalDetail': 
            $result=showFestivalByID();
            $relid=$result['religion_id'];
            $book=showTopBook($relid);
            include "views/festival/festivalDetail.php";
            break;
        //////////////////////////////////////////////book&order
        case 'books':
            $result=showBooks();
            include "views/books/books.php";
            break;
        case 'bookDetail': 
            $result=showBookByID();
            $relid=$result['religion'];
            include "views/books/bookDetail.php";
            break;
        case 'bookOrder': 
            include "views/books/bookOrder.php";
            break;
        case 'cart': 
            include "views/books/cart.php";
            break;
        case 'orderDetail': 
            include "views/books/orderDetail.php";
            break;
    }
}else{
    $result=showRandFestival();
     include "layout/home.php";
    }
