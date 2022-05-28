<?php
include('header.php');
if(isset($_GET['id'])){
$id=$_GET['id'];
}else{
    header('location:myorders.php');
}
?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Cancel Order</h2>
        </div>

        <form action="cancelorderup.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-12 col-md-6 form-group">
              <textarea  name="reason"   class="form-control" id="reason" placeholder="Reason" required></textarea>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            </div>
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">cancel order</button>
            </div>
          </div>
        </form>

      </div>
    </section>
<?php 
include('footer.php');
?>