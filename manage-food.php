<?php
include('header.php');
?>
<section id="menu" class="menu section-bg mtop"> 
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Manage Foods</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <!--  -->
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <?php 
              $sql="SELECT * FROM food WHERE active='Yes'";
              $res=mysqli_query($conn, $sql);
              $count=mysqli_num_rows($res);
              if($count>0)
              {
                  while($row = mysqli_fetch_assoc($res))
                  {
                      $id=$row['id'];
                      $title=$row['title'];
                      $description=$row['description'];
                      $price = $row['price'];
                      $image_name=$row['image_name'];
                      ?>
                        <div class="col-lg-6 menu-item filter-starters">
            <img src="../images/food/<?php echo $image_name;?>" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $title; ?></a><span>₹<?php echo $price; ?></span>
            </div>
            <div class="menu-ingredients">
            <?php echo $description; ?>
            </div>
            <div class="textend">
              <button class="btn-order"><a style="color: white;" href="addToCarts.php?food_id=<?php echo $id; ?>">Add</a></button>
            </div>
          </div>
                      <?php 
                  }
              }
              else
              {
                  echo"<div class='error'>Food Not Found.</div>";
              }
            ?>


        </div>

      </div>
    </section><!-- End Menu Section -->
<?php
include('footer.php');
?>