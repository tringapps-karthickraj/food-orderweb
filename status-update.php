<?php
include('./config/constant.php');
//check whether the upate button is clicked or not 
if(isset($_POST['submit']))
{
    //echo "Clicked";
    //Get all values from form 
    $id=$_POST['id'];
    
    $status=$_POST['status'];
     //Update the values
     $sql2="UPDATE myorders SET
        status='$status'
        WHERE id='$id'
     ";
    //Execute the query
     $res2=mysqli_query($conn, $sql2);
     //Check whether the update or not 

     //And REdirect to Manage Orderwith Message
     if($res2==true)
     {
         //updated
         header('location:manage-order.php');
     }
     else
     {
         //failed to update 
         header('location:manage-order.php');

     }
     exit;
     
}
?>