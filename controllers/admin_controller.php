<?php
include "../models/books.php";
include "../models/festival.php";
include "../models/companyInfo.php";
if (isset($_GET['request'])) {
    switch ($_GET['request']) {
        case 'signout':
            unset($_SESSION['adminAccount']);
            echo "<script>location='?option=home'</script>";
            break;
        case 'religion':
            $religions = showAllReligion();
            include "../views/admin/religion/religion.php";
            break;
        case 'addreligion':

            if (isset($_POST['add'])) {
                $result = checkReligion();
                if ($result != 0) {
                    $alert = "Brand has already existed.";
                } else {
                    addReligion();
                    echo "<script>location='?request=religion'</script>";
                }
            }
            include "../views/admin/religion/add.php";
            break;
        case 'editReligion':
            if (isset($_POST['update'])) {
                $result = checkReligionID();
                if ($result != 0) {
                    $alert = "Duplicated religion";
                } else {
                    updateRel();
                    echo "<script>location='?request=religion'</script>";
                }
            }
            $religion = showReligionByID();
            include "../views/admin/religion/edit.php";
            break;
        case 'deleteReligion':
            deleteRel();
            echo "<script>location='?request=religion'</script>";
            break;
            /////////////////////////////////////////////Festival//////////////////////////////////////////////////////////////


        case 'festival':
            $festival = showAllFes();
            include "../views/admin/festival/festival.php";
            break;
        case 'addFestival':
            $religion = showAllReligion();
            if (isset($_POST['add'])) {
                $result = checkFesTitle();
                if ($result != 0) {
                    $alert = "This title has already existed.";
                } else {
                    addFestival();
                    echo "<script>location='?request=festival'</script>";
                }
            }
            include "../views/admin/festival/add.php";
            break;
        case 'editFestival':
            if (isset($_POST['update'])) {
                $result = checkFesTitleID();
                if ($result != 0) {
                    $alert = "Duplicated Festival Title.";
                } else {
                    updateFes();
                    echo "<script>location='?request=festival'</script>";
                }
            }
            $religion = showAllReligion();
            $festival = showFestivalDetails();
            include "../views/admin/festival/edit.php";
            break;
        case 'deleteFestival':
            deleteFes();
            echo "<script>location='?request=festival'</script>";
            break;
            break;

            //////////////////////////////////////////////////Book/////////////////////////////////////////////////////////

        case 'book':
            $book = showAllBook();
            include "../views/admin/book/book.php";
            break;
        case 'addBook':
            $religion = showAllReligion();
            if (isset($_POST['add'])) {
                $result = checkBook();
                if ($result != 0) {
                    $alert = "Book has already existed.";
                } else {
                    if (addBook() == 1) {
                        // echo "<script>location='?request=book'</script>";
                    } else {
                        $alert = "Unidentified image.";
                    }
                }
            }
            include "../views/admin/book/add.php";
            break;
        case 'editBook':
            if (isset($_POST['name'])) {
                $result = checkBookID();
                if ($result != 0) {
                    $alert = "Duplicated book";
                } else {
                    if (updateBook() == 1) {
                        // echo "<script>location='?request=book'</script>";
                    } else {
                        $alert = "Unidentified image.";
                    }
                }
            }
            $religion = showAllReligion();
            $relByid = showRelByBookID();
            $book = showBookByID();
            include "../views/admin/book/edit.php";
            break;
        case 'deleteBook':
            deleteBook();
            echo "<script>location='?request=book'</script>";
            break;
            /////////////////////////////////////////////////Order//////////////////////////////////////////////////////////

        case 'order':
            $order = showAllOrder();
            include "../views/admin/order/order.php";
            break;
        case 'orderDetail':
            $orderDetail = showOrderDetail();
            include "../views/admin/order/orderDetail.php";
            break;
        case 'deleteOrder':
            deleteOrderDetail();
            deleteOrder();
            echo "<script>location='?request=order'</script>";
            break;
        
            /////////////////////////////////////////////////////////////////////////
        case 'companyInfo': 
            $result=showAboutUs();
            if(isset($_POST['update'])){
                updateinfo();
                echo "<script>location='?request=companyInfo'</script>";
            }
            include "../views/admin/companyInfo/companyInfo.php";
            break;
        case 'feedback': 
            $feedback=showFeedback();
            include "../views/admin/user/feedback.php";
            break;
            case 'deleteFeedback':
                deleteFeedback();
                echo "<script>location='?request=feedback'</script>";
                break;
    }
}
