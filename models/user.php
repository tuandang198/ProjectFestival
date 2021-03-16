<?php
function checkAccount(){
    global $connect;
    $username=mysqli_real_escape_string($connect,$_POST['username']);
    $password=md5(mysqli_real_escape_string($connect,$_POST['password']));
    $query="select * from user where username='$username' and password='$password'";
    $result=$connect->query($query);
    return $result;
}
function checkUsername(){
    global $connect;
    $username=mysqli_real_escape_string($connect,$_POST['username']);
    $query="select* from user where username='$username'"; 
    $result=$connect->query($query);
    return $result;
}
function insertUserAccount(){
    global $connect;
    $username=mysqli_real_escape_string($connect,$_POST['username']);
    $password=md5(mysqli_real_escape_string($connect,$_POST['password']));
    $name=mysqli_real_escape_string($connect,$_POST['name']);
    $phone=mysqli_real_escape_string($connect,$_POST['phone']);
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $address=mysqli_real_escape_string($connect,$_POST['address']);
    $query="insert user(name,username,password,phone,email,address) values ('$name','$username','$password','$phone','$email','$address')";
    $connect->query($query);
}
function updateProfile(){
    global $connect;
    $name=mysqli_real_escape_string($connect,$_POST['name']);
    $phone=mysqli_real_escape_string($connect,$_POST['phone']);
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $address=mysqli_real_escape_string($connect,$_POST['address']);
    $query="update user set name='$name', phone='$phone', email='$email', address='$address' where username='".$_SESSION["customerAccount"]."'" ;
    $connect->query($query);
}
function getProfileDetail(){
    global $connect;
    $query="select * from user where username='".$_SESSION["customerAccount"]."'";
    $result=$connect->query($query);
    return $result;
}
function searchUser($emailPhone){
    global $connect;
    $query="SELECT * FROM `user` WHERE status=1";
    $pattern='/^[0-9]$/';
    $bool=preg_match($pattern,$emailPhone);
    if($bool){
        $query.=" and phone='$emailPhone'";
    }else{
        $query.=" and email='$emailPhone'";
    }
    $result=$connect->query($query);
    return $result;
}
function resetPass($newPass){
    global $connect;
    $query="update user set password='$newPass' where username='".$_SESSION["customerAccount"]."'";
    $result=$connect->query($query);
    return $result;
}