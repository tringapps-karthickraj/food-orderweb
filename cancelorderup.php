<?php
include('./config/constant.php');
if(isset($_POST['submit'])){
$reason=$_POST['reason'];
$id=$_POST['id'];
$sql="UPDATE myorders set status=3,cancel_reason='$reason' where id = '$id'";
$res=mysqli_query($conn,$sql);
header('location:myOrders.php');
}

?>