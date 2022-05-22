<?php
include('header.php');
?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Order</h2>
          <p>Fill to confirm your order.</p>
        </div>

        <form action="order2.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="contact" id="phone" placeholder="Your Phone" required>
              <input type="hidden" name="totalall" value="<?php echo $_GET['total'];?>">
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="address" rows="5" placeholder="Address" required></textarea>
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">Order</button>
            </div>
            <div class="col-lg-5">
            <p class="total">₹<?php echo $_GET['total'];?></p>
            </div>
          </div>
        </form>

      </div>
      <script>
var initialPrize = document.getElementById("prize-food").innerHTML;
function prizeDisplay(ev){
    document.getElementById("prize-food").innerHTML = initialPrize * ev.target.value;
}


        </script>
    </section>

<?php
                   
include('footer.php');
?>