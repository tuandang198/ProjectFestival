<?php 
include "models/books.php";
include "models/user.php";
switch($_GET['order']){
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