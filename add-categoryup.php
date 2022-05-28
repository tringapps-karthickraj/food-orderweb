<?php 
include('./config/constant.php');
        if(isset($_POST['submit']))
        {
            //echo"button clicked";

            //1. Get all the details from the form 
            $id = $_POST['id'];
            $title = $_POST['title'];
            $featured= $_POST['featured'];
            $active = $_POST['active'];
            $adid=$_SESSION['id'];
            //2. Upload teh image if selected
            //check whether upload button is clicked or not
            //4, Update the food in dtabase
            $sql3 = "UPDATE category SET
            title='$title',
            featured='$featured',
            active='$active',
            updated_by = '$adid'
            WHERE id=$id
            ";

            //execute the sql query
            $res3=mysqli_query($conn, $sql3);
            //check whether the query is executed or not
            header('location:manage-category.php');
            //redirect to manage food with session image
        }
        
        
        ?>