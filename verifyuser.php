<?php
include('./config/signupconstant.php');
$email=$_POST['email'];
$password = md5($_POST['password']);
$select="SELECT * FROM admin WHERE email='$email' AND password='$password'";
$selectresult = mysqli_query($conn,$select);

if(mysqli_num_rows($selectresult) > 0){
    echo 'ok';exit;
}else{
    echo 'not ok';exit;
}
?>