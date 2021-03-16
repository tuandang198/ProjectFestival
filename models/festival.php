<?php
function showFestival(){
    global $connect;
    $query = "select * from festival where status=1";
    if(isset($_GET['religionID'])){
        $query.=" and religion_id=".$_GET['religionID'];
    }
    $result=$connect->query($query);
    return $result;
}
function showRandFestival(){
    global $connect;
    $query = "SELECT * FROM `festival` WHERE `status`=1 ORDER BY RAND ( ) LIMIT 2";
    $result = $connect->query($query);
    return $result;
}
function showFestivalByID(){
    global $connect;
    $id=$_GET['id'];
    $query = "SELECT * FROM `festival` a JOIN `religion` b ON a.religion_id=b.id where fes_id=$id";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;
}
function showFestivalDetails(){
    global $connect;
    
    $id=$_GET['id'];
    $query = "SELECT * FROM `festival` where fes_id=$id";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;
}
function showAllFes(){
    global $connect;
    $query="select * from festival";
    $result=$connect->query($query);
    return $result;
}
function checkFesTitle(){
    global $connect;
    $title=mysqli_real_escape_string($connect,$_POST['title']);
    $query="select * from festival where title='$title'";
    $result=$connect->query($query);
    $result=mysqli_num_rows($result);
    return $result;
}
function addFestival(){
    global $connect;
    $title=mysqli_real_escape_string($connect,$_POST['title']);
    $religionID=$_POST['religionID'];
    $article=mysqli_real_escape_string($connect,$_POST['article']);
    $description=mysqli_real_escape_string($connect,$_POST['description']);
    $author=mysqli_real_escape_string($connect,$_POST['author']);
    $created_at=getDatetimeNow();
    $status=$_POST['status'];
    $title_image=mysqli_real_escape_string($connect,$_POST['imageTitle']);
    $query="INSERT INTO `festival`(`title`, `religion_id`, `article`, `description`, `author`, `created_at`, `status`,`title_image`) VALUES ('$title','$religionID' ,'$article' ,'$description' ,'$author','$created_at','$status','$title_image')";
    $connect->query($query);
}
function deleteFes(){
    global $connect;
    $query="delete from festival where fes_id=".$_GET['id'];
    $connect->query($query);
}
function checkFesTitleID(){
    global $connect;
    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $id=$_GET['id'];
    $query = "select * from festival where title='$title' and fes_id!='$id'";
    $result = $connect->query($query);
    return mysqli_num_rows($result);
}
function updateFes(){
    global $connect;
    $title=mysqli_real_escape_string($connect,$_POST['title']);
    $religionID=$_POST['religionID'];
    $article=mysqli_real_escape_string($connect,$_POST['article']);
    $description=mysqli_real_escape_string($connect,$_POST['description']);
    $author=mysqli_real_escape_string($connect,$_POST['author']);
    $created_at=getDatetimeNow();
    $status=$_POST['status'];
    $title_image=mysqli_real_escape_string($connect,$_POST['imageTitle']);
    $query = "update festival set title='$title', status='$status', author='$author', religion_id='$religionID',description='$description', title_image='$title_image',article='$article',created_at='$created_at' where fes_id=" . $_GET['id'];
    $connect->query($query);
    return $query;
}



//////////////////////////////////////////


function showAllReligion(){
    global $connect;
    $query="select * from religion";
    $result=$connect->query($query);
    return $result;
}
function checkReligion(){
    global $connect;
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $query="select * from religion where religion_name='$name'";
    $result=$connect->query($query);
    return mysqli_num_rows($result);
}
function addReligion(){
    global $connect;
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $status=$_POST['status'];
    $query="insert religion(religion_name,status) values('$name','$status')";
    $connect->query($query);
}
function showReligionByID(){
    global $connect;
    $id=$_GET['id'];
    $query="select * from religion where id='$id'";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;

}
function updateRel(){
    global $connect;
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $status=$_POST['status'];
    $query="update religion set religion_name='$name', status='$status'  where id=".$_GET['id'];
    $connect->query($query);
    
}
function showRelByBookID(){
    global $connect;
    $id=$_GET['ID'];
    $query="SELECT * FROM `books` a JOIN `religion` b ON a.religion=b.id where book_id=$id";
    $result=$connect->query($query);
    $result=mysqli_fetch_array($result);
    return $result;
}
function getFesbyRelID($id){
    global $connect;
    $query="select * from festival where religion_id='$id'";
    $result=$connect->query($query);
    return mysqli_num_rows($result);
}  
function deleteRel(){
    global $connect;
    $query="delete from religion where id=".$_GET['id'];
    $connect->query($query);
} 
function checkReligionID(){
    global $connect;
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $id=$_GET['id'];
    $query = "select * from religion where religion_name='$name' and id!='$id'";
    $result = $connect->query($query);
    return mysqli_num_rows($result);
}


