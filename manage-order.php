<?php
include('header.php');
?>
<section id="menu" class="menu section-bg mtop"> 
      <div class="container" data-aos="fade-up">


  <div class="section-title">
          <h2>Manage Orders</h2>
        </div>


        <div data-aos="fade-up" data-aos-delay="200">
            <div class="row mb-4" >
            <div class="col-lg-2">S.No</div>
            <div class="col-lg-2">Order id</div>
            <div class="col-lg-2">Total</div>
            <div class="col-lg-2">Status</div>
            <div class="col-lg-4">Action</div>
            </div>
            <?php 
//Query to Get all Admin
$sql = "SELECT*FROM myorders";
//Execute the query
$res = mysqli_query($conn, $sql);

//Check whether the query is exucuted or not
if($res==TRUE)
{
    
    $sn=1;//Create a variable and Assign value
    //check the num of rows
    if(mysqli_num_rows($res)>0) 
    {
        //we have the rows in the databse
          while($rows=mysqli_fetch_assoc($res))
          {
              //using while loop to get the al the dasta from the database
              //And while loop will run long as the we have the dasta in database

              //get individual data
              $id=$rows['id'];
              $status = '';
              if($rows['status']==0){
                $status="Ordered";
              }elseif($rows['status']==1){
                $status="On Delivery";
              }elseif($rows['status']==2){
                $status="Delivered";
              }elseif($rows['status']==3){
                $status="Cancelled";
              }

              //Display the values in our table
              ?>
              <div class="row admintablefont">
                <div class="col-lg-2"><?php echo $sn++ ;?></div>
                <div class="col-lg-2"><?php echo $rows['id']; ?></div>
                <div class="col-lg-2">₹ <?php echo $rows['total']; ?></div>
                <div class="col-lg-2"><?php echo $status; ?></div>
                <div class="col-lg-4">
     <button class="btn-admin"><a style="color: white;" href="vieworders.php?id=<?php echo $id; ?>" >View more</a></button>
     <?php if($rows['status'] == 0 ||  $rows['status'] ==1 ){ ?>
     <button class="btn-admin"><a style="color: white;" href="update-order.php?id=<?php echo $id; ?>" >Update Status</a></button>
     <?php } ?>
</div>  
              </div>

              <?php
          }
    }
}
?>

        </div>

      </div>
    </section><!-- End Menu Section -->
<?php
include('footer.php');
?>