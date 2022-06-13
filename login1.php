<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link href="assets/css/style-1.css" rel="stylesheet">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/hero-bg.jpg); min-height: 100vh;
  overflow: hidden;">
	<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
				<h6  class="mb-4 text-center mess" id="mess">Incorrect username & password</h6>
		      	<form action="login2.php" method="POST" id="signinform" class="signin-form" >
		      		<div class="form-group">
		      			<input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field"  type="password" class="form-control" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit"  class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            
	          </form>
	          <p class="w-100 text-center">&mdash; Or Signup  &mdash;</p>
	          <div class="social d-flex text-center">
	          	<!-- <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a> -->
	          	<a href="signup.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Register</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	
  <script src="assets/js/pass.js"></script> 
 <script type="text/javascript">

var msg =document.getElementById("mess");
jQuery($ => {
  $('form').on('submit', e => {
	msg.style.display="none";
	let email=document.getElementById('email').value;
 	let password=document.getElementById('password-field').value;
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "verifyuser.php",
      data: { email:email,password:password },
      success: function(res) {
        if (res == 'ok') {
			msg.style.display="none";
		  e.target.submit(); // rule met, allow form submission
        } else {
			msg.style.display="block";
        }
      }
    });
  });
});

 </script>

	</body>
</html>