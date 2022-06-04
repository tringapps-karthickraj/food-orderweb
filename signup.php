<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="./assets/css/style-1.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/hero-bg.jpg); min-height: 100vh;
  overflow: hidden;">
	<section class="">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register to Continue</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Register</h3>
		      	<form action="signup2.php" method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="name" placeholder="Name" required>
		      		</div>
                      <div class="form-group">
		      			<input type="email" class="form-control" name="email" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
		      			<input type="tel" class="form-control" name="phone" placeholder="Phone" required>
		      		</div>
	            <div class="form-group">
	            	<button type="submit"  name="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Do you have an account?  &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="login1.php" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Signin</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>