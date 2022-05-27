<?php
include('header.php');
if(isset($_GET['cart_id']))
{
    $cart_id=$_GET['cart_id'];
    $sql="SELECT carts.id as cart_id, carts.quandity as quandity, food.title as title, food.price as price, food.image_name as image_name  FROM carts INNER JOIN food ON carts.food_id = food.id  WHERE carts.id='$cart_id'";
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($res);
    
        $title=$row['title'];
        $price=$row['price'];
        $image_name=$row['image_name'];
        $quandity= $row['quandity'];

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

        <form action="addToCartUpdate.php" method="post"  class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
          <div class="col-lg-4 col-md-6 form-group mt-3">
        <div><img src="./images/food/<?php echo $image_name;?>" class="order-img" alt=""></div>
          
          <div class="ml-1">
              <div>
              <label><?php echo $title; ?></label>
              </div>
              <div>
              <p class="food-price">₹<span id="prize-food"><?php echo $price* $quandity;?></span></p>
              </div>
          </div>
            </div>
            <div class="col-lg-8 col-md-6 form-group mt-3">
                <label class="quantityabs">Quantity</label>
            <input type="number"  onchange="prizeDisplay(event)" name="qty" class="form-control" id="qty" value="<?php echo $quandity ?>" required >
            <input type="hidden"  name="cart_id"  value="<?php echo $row['cart_id'] ?>" >
            </div>
           
          <div class="text-center"><button type="submit" name="submit" value="submit">Add to cart</button></div>
        </form>

      </div>
      <script>
var initialPrize =<?php echo $price;?>;
function prizeDisplay(ev){
    document.getElementById("prize-food").innerHTML = initialPrize * ev.target.value;
}


        </script>
    </section>

<?php
                   
include('footer.php');
?>