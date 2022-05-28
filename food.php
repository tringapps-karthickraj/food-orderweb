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
              $sql="SELECT food.id as id, food.title as title, food.price as price,
              food.description as description,food.featured as featured, food.active as active, food.image_name as image_name, category.title as cat_title FROM food INNER JOIN category on food.category_id = category.id";
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
            <?php if($_SESSION['role']==1){?>
            <div class="foodcategory">
            Category: <?php echo $row['cat_title']; ?>
         </div>
         <?php } ?>
            <div class="menu-ingredients">
            <?php echo $description; ?>
            </div>
            
            <?php if($_SESSION['role']==2){ ?>
            <div class="textend">

              <button class="btn-order"><a style="color: white;" href="addToCarts.php?food_id=<?php echo $id; ?>">Add</a></button>
            </div>
              
              <?php
                   }elseif($_SESSION['role']==1){
                     ?>
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
                     <button class="btn-order"><a style="color: white;" href="update-food.php?id=<?php echo $id; ?>">Update</a></button>
                     </div> 
                    </div>
                     <?php
                   }
            ?>
              
            
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