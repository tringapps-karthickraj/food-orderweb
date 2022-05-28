<?php 
include('header.php');
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
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Add Food</h2>
        </div>

        <form action="add-foodup.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6 col-md-6 form-group"> 
              <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" id="name" placeholder="Title of the food" required>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>
            
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" value="<?php echo $price; ?>" name="price" placeholder="Price" required>
              
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <select class="form-control" name="category" required >
            <option value="">select the category</option>
                        <?php 
                        //Create php code to display categories from database
                        //1. create sql to get the all active categories from database
                        $sql = "SELECT * FROM category WHERE active=1";
                        //Executing the query
                        $res= mysqli_query($conn, $sql);
                        //Count rows to check whether we have categories or not
                        $count =mysqli_num_rows($res);
                        //If count is greater than o, we have categories else we do not have categories
                        if($count>0)
                        {
                            //We have categories
                            while($row=mysqli_fetch_assoc($res)) 
                            {
                                //Get the details of categories
                                $id = $row['id'];
                                $title = $row['title'];
                                ?>
                                <option <?php if($current_category == $id)echo "selected" ?> value="<?php echo $id; ?>"><?php echo $title; ?> </option>
                                <?php
                            }
                        }
                        else
                        {
                            //We do nto have categories
                            ?>
                            <option value="">No category Found</option>
                            <?php
                        }
                        
                        
                        ?>
                    
                        </select>
              
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="mt-2">
              Featured:<input type="radio" class="radioh" name="featured" <?php if($featured == 1){ echo "checked";}?> value="1" required><span>Yes</span>
                    <input type="radio" class="radioh" name="featured" <?php if($featured == 0){ echo "checked";}?> value="0" required><span>No</span>
              </div>
            
            </div> 
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="mt-2">
              Active:<input type="radio" class="radioh" name="active" <?php if($active == 1){ echo "checked";}?> value="1" required><span>Yes</span>
                    <input type="radio" class="radioh" name="active" <?php if($active == 0){ echo "checked";}?> value="0" required><span>No</span>
              </div>
            
            </div> 
            <div class="col-lg-12 col-md-6 form-group mt-3 mt-md-0">
            <textarea name="description"  class="form-control" cols="30" rows="5" required placeholder="Description of the Food."><?php echo $description; ?></textarea>
            </div>
            <div class="col-lg-2 col-md-6 form-group mt-3 mt-md-0" style="line-height: 8;">
            Selected image
            </div>
            <div class="col-lg-8 col-md-6 form-group mt-3 mt-md-0">
            <img src="./images/food/<?php echo $current_image; ?>" width="250px">
            </div>
            <div class="col-lg-12 col-md-6 form-group mt-3 mt-md-0">
            <input type="file"  name="image"> 
            </div>
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
            <button type="submit" name="submit">Update</button>
            </div>
          </div>
        </form>

      </div>
    </section>

<?php
include('footer.php');
?>