<?php
include('./config/constant.php');
if(isset($_GET['cart_id'])){
    $id=$_GET['cart_id'];
    $sql = "DELETE FROM carts WHERE id='$id'";
    $res=mysqli_query($conn, $sql);
    if($res==true){
        header('location:myCarts.php');
    }else{
        echo "<div>err on delete    </div>";
    }
    
}else{
    header('location:home.php');
}


?>