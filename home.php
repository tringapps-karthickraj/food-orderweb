<?php
include('header.php');

if($_SESSION['role']==2){
  ?>
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>Clan Booyah</span></h1>
          <!-- <h2>Delivering great food for more than 18 years!</h2> -->

          <div class="btns">
            <a href="food.php" class="btn-menu animated fadeInUp scrollto">Our Menu</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section>
<?php
}else if($_SESSION['role']==1){
  ?>
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-2 adminhome">
            <div class="fontadmin">
            <?php 
            //sql Query
            $sql="SELECT COUNT(*) as cat_total FROM category";
            //Execute Query
            $res=mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res); 
            
        ?>
        
            <div><?php echo $row['cat_total'];?></div>
            <div>Categories</div>
            </div>
            
            </div>
        <div class="col-lg-2 adminhome">
            <div class="fontadmin">
            <?php 
            //sql Query
            $sql2="SELECT COUNT(*) as food_total FROM food";
            //Execute Query
            $res2=mysqli_query($conn, $sql2);
            //Count Rows
            $row2=mysqli_fetch_assoc($res2);

        ?>
        <div><?php echo $row2['food_total'];?></div>
            <div>Foods</div>
            </div>
        
            </div>
        <div class="col-lg-2 adminhome">
            <div class="fontadmin">
            <?php 
            //sql Query
            $sql3="SELECT COUNT(*)  as order_total FROM myorders";
            //Execute Query
            $res3=mysqli_query($conn, $sql3);
            //Count Rows
            $row3=mysqli_fetch_assoc($res3);

        ?>
            <div><?php echo $row3['order_total'];?></div>
            <div>Total Orders</div>
            </div>
       
            </div>
        <div class="col-lg-2 adminhome">
            <div class="fontadmin">
            <?php 
        //Create sql query to get the total revuneue generated
        //Aggregate function in sql
        $sql4="SELECT SUM(total) AS Total FROM myorders WHERE status='Delivered'";
        //Eexcute the query 
        $res4=mysqli_query($conn, $sql4);
        //Get thevalues 
        $row4=mysqli_fetch_assoc($res4);
        
        //Get the total revenue
        $total_revenue=0;
        if(isset($row4['Total'])){
            $total_revenue=$row4['Total'];
        } 


        ?>
            <div>₹ <?php echo $total_revenue;?></div>
            <div>Revenue Generated</div>
            </div>
        
            </div>
        </div>
      </div>
  </section>
  <?php

}
?> 

  <?php 
include('footer.php');
?>