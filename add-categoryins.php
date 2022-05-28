<?php 
include('./config/constant.php');
        //Check whether the submit button is clicked or not
        if(isset($_POST['submit']))
        {
            //echo"Clicked";

            //1. Get the value from Category form
            $title=$_POST['title'];
            $featured = $_POST['featured'];
            $active = $_POST['active'];
            $id=$_SESSION['id'];


            //2.Create sql query to insert a category into teh databse
            $sql = "INSERT INTO category SET
             title='$title',
             featured='$featured',
             active='$active',
             created_by='$id'
             ";
             //3.execute the query abd save in database
             $res = mysqli_query($conn, $sql);
             //4. Check whether the query executed or not and data is added or  not
             if($res==true)
             {
                    header('location:manage-category.php');
             }
             else
             {
                    header('location:add-category.php');

             }


    }
        ?>