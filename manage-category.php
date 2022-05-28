<?php
include('header.php');
$sqlcat="SELECT * FROM category";
                 
                 $cat=mysqli_query($conn, $sqlcat);

                 $count=mysqli_num_rows($cat);
?>
<section id="menu" class="menu section-bg mtop"> 
      <div class="container" data-aos="fade-up">


  <div class="section-title">
          <h2>Manage Category</h2>
          <div class="mt-4">
            <button class="btn-add"><a style="color: white;" href="add-category.php">Add Category</a></button>
          </div>
        </div>


        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <?php
              if($count>0)
              {
                  while($row = mysqli_fetch_assoc($cat))
                  {
                      ?>
                        <div class="col-lg-6 menu-item filter-starters">
                        

            
            <div class="category">
              <a href=""> <?php echo $row['title']; ?></a>
                  </div>
                     <div class="row">
                       <div class="col-lg-4">
                         <?php if($row['featured']==1){
                           ?>
                       <p class="foodfeatured">Featured: Yes</p>
                       <?php }else{ ?>
                       <p class="foodfeatured changecolor">Featured: No</p>
                       <?php }?>
                       </div><div class="col-lg-4">
                       <?php if($row['active']==1){
                           ?>
                       <p class="foodfeatured active">Active: Yes</p>
                       <?php }else{ ?>
                       <p class="foodfeatured active changecolor">Active: No</p>
                       <?php }?>
                       </div><div class="col-lg-4">
                     <button class="btn-order"><a style="color: white;" href="update-category.php?id=<?php echo $row['id']; ?>">Update</a></button>
                     </div> 
                    </div>
                    
              
            
          </div>
                      <?php 
                  
                  }
              }
              else
              {
                  echo"<div class='error'>Category Not Found.</div>";
              }
            ?>


        </div>

      </div>
    </section><!-- End Menu Section -->
<?php
include('footer.php');
?>