<?php
include('./config/constant.php');
    if(isset($_POST['submit']))
    {
        
      
        $sqlty=$_POST['qty'];
        $cart_id=$_POST['cart_id']; 
   
        $sql2="UPDATE  carts SET
            quandity=$sqlty WHERE id= '$cart_id'";
    
        $res2=mysqli_query($conn, $sql2);  
        if($res2==true)
        {
            echo $res2;
           // $_SESSION['order']="<div class='success text-center'>Food Ordered Successfully.</div>";
            header('location:myCarts.php');
        }
        else
        {
           echo $res2;
         //   $_SESSION['order']="<div class='error text-center'>Failed to Order Food.</div>";
            header('location:myCarts.php');
        }
   
   
    } else{
       header('location:home.php');
    }              
?>