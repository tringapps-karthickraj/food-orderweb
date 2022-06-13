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
     <button class="btn-admin" onclick="modalOpen();">Delete Admin</button>
     <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
 
    <span class="close" >&times;</span>
   
  </div>
  <div class="modal-body">
  <h6 class="canceltxt">Are you sure to delete the admin ?</h6>
          <div class="row">
              <div class="col-6"><button class="cancelbtn closem"><a style="color: white;" href="delete-admin.php?id=<?php echo $id; ?>">yes</a></button></div>
              <div class="col-6"><button class="cancelbtn closem" >No</button></div>
          </div>
  </div>
  
</div>

</div>
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
    <script type="text/javascript">
      // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var closebtn=document.getElementsByClassName("closem")[0];
// When the user clicks the button, open the modal 


function modalOpen() {
    modal.style.display = "block";
}
// function modalClose(){
//   modal.style.display = "none";
// }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

closebtn.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
<?php
include('footer.php');
?>