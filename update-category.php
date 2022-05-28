<?php
include('header.php');
if(isset($_GET['id']))
        {
            //Get all the details
            $id = $_GET['id'];
            //Sql query to get the selected food
            $sql2 ="SELECT * FROM category WHERE id=$id";
            //execute the query
            $res2=mysqli_query($conn,$sql2);
            //Get teh value based on query executed
            $row2= mysqli_fetch_assoc($res2);
            //Get the individual values of selected food
            $title=$row2['title'];
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
          <h2>Update Category</h2>
        </div>

        <form action="add-categoryup.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
              <input type="text" name="title"  value="<?php echo $title; ?>" class="form-control" id="name" placeholder="Title of the food" required>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>
            
            <div class="col-lg-3 col-md-6 form-group mt-3 mt-md-0">
              <div class="mt-2">
              Featured:<input type="radio" class="radioh" name="featured" value="1" <?php if($featured == 1){ echo "checked";}?> required><span>Yes</span>
                    <input type="radio" class="radioh" name="featured" value="0" <?php if($featured == 0){ echo "checked";}?> required><span>No</span>
              </div>
            
            </div> 
            <div class="col-lg-3 col-md-6 form-group mt-3 mt-md-0">
              <div class="mt-2">
              Active:<input type="radio" class="radioh" name="active" <?php if($active == 1){ echo "checked";}?> value="1" required><span>Yes</span>
                    <input type="radio" class="radioh" name="active" <?php if($active == 0){ echo "checked";}?> value="0" required><span>No</span>
              </div>
            
            </div> 
           
           
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">Update Category </button>
            </div>
          </div>
        </form>

      </div>
    </section>

<?php
include('footer.php');
?>