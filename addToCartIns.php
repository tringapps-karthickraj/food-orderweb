<?php
include('./config/constant.php');
if(isset($_POST['submit']))
                   {
                       
                     
                       $sqlty=$_POST['qty'];
                       $food_id=$_POST['food_id'];
                       $customer_id=$_SESSION['id'];     
                  
                       $sql2="INSERT INTO carts SET
                           food_id='$food_id',
                           quandity=$sqlty,
                           customer_id='$customer_id'
                       
                       ";
                   
                    //   echo $sql2; 
                    //    exit;
                       //die(); 
                       $res2=mysqli_query($conn, $sql2);  
                       if($res2==true)
                       {
                           echo $res2;
                          // $_SESSION['order']="<div class='success text-center'>Food Ordered Successfully.</div>";
                           header('location:food.php');
                       }
                       else
                       {
                          echo $res2;
                        //   $_SESSION['order']="<div class='error text-center'>Failed to Order Food.</div>";
                           header('location:food.php');
                       }
                  
                  
                   } else{
                      header('location:home.php');
                   }
                   ?>