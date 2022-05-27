<?php
include('./config/signupconstant.php');
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
      $res = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($res);
      if($count==1)
      {
          $row=mysqli_fetch_assoc($res);
        $_SESSION['user'] = $email;
        $_SESSION['role'] = $row['role'];
        $_SESSION['id'] = $row['id'];
      
          header('location:home.php');
          //$_SESSION['login'] = "<div class='success'>Login Successful.</div>";
           // To check teh user is logged in or not and logout will unset it
          
      }
      else
      {
       // $_SESSION['login'] = "<div class='error text-centre'>Username and Password did not match.</div>";
          header('location:login1.php');
      }
        }
        ?>