
    <?php
include"connect.php";
$id=$_GET['id'];
$sql="DELETE from orders where id=$id";
$result=mysqli_query($connect,$sql);
$check=$_GET['from'];
// echo $_GET['from'];
// exit();
if($check=='cart'){
  header("Location: Cart.php");
  
}
else if($check=='mycourses'){
header("Location: Mycourses.php");

}

else{
    header("Location: courses.php");
}
;
?>

