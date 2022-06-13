<?php
include('header.php');
$cusid=$_SESSION['id'];
$sql="SELECT carts.id as carts_id, carts.quandity as quandity,food.title as title, carts.priceperqty as price FROM carts INNER JOIN food ON carts.food_id = food.id WHERE carts.customer_id='$cusid'";
$res=mysqli_query($conn, $sql);
$totalall =0;

$count=mysqli_num_rows($res);


?>
<section id="why-us" class="why-us mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Carts</h2>
          <!-- <p>Why Choose Our Restaurant</p> -->
        </div>

        <div class="row">

          <div class="col-lg-12">
              
            <div class="box" data-aos="zoom-in" data-aos-delay="100" style="padding: 14px;">
            <?php
            
            if($count>0){
            ?>
            <div class="row mycartscard">
                <div class="col-lg-3">
                Name
                </div>
                <div class="col-lg-1">
                  Quandity
                </div>
                <div class="col-lg-1">
                    Price
                </div>
                <div class="col-lg-1">
                    Total   
                </div>
                </div>

<?php

while($row=mysqli_fetch_assoc($res)){
$perFoodTot = $row['quandity'] * $row['price'];
$totalall+=$perFoodTot;

?>
                <div class="row mycartscard">
                <div class="col-lg-3">
                <?php echo $row['title'];?>
                </div>
                <div class="col-lg-1">
                <?php echo $row['quandity'];?>
                </div>
                <div class="col-lg-1">
                <?php echo $row['price'];?>
                </div>
                <div class="col-lg-1">
                <?php echo $perFoodTot;?>
                </div>
                <div class="col-lg-2">
                
              <button class="btn-order"><a style="color: white;" href="addToCartsUp.php?cart_id=<?php echo $row['carts_id']; ?>">Add more</a></button>
                </div>
                <div class="col-lg-1">
              <button class="btn-order"><a style="color: white;" href="removeCarts.php?cart_id=<?php echo $row['carts_id']; ?>">remove</a></button>
                </div>
                </div>
                <?php }
                ?>
                <hr>
                <div class="row justify-content-start mycartscard">
    <div class="col-lg-5">
      Total
    </div>
    <div class="col-lg-1">
    <?php echo $totalall;?>
    </div>
    <div class="col-lg-6">
<div class="textend">
<button class="btn-order"><a style="color: white;" href="order.php?total=<?php echo $totalall; ?>">order now</a></button>
</div>
    </div>
  </div>
  <?php
  
  
            }else{
              ?>
              <div>No order Found</div>
          <?php
        }
        ?>
            </div>
          </div>

         

          
        </div>

      </div>
    </section>
<?php
include('footer.php');
?>