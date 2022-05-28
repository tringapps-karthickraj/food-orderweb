<?php
include('./config/constant.php');
        //Process the value from form and Save in the Database
        //Check whether the submit button is clicked or not
        if(isset($_POST['submit']))
        {
            //Button Clicked
            //echo"Button Clicked";

            //1: Get the Date from here
           $name = $_POST['name'];
           $email = $_POST['email'];
           $password = md5($_POST['password']);//Password encryption with md5
           $phone = $_POST['phone'];
           //2: SQL Query to save the data into database
            $sql= "Insert INTO admin SET
                name='$name',
                email='$email',
                password='$password',
                phone='$phone',
                role=1
                ";

                //3. Executing Query and Saving Data into Databse
            $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                //4. Check whether the (Query us executed ) dsata is instered or not and display appropriate message
            
                header("location:manage-admin.php");
        }
        
        ?> 