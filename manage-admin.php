<?php
include('header.php');
?>
<section id="menu" class="menu section-bg mtop"> 
      <div class="container" data-aos="fade-up">


  <div class="section-title">
          <h2>Manage Admin</h2>
          <div class="mt-4">
            <button class="btn-add"><a style="color: white;" href="add-admin.php">Add Admin</a></button>
          </div>
        </div>


        <div data-aos="fade-up" data-aos-delay="200">
            <div class="row mb-4" >
            <div class="col-lg-1">S.No</div>
            <div class="col-lg-2">Name</div>
            <div class="col-lg-3">Email</div>
            <div class="col-lg-2">Phone</div>
            <div class="col-lg-4">Actions</div>
            </div>
            <?php 
//Query to Get all Admin
$sql = "SELECT*FROM admin where role =1";
//Execute the query
$res = mysqli_query($conn, $sql);

//Check whether the query is exucuted or not
if($res==TRUE)
{
    //Count the rows to check whether we have data in database or not.
    $count = mysqli_num_rows($res);//function to get the all rows in database
    
    $sn=1;//Create a variable and Assign value
    //check the num of rows
    if($count>0) 
    {
        //we have the rows in the databse
          while($rows=mysqli_fetch_assoc($res))
          {
              //using while loop to get the al the dasta from the database
              //And while loop will run long as the we have the dasta in database

              //get individual data
              $id=$rows['id'];

              //Display the values in our table
              ?>
              <div class="row admintablefont">
                <div class="col-lg-1"><?php echo $sn++ ;?></div>
                <div class="col-lg-2"><?php echo $rows['name']; ?></div>
                <div class="col-lg-3"><?php echo $rows['email']; ?></div>
                <div class="col-lg-2"><?php echo $rows['phone']; ?></div>
                <div class="col-lg-4">
     <button class="btn-admin"><a style="color: white;" href="update-password.php?id=<?php echo $id; ?>" >Change Password</a></button>
     <button class="btn-admin"><a style="color: white;" href="update-admin.php?id=<?php echo $id; ?>" >Update Admin</a></button>
     <button class="btn-admin"><a style="color: white;" href="delete-admin.php?id=<?php echo $id; ?>" >Delete Admin</a></button>
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