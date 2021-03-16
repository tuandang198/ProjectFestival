<?php
function checkAdminAccount($admin,$password){
    global $connect;
    $query="select * from admin where username='$admin' and password='$password'";
    $result=$connect->query($query);
    return $result;
}