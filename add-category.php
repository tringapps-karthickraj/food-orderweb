<?php
include('header.php');
?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Add Category</h2>
        </div>

        <form action="add-categoryins.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
              <input type="text" name="title" class="form-control" id="name" placeholder="Title of the food" required>
            </div>
            
            <div class="col-lg-3 col-md-6 form-group mt-3 mt-md-0">
              <div class="mt-2">
              Featured:<input type="radio" class="radioh" name="featured" value="1" required><span>Yes</span>
                    <input type="radio" class="radioh" name="featured" value="0" required><span>No</span>
              </div>
            
            </div> 
            <div class="col-lg-3 col-md-6 form-group mt-3 mt-md-0">
              <div class="mt-2">
              Active:<input type="radio" class="radioh" name="active" value="1" required><span>Yes</span>
                    <input type="radio" class="radioh" name="active" value="0" required><span>No</span>
              </div>
            
            </div> 
           
           
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">Add Category </button>
            </div>
          </div>
        </form>

      </div>
    </section>

<?php
include('footer.php');
?>