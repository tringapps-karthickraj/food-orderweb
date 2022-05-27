<?php
include('header.php');
?>
<section id="menu" class="menu section-bg mtop"> 
      <div class="container" data-aos="fade-up">
<?php
if($_SESSION['role'] == 2){
?>
<div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>
<?php
}else if($_SESSION['role'] == 1){
  ?>
  <div class="section-title">
          <h2>Manage Foods</h2>
          <div class="mt-4">
            <button class="btn-add"><a style="color: white;" href="add-food.php">Add Food</a></button>
          </div>
        </div>
  
  <?php

}

?>
        <?php
        if($_SESSION['role']==2){
        ?>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul  id="menu-flters">
                <?php
            $sqlcat="SELECT * FROM category WHERE active=1";
                 
                 $cat=mysqli_query($conn, $sqlcat);

                 $count=mysqli_num_rows($cat);
                 if($count>0)
                 {
                   ?>
                  <li> <a href="food.php">All</a></li>
                   <?php
                     while($row1=mysqli_fetch_assoc($cat))
                     {
?>
<li ><a href="category-foods.php?category_id=<?php echo $row1['id'];?>"><?php echo $row1['title'] ?></a></li>
<?php
                     }
                 }else
                 {
                     echo"<div class='error'>Category not Found.</div>";
                 }
                     ?>
            </ul>
          </div>
        </div>

<?php
}
?>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

        <?php 
              $sql="SELECT * FROM food";
              $res=mysqli_query($conn, $sql);
              $count=mysqli_num_rows($res);
              if($count>0)
              {
                  while($row = mysqli_fetch_assoc($res))
                  {
                   if($_SESSION['role']==1 || $row['active'] == 1) {
                      $id=$row['id'];
                      $title=$row['title'];
                      $description=$row['description'];
                      $price = $row['price'];
                      $image_name=$row['image_name'];
                      ?>
                        <div class="col-lg-6 menu-item filter-starters">
                        <div class="row">
<div class="col-lg-2">
<img src="./images/food/<?php echo $image_name;?>" class="menu-img" alt="">
</div>
<div class="col-lg-10">

            
            <div class="menu-content">
              <a href="#"><?php echo $title; ?></a><span>₹<?php echo $price; ?></span>
            </div>
            <div class="menu-ingredients">
            <?php echo $description; ?>
            </div>
            
            <div class="textend">
            <?php if($_SESSION['role']==2){ ?>
              <button class="btn-order"><a style="color: white;" href="addToCarts.php?food_id=<?php echo $id; ?>">Add</a></button>
              <?php
                   }elseif($_SESSION['role']==1){
                     ?>
                     <button class="btn-order"><a style="color: white;" href="addToCarts.php?food_id=<?php echo $id; ?>">Update</a></button>
                     <?php
                   }
            ?>
              
            </div>
            
                        </div>
                        </div>
          </div>
                      <?php 
                  }
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