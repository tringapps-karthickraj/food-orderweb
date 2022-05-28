<?php
include('header.php');
if(isset($_GET['id']))
        {
            //Get all the details
            $id = $_GET['id'];
            //Sql query to get the selected food
            $sql ="SELECT status FROM myorders WHERE id=$id";
            //execute the query
            $res=mysqli_query($conn,$sql);
            //Get teh value based on query executed
            $row= mysqli_fetch_assoc($res);
            //Get the individual values of selected food
        }
        else
        {
            header('location:manage-orders.php');
        }
?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Update Status</h2>
        </div>

        <form action="status-update.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-8 col-md-6 form-group">
              <select name="status">
                            <option <?php if($row['status']==0){echo"selected";}?> value="0">Ordered</option>
                            <option <?php if($row['status']==1){echo"selected";}?> value="1">On Delivery</option>
                            <option <?php if($row['status']==2){echo"selected";}?> value="2">Delivered</option>
                            <option <?php if($row['status']==3){echo"selected";}?> value="3">Cancelled</option>
     </select>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>
            
           
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">Update Status </button>
            </div>
          </div>
        </form>

      </div>
    </section>

<?php
include('footer.php');
?>