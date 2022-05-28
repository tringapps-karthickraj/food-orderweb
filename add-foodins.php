<?php 
include('./config/constant.php');
            //Check whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                //Add the food in database
                //echo"Clicked";
                //1. Get the data from home
                $title = $_POST['title'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $category = $_POST['category'];
                $featured = $_POST['featured'];
                $active = $_POST['active'];
                $admin_id = $_SESSION['id'];
                //Check whether the radion button for featured and active are checked or not
        

                //2. Upload the image if selected
                //Check whether tje select image is clicked or nto and upload the image only if the image is selected
                if(isset($_FILES['image']['name']))
                {
                    //Get the deatils of the selected image
                    $image_name=$_FILES['image']['name'];

                    //Check whethr the image is selected ot not and upload image only if selected
                    if($image_name !="")
                    {
                        //Image is selected
                        //A. rename the Image
                        //Get the extension of selected image(jpg, png, gif, etc.)"Poorni-mj.jpg"poorni-mj.jpg
                        $ext = end(explode('.', $image_name));
                        //create new name for image
                        $image_name="Food-Name-".rand(0000,9999).".".$ext;//New iamge may be :food-name-657.jpg"
                        //B. Upload the image
                        //get the src path and destination path

                        //Source path is teh current location of tha image
                        $src = $_FILES['image']['tmp_name'];
                        //Destination path fpr the image to be uploaded
                        $dst = "./images/food/".$image_name;
                        //Finally upload the food image
                        $upload = move_uploaded_file($src, $dst);

                        //Check whether the image is uploaded or not
                        if($upload==false)
                        {
                            //Failed to upload the image
                            //Redirect to add food page with error message
                           
                            header('location:add-food.php');
                            //Stop the process
                            die();  
                        }
                    }
                }

                //3. Insert into dastabse
                //Create a swl query to save or add food
                //For numerical we do not need to pass te value inside the quotes'' but for string value it is compulsory to add quotes''
                $sql2= "INSERT INTO food SET
                title='$title',
                description='$description',
                price=$price,
                image_name='$image_name',
                category_id=$category, 
                featured='$featured',
                active='$active',
                created_by='$admin_id'
                ";
                    //Execute the   query
                    $res2=mysqli_query($conn, $sql2);
                    //Check whether data is inserted or not
                //4. Redirect with Message to manage food page
                 
                     header('location:food.php');
                 
            }else{
                header('location:home.php');
            }
            ?>