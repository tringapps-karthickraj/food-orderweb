<?php
include('./config/constant.php');
if(isset($_POST['submit']))
                   {
                       
                       $total= $_POST['totalall'];
                       $status=0;
                       $customer_name=$_POST['name'];
                       $customer_contact=$_POST['contact'];
                       $customer_email=$_POST['email'];
                       $customer_address=$_POST['address'];
                       $customer_id=$_SESSION['id'];     
                  
                       $sql2="INSERT INTO myorders SET
                           total=$total,
                           status='$status',
                           customer_id='$customer_id',
                           customer_name='$customer_name',
                           customer_contact='$customer_contact',
                           customer_email='$customer_email',
                           customer_address='$customer_address'
                       
                       ";
                       $res1=mysqli_query($conn, $sql2);  
                       if($res1==true)
                       {
                        $last_id = $conn->insert_id;

                        $insert="INSERT INTO orders (food_id, quandity, order_id)
                        SELECT food_id, quandity, $last_id FROM carts WHERE customer_id = '$customer_id';
                        DELETE FROM carts WHERE customer_id='$customer_id'";
                        
                        $res2=mysqli_multi_query($conn, $insert);  
                        if($res2==true)
                       {
                        header('location:home.php');
                       }
                          // $_SESSION['order']="<div class='success text-center'>Food Ordered Successfully.</div>";
                          // header('location:food.php');
                       }
                       else
                       {
                          echo $res1;
                        //   $_SESSION['order']="<div class='error text-center'>Failed to Order Food.</div>";
                           header('location:food.php');
                       }
                  
                  
                   } else{
                      header('location:home.php');
                   }
                   ?>