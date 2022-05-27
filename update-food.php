<?php 
include('./config/constant.php');
        //Check whether the id is set or not
        if(isset($_GET['id']))
        {
            //Get all the details
            $id = $_GET['id'];
            //Sql query to get the selected food
            $sql2 ="SELECT * FROM food WHERE id=$id";
            //execute the query
            $res2=mysqli_query($conn,$sql2);
            //Get teh value based on query executed
            $row2= mysqli_fetch_assoc($res2);
            //Get the individual values of selected food
            $title=$row2['title'];
            $description=$row2['description'];
            $price=$row2['price'];
            $current_image=$row2['image_name'];
            $current_category=$row2['category_id'];
            $featured=$row2['featured'];
            $active=$row2['active'];
        }
        else
        {
            header('location:food.php');
        }

    ?>