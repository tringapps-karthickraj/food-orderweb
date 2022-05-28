<?php
include('header.php');
$customer_id = $_SESSION['id'];
$sql = "SELECT * FROM myorders WHERE customer_id = '$customer_id'";
$res=mysqli_query($conn, $sql);
$count=mysqli_num_rows($res);

?>
<section id="why-us" class="why-us mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Orders</h2>
          <!-- <p>Why Choose Our Restaurant</p> -->
        </div>
        <div class="row">

      <?php if($count >0){
while($row=mysqli_fetch_assoc($res)){
  $order_id=$row['id'];
  $status = '';
  if($row['status']==0){
    $status="Ordered";
  }elseif($row['status']==1){
    $status="On Delivery";
  }elseif($row['status']==2){
    $status="Delivered";
  }elseif($row['status']==3){
    $status="Cancelled";
  }
      $sql2="SELECT * FROM orders INNER JOIN food ON orders.food_id = food.id WHERE orders.order_id = '$order_id'";
      $res1=mysqli_query($conn, $sql2);
$count1=mysqli_num_rows($res1);

      

        ?>
        
          <div class="col-lg-4" style="padding:25px;">
              
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <div style="font-size: 14px;text-align: end;"><?php echo $status?></div>
            <?php
            if($count1 > 0){
              while($row1=mysqli_fetch_assoc($res1)){
            
            ?>
                <div class="row myoderscard">
                <div class="col-lg-3">
               <?php echo $row1['title']; ?>
                </div>
                <div class="col-lg-3">
                <?php echo $row1['quandity']; ?>
                </div>
                <div class="col-lg-3">
                <?php echo $row1['price']; ?>
                </div>
                <div class="col-lg-3">
                <?php echo $row1['quandity'] * $row1['price']; ?>
                </div>
                </div>
                <?php
              }
              }
              ?>
               
                <hr>
                <div class="row justify-content-end myoderscard">
    <div class="col-lg-4">
      Total
    </div>
    <div class="col-lg-4">
      <?php echo $row['total']; ?>
    </div>
  </div>
  <?php if($row['status']==0 || $row['status']==1){?>
  <div><button class="btn-order"><a style="color:white;" href="cancel-order.php?id=<?php echo $order_id;?>">cancel</a></button></div>
  <?php
  }
  ?>
            
            </div>
          </div>

          

          

        
        <?php
      }
      ?>
      </div>
      <?php
        }else{

          ?>
          
          <div>No Orders Found</div>
          <?php
        }
        ?>

      </div>
    </section><!-- End Why Us Section -->
<?php
include('footer.php');
?>
