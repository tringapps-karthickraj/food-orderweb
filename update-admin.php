<?php
include('header.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];

    //2. Create sql query to get the details
    $sql="SELECT *FROM admin WHERE id=$id";

    //Execute teh query 
    $res=mysqli_query($conn, $sql);

    //Check whether the query is excuted or not
    if($res==TRUE)
    {
        //Check whether the data is available or not
        $count = mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        //Check whether we have admin data or not
    }else
    {
        //REdirecet to manage admin page
        header('location:manage-admin.php');
    }
}else{
    header('location:manage-admin.php');
}

?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Update Admin</h2>
        </div>

        <form action="add-adminup.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-12 col-md-6 form-group">
              <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" id="name" placeholder="Name" required>
              <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </div>
            <div class="col-lg-12 col-md-6 form-group">
              <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" id="email" placeholder="Email" required>
            </div>
            
            <div class="col-lg-12 col-md-6 form-group">
              <input type="tel" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" id="phone" placeholder="Phone" required>
            </div>
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">Update Admin </button>
            </div>
          </div>
        </form>

      </div>
    </section>

<?php
include('footer.php');
?>