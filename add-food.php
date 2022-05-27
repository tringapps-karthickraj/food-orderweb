<?php
include('header.php');
?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Add Food</h2>
        </div>

        <form action="add-foodins.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
                
              <input type="text" name="title" class="form-control" id="name" placeholder="Title of the food" required>
            </div>
            
            <div class="col-lg-6 col-md-6 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="price" placeholder="Price" required>
              
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
                                <option value="<?php echo $id; ?>"><?php echo $title; ?> </option>
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
              Featured:<input type="radio" class="radioh" name="featured" value="1"><span>Yes</span>
                    <input type="radio" class="radioh" name="featured" value="0"><span>No</span>
              </div>
            
            </div> 
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <div class="mt-2">
              Active:<input type="radio" class="radioh" name="active" value="1"><span>Yes</span>
                    <input type="radio" class="radioh" name="active" value="0"><span>No</span>
              </div>
            
            </div> 
            <div class="col-lg-12 col-md-6 form-group mt-3 mt-md-0">
            <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description of the Food."></textarea>
            </div>
          </div>
          <!-- <div class="form-group mt-3">
          <input type="file" class="form-control" name="image"> 
          </div> -->
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">Add</button>
            </div>
          </div>
        </form>

      </div>
      <script>
var initialPrize = document.getElementById("prize-food").innerHTML;
function prizeDisplay(ev){
    document.getElementById("prize-food").innerHTML = initialPrize * ev.target.value;
}


        </script>
    </section>

<?php
include('footer.php');
?>