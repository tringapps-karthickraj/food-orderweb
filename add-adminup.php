<?php
include('./config/constant.php');
    //Check Whether teh submit button is clicked or not
    if(isset($_POST['submit']))
    {
       //echo "Button Clicked";
       //Get all the values from the form to update
       $id = $_POST['id'];

       if(!isset($_POST['password'])){

       
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];

       //Create a Sql Query to update the admin
       $sql = "UPDATE admin Set
       name ='$name',
       email = '$email',
       phone = '$phone'
       WHERE id='$id'
       ";

       //Execute the query
       $res = mysqli_query($conn, $sql);
       
       //Check whether the query executed successfully or not
     if($res==true)
       {
           //Query Executed and Admin Updated
          
           //Redirect to Manage Admin Page
           header('location:manage-admin.php');
       }
       else{
           //FAiled to update  admin
          
           //Redirect to Manage Admin Page
           header('location:manage-admin.php');
       }
    }else{
        $oldpassword=md5($_POST['oldpassword']);
        $password=md5($_POST['password']);

        $sql1="SELECT * FROM admin WHERE id='$id' && password='$oldpassword'";
        $res1 = mysqli_query($conn, $sql1);
        if(mysqli_num_rows($res1)>0){
            $sql2="UPDATE admin Set
           password = '$password'
            WHERE id='$id'";
            $res2= mysqli_query($conn, $sql2);
            if($res2 == true){
                header('location:manage-admin.php');
            }else{
                header('location:foods.php');
            }
        }else{
            header('location:home.php');
        }

    }
    }
?>