<?php
include('./config/signupconstant.php');
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $phone = $_POST['phone'];
            $sql = "SELECT * FROM admin WHERE email ='$email' AND password='$password'";
      $res = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($res);
      if($count != 1)
      {
        $insertsql= "Insert INTO admin SET
        name='$name',
        email='$email',
        password='$password',
        phone='$phone',
        role=2
        ";

        $res = mysqli_query($conn, $insertsql) or die(mysqli_error($conn));

      }
      
      header('location:login1.php');
        }
        ?>