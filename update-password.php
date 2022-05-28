<?php
include('header.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
}else{
    header('location:manage-admin.php');
}
?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Change Password</h2>
        </div>

        <form action="add-adminup.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-12 col-md-6 form-group">
              <input type="password" name="oldpassword" class="form-control" id="oldpassword" placeholder="Old Password" required>
              <input type="hidden" name="id" value="<?php echo $id; ?>"> 
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password" required>
            </div>
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">Update Password </button>
            </div>
          </div>
        </form>

      </div>
    </section>

<?php
include('footer.php');
?>