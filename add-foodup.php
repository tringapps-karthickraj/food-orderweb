<?php 
include('./config/constant.php');
        if(isset($_POST['submit']))
        {
            //echo"button clicked";

            //1. Get all the details from the form 
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description=$_POST['description'];
            $price = $_POST['price'];
            $current_image = $_POST['current_image'];
            $category = $_POST['category'];
            $featured= $_POST['featured'];
            $active = $_POST['active'];
            $adid=$_SESSION['id'];
            //2. Upload teh image if selected
            //check whether upload button is clicked or not
            if(isset($_FILES['image']['name']))
            {
                //upload button clicked
                $image_name = $_FILES['image']['name'];//New image name
                //check whether the file is avai or not
                if($image_name!="")
                {
                    //A. Uploadimg a new image
                    //Image is available
                    //Renamae the Image
                    $ext = end(explode('.',$image_name));//gets the extension of teh image
                    $image_name="Food-Name-".rand(0000,9999).'.'.$ext;//Thil will be renamed image

                    //Get te source path and destination path
                    $src_path = $_FILES['image']['tmp_name'];//Source path
                    $dest_path = "./images/food/".$image_name;//Destination path

                    //upload the image
                    $upload = move_uploaded_file($src_path, $dest_path);

                    //check whether the image is uploaded or not
                    if($upload==false)
                    {
                        //failed to upload
                        //redirect to manage food
                        header('location:food.php');
                        //stop the process
                        die();
                    }
                    //3. Remove the image if new image is uploaded and current image exists
                    //B. Remove current image if available
                    if($current_image!="")
                    {
                        //current image is available
                        //remove the image
                        $remove_path = "./images/food/".$current_image;

                        $remove=unlink($remove_path);
                        //check whether the image is removed or not
                        if($remove==false)
                        {
                            //failed to remove the current image
                            //redirect to manage food
                            header('location:food.php');
                            //stop the process
                            die(); 
                        }
                    }
                }
                else {
                    
                    $image_name=$current_image;
                }
            }
            else
            {
                $image_name=$current_image;
            }
            //4, Update the food in dtabase
            $sql3 = "UPDATE food SET
            title='$title',
            description='$description',
            price=$price,
            image_name='$image_name',
            category_id='$category',
            featured='$featured',
            active='$active',
            updated_by = '$adid'
            WHERE id=$id
            ";

            //execute the sql query
            $res3=mysqli_query($conn, $sql3);
            //check whether the query is executed or not
            header('location:food.php');
            //redirect to manage food with session image
        }
        
        
        ?>