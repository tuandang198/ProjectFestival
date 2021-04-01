<?php
function showBooks()
{
    global $connect;
    $query = "select * from books where status=1";
    if(isset($_GET['religionID'])){
        $query.=" and religion=".$_GET['religionID'];
    }elseif(isset($_POST['search'])){
        $query.=" and name='%" . $_POST['search_name'] . "%'";
      } 
    $result = $connect->query($query);
    return $result;
}
function showBookByID()
{
    global $connect;
    $id = $_GET['ID'];
    $query = "select * from books where book_id='$id'";
    $result = $connect->query($query);
    $result = mysqli_fetch_array($result);
    return $result;
}
function showTopBook($relid){
    global $connect;
    $query = "SELECT * FROM `books` WHERE `status`=1 and `religion`='$relid' ORDER BY RAND ( ) LIMIT 5
    ";
    $result = $connect->query($query);
    return $result;
}
function showOrdersbyID()
{
    global $connect;

    $query = "select * from books where book_id in (";
    foreach ($_SESSION['cart'] as $id => $value) {
        $query .= $id . ",";
    }
    $query = substr($query, 0, -1) . ") order by name asc";
    $result = $connect->query($query);

    return $result;
}
function getDatetimeNow()
{
    $tz_object = new DateTimeZone('Asia/Ho_Chi_Minh');
    //date_default_timezone_set('Brazil/East');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}
function showAllBook()
{
    global $connect;
    $query = "select * from books";
    $result = $connect->query($query);
    return $result;
}

function checkBook()
{
    global $connect;
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $query = "select * from books where name='$name'";
    $result = $connect->query($query);
    return mysqli_num_rows($result);
}
function checkBookID()
{
    global $connect;
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $id=$_GET['ID'];
    $query = "select * from books where name='$name' and book_id!='$id'";
    $result = $connect->query($query);
    return mysqli_num_rows($result);
}
function addBook()
{
    global $connect;
    $name =mysqli_real_escape_string($connect,$_POST['name']) ;
    $religionid = $_POST['religionID'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $created = getDatetimeNow();
    $author = $_POST['author'];
    $status = $_POST['status'];
    $fileName = $_FILES['image']['name'];
    $fileTemp = $_FILES['image']['tmp_name'];
    $folder = "../images/books/";
    $imageName = time() . '_' . $fileName;
    $ext = substr($imageName, strlen($imageName) - 3, 3);
    $ext1 = substr($imageName, strlen($imageName) - 4, 4);
    if ($ext == "JPG" || $ext == "jpg" || $ext1 == "JPEG" || $ext1 == "jpeg" || $ext == "GIF" || $ext == "gif" || $ext == "BMP" || $ext == "bmp" || $ext == "PNG" || $ext == "png") {
        move_uploaded_file($fileTemp, $folder . $imageName);
        $query = "insert books(name,author,img,religion,price,status,description,created) values('$name','$author','$imageName','$religionid','$price','$status','$description','$created')";
        $connect->query($query);
        return 1;
    } else {
        return 0;
    }
}
function updateBook()
{
    global $connect;
    $name =mysqli_real_escape_string($connect,$_POST['name']) ;
    $religionid = $_POST['religionID'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    if(isset($_FILES['image'])){
        $image = $_FILES['image'];
    }
    $created = getDatetimeNow();
    $author = $_POST['author'];
    $status = $_POST['status'];
    $fileName = $_FILES['image']['name'];
    if (isset($_POST['delImage'])) {
        $imageName = NULL;
        $folder = "../images/books/";
        //unlink($folder . $image);//linux permission
        $query = "update books set name='$name', status='$status', author='$author', religion='$religionid',price='$price',description='$description', img='$imageName' where book_id=" . $_GET['ID'];
    }elseif(!isset($_FILES['image']) || $fileName==''){
        $query = "update books set name='$name', status='$status', author='$author', religion='$religionid',price='$price',description='$description' where book_id=" . $_GET['ID'];
    } else {
        $fileTemp = $_FILES['image']['tmp_name'];
        $folder = "../images/books/";
        $imageName = time() . '_' . $fileName;
        $ext = substr($imageName, strlen($imageName) - 3, 3);
        $ext1 = substr($imageName, strlen($imageName) - 4, 4);
        if ($ext == "JPG" || $ext == "jpg" || $ext1 == "JPEG" || $ext1 == "jpeg" || $ext == "GIF" || $ext == "gif" || $ext == "BMP" || $ext == "bmp" || $ext == "PNG" || $ext == "png") {
            move_uploaded_file($fileTemp, $folder . $imageName);
            //unlink($folder . $image);//linux permission
            $query = "update books set name='$name', status='$status', author='$author', religion='$religionid',price='$price',description='$description', img='$imageName' where book_id=" . $_GET['ID'];
        } else {
            return 0;
        }
    }
    
    $connect->query($query);
    return 1;
}
function deleteBook()
{
    global $connect;
    $query = "delete from books where book_id=" . $_GET['ID'];
    $connect->query($query);
}
function showAllOrder()
{
    global $connect;
    $query="SELECT * FROM `user` a JOIN `order` b ON a.id=b.user_id";
    $result = $connect->query($query);
    return $result;
}
function deleteOrderDetail(){
    global $connect;
    $query = "DELETE FROM `order_detail` WHERE order_id=".$_GET['ID'] ;
    $connect->query($query);
}
function deleteOrder(){
    global $connect;
    $query = "DELETE FROM `order` WHERE order_id=".$_GET['ID'] ;
    $connect->query($query);
}
function showOrderDetail(){
    global $connect;
    $query="SELECT * FROM `books` a JOIN `order_detail` b ON a.book_id=b.book_id where b.order_id=".$_GET['ID'];
    $result = $connect->query($query);
    return $result;

}
