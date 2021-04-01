<?php 
function showAboutUs(){
    global $connect;
    $query = "SELECT * FROM `company_form`";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;

}

function showAddress(){
    global $connect;
    $query = "SELECT * FROM `company_form`";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;

}

function showEmail(){
    global $connect;
    $query = "SELECT * FROM `company_form`";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;

}

function showGooglemap(){
    global $connect;
    $query = "SELECT * FROM `company_form`";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;

}

function showPhonenumber(){
    global $connect;
    $query = "SELECT * FROM `company_form`";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;

}

function showWorkinghour(){
    global $connect;
    $query = "SELECT * FROM `company_form`";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;

}

function showGallery(){
    global $connect;
    $query = "SELECT * FROM `festival`";
    $result=$connect->query($query);
    return $result;
}

function showBookGallery(){
    global $connect;
    $query = "SELECT * FROM `books`";
    $result=$connect->query($query);
    return $result;
}
function insertFeedback(){
    global $connect;
    $name=mysqli_real_escape_string($connect,$_POST['name']);
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $comment=mysqli_real_escape_string($connect,$_POST['comment']);
    $created_at=getDatetimeNow();
    $query = "INSERT INTO `feedback`(`name`, `email`, `comment`, `created_at`) VALUES ('$name','$email','$comment','$created_at')";
    $connect->query($query);
}
function updateinfo(){
    global $connect;
    $aboutus=mysqli_real_escape_string($connect,$_POST['aboutus']);
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $address=mysqli_real_escape_string($connect,$_POST['address']);
    $phone=mysqli_real_escape_string($connect,$_POST['phone']);
    $workhour=mysqli_real_escape_string($connect,$_POST['workhour']);
    $latitude=mysqli_real_escape_string($connect,$_POST['latitude']);
    $longtitude=mysqli_real_escape_string($connect,$_POST['longtitude']);
    $api=mysqli_real_escape_string($connect,$_POST['api']);

    $query ="UPDATE `company_form` SET `aboutus`='$aboutus',`address`='$address',`email`='$email',`phonenumber`='$phone' ,`workinghour`='$workhour',`googlemapsAPI`='$api',`latitude`='$latitude',`longtitude`='$longtitude' WHERE `id`=1"; 
    $connect->query($query);
}
function showFeedback(){
    global $connect;
    $query = "SELECT * FROM `feedback`";
    $result=$connect->query($query);
    return $result;
}
function deleteFeedback(){
    global $connect;
    $query="delete from feedback where id=".$_GET['id'];
    $connect->query($query);
}
?>