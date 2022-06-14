<?php
include('header.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT myorders.total as total, myorders.order_date as date, myorders.status as status, myorders.customer_name as customer_name, myorders.customer_contact as contact, myorders.customer_email as email, myorders.customer_address as address, orders.quandity as quandity, food.title as title, orders.priceperqty as price, admin.name as username FROM `myorders` inner join orders on orders.order_id=myorders.id INNER JOIN food on food.id =orders.food_id INNER JOIN admin on admin.id = myorders.customer_id WHERE myorders.id = '$id'";
    $res=mysqli_query($conn,$sql);
    $sql2="SELECT myorders.total as total, myorders.order_date as date, myorders.status as status, myorders.customer_name as customer_name, myorders.customer_contact as contact, myorders.customer_email as email, myorders.customer_address as address, orders.quandity as quandity, food.title as title, orders.priceperqty as price, admin.name as username FROM `myorders` inner join orders on orders.order_id=myorders.id INNER JOIN food on food.id =orders.food_id INNER JOIN admin on admin.id = myorders.customer_id WHERE myorders.id = '$id'";
    $res2=mysqli_query($conn,$sql2);
            //Get teh value based on query executed
            $row= mysqli_fetch_assoc($res);
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

}else{
    header('location:manage-orders.php');
}
?>
<section id="menu" class="menu section-bg mtop"> 
      <div class="container" data-aos="fade-up">


    <div class="section-title">
          <h2>View Details</h2>
          <div class="row">
              <div class="col-lg-2">
                  Customer Details:
              </div>
              <div class="col-lg-8">
                  <div class="row">
                      <div class="col-lg-4">
                          Username
                      </div>
                      <div class="col-lg-8">
                      <?php 
                      echo $row['username'];
                      ?>
                      </div>
                      <div class="col-lg-4">
                      Customer Name
                      </div>
                      <div class="col-lg-8">
                      <?php 
                      echo $row['customer_name'];
                      ?>
                      </div>
                      <div class="col-lg-4">
                          Ordered Date
                      </div>
                      <div class="col-lg-8">
                      <?php 
                      echo $row['date'];
                      ?>
                      </div>
                      <div class="col-lg-4">
                          Address
                      </div>
                      <div class="col-lg-8">
                      <?php 
                      echo $row['address'];
                      ?>
                      </div>
                      <div class="col-lg-4">
                          Contact
                      </div>
                      <div class="col-lg-8">
                      <?php 
                      echo $row['contact'];
                      ?>
                      </div>
                      <div class="col-lg-4">
                      Email
                      </div>
                      <div class="col-lg-8">
                      <?php 
                      echo $row['email'];
                      ?>
                      </div>
                      <div class="col-lg-4">
                      Status
                      </div>
                      <div class="col-lg-8">
                      <?php 
                      echo $status;
                      ?>
                      </div>
                      <div class="col-lg-4">
                      Total
                      </div>
                      <div class="col-lg-8">
                      ₹
                      <?php 
                      echo $row['total'];
                      ?>
                      </div>
                  </div>
              </div>
          </div>
        </div>


        <div data-aos="fade-up" data-aos-delay="200">
            <div class="row mb-4" >
            <div class="col-lg-2">S.No</div>
            <div class="col-lg-4">Title</div>
            <div class="col-lg-2">Quandity</div>
            <div class="col-lg-2">Price</div>
            <div class="col-lg-2">Total</div>
            </div>
            <?php    
    $sn=1;//Create a variable and Assign value
    //check the num of rows
        //we have the rows in the databse
          while($row1=mysqli_fetch_assoc($res2))
          {
              //using while loop to get the al the dasta from the database
              //And while loop will run long as the we have the dasta in database

              //get individual data
              //Display the values in our table
              ?>
              <div class="row admintablefont">
                <div class="col-lg-2"><?php echo $sn++ ;?></div>
                <div class="col-lg-4"><?php echo $row1['title']; ?></div>
                <div class="col-lg-2"><?php echo $row1['quandity']; ?></div>
                <div class="col-lg-2">₹ <?php echo $row1['price']; ?></div>
                <div class="col-lg-2">₹ <?php echo $row1['quandity']*$row1['price']; ?></div>  
              </div>

              <?php
          }
?>

        </div>

      </div>
    </section><!-- End Menu Section -->
<?php
include('footer.php');
?>