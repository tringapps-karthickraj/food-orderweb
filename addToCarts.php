<?php
include('header.php');
if(isset($_GET['food_id']))
{
    $food_id=$_GET['food_id'];
    $sql="SELECT * FROM food WHERE id=$food_id";
    $res=mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if($count==1)
    {
        $row=mysqli_fetch_assoc($res);
    
        $title=$row['title'];
        $price=$row['price'];
        $image_name=$row['image_name'];

    }
    else
    {
        header('location:'.SITEURL);
    }
}
else
{
    header('location:'.SITEURL);
}
?>
<section id="book-a-table" class="book-a-table mtop">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Order</h2>
          <p>Fill to confirm your order.</p>
        </div>

        <form action="addToCartIns.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
          <div class="col-lg-4 col-md-6 form-group mt-3">
        <div><img src="../images/food/<?php echo $image_name;?>" class="order-img" alt=""></div>
          
          <div class="ml-1">
              <div>
              <label><?php echo $title; ?></label>
              <input type="hidden" name="food_id"value="<?php echo $food_id?>">
              </div>
              <div>
              <p class="food-price">₹<span id="prize-food"><?php echo $price ?></span></p>
              </div>
          </div>
            </div>
            <div class="col-lg-8 col-md-6 form-group mt-3">
                <label class="quantityabs">Quantity</label>
            <input type="number" value="1" onchange="prizeDisplay(event)" name="qty" class="form-control" id="qty"  data-rule="minlen:1" data-msg="Please enter at least 1 chars">
            </div>
           
          <div class="text-center"><button type="submit" name="submit">Add to cart</button></div>
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