<?php
include('header.php');
    //Check whether the id is passed or not
    if(isset($_GET['category_id']))
    {
        //Catgeory is is set and get the id 
        $category_id=$_GET['category_id'];
        //get the category title based on category id 
        $sql="SELECT title FROM category WHERE id=$category_id";

        //execute the query
        $res=mysqli_query($conn, $sql);
        //Get the value from database
        $row=mysqli_fetch_assoc($res);
        //Get the title
        $category_title=$row['title'];
    }
    else
     {
        //Category not passed
        //Redirect to the home pqge
        header('location:'.SITEURL);
    }
?>
<section id="menu" class="menu section-bg mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">

            <?php
            $sqlcat="SELECT * FROM category WHERE active=1";
                 
                 $cat=mysqli_query($conn, $sqlcat);

                 $count=mysqli_num_rows($cat);
                 if($count>0)
                 {
                   ?>
                   <li><a href="food.php">All</a></li>
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
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

<?php 
     $sql2="SELECT * FROM food WHERE category_id=$category_id";
      $res=mysqli_query($conn, $sql2);
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
    <img src="./images/food/<?php echo $image_name;?>" class="menu-img" alt="">
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
</section>
<?php
include('footer.php');
?>