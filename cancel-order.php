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
            <button type="button" class="cancelbtn" onclick="modalOpen();" >cancel order</button>
            </div>
          </div>
          <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
 
    <span class="close" >&times;</span>
   
  </div>
  <div class="modal-body">
  <h6 class="canceltxt">Are you sure to cancel the order?</h6>
          <div class="row">
              <div class="col-6"><button type="submit" name="submit">Yes</button></div>
              <div class="col-6"><button type="button" class="cancelbtn closem" >No</button></div>
          </div>
  </div>
  
</div>

</div>
          </form>
          
      

      </div>
      
    </section>          
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
  console.log('asas');
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