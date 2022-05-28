<?php
include('header.php');
?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Add Admin</h2>
        </div>

        <form action="add-adminins.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone" required>
            </div>
          </div>
          <div class="row textend">
            <div class="col-lg-7">  
            <button type="submit" name="submit">Add Admin </button>
            </div>
          </div>
        </form>

      </div>
    </section>

<?php
include('footer.php');
?>