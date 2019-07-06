<?php
 session_start();

 if (($_SESSION['login']) !== 'validated') {

	 echo "Su usuario NO ESTÁ AUTORIZADO";
	  header("Location: ./login/login.php");
 }


?>


	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Personal</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/jquery-ui.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<?php require "header.php";

			?>

			<!-- start banner Area -->
			<section class="relative about-banner" id="home">
				<div class="section-top-border">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<h3 class="mb-30">Inicio de sesi&oacute;n</h3>
							<form action="#">
								<div class="mt-10">
									<input type="text" name="username" placeholder="INGRESE SU USUARIO" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
								</div>
								<div class="mt-10">
									<input type="password" name="password" placeholder="CONTRASE&Ntilde;A" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
								</div>

								<form class="login100-form validate-form flex-sb flex-w" action="signup.php" method="post">
									<span class="login100-form-title p-b-32">
										INICIO DE SESI&Oacute;N - <?php
																	 if (($_SESSION['username']) != "autorizado") {
																	 echo "POR FAVOR INGRESE UN USUARIO AUTORIZADO";}

																	?>
									</span>

									<span class="txt1 p-b-11">
										Username
									</span>
									<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
										<input class="input100" type="text" name="username" >
										<span class="focus-input100"></span>
									</div>

									<span class="txt1 p-b-11">
										Password
									</span>
									<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
										<span class="btn-show-pass">
											<i class="fa fa-eye"></i>
										</span>
										<input class="input100" type="password" name="pass" >
										<span class="focus-input100"></span>
									</div>

									<div class="flex-sb-m w-full p-b-48">
										<div class="contact100-form-checkbox">
											<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
											<label class="label-checkbox100" for="ckb1">
												Remember me
											</label>
										</div>

										<div>
											<a href="#" class="txt3">
												Forgot Password?
											</a>
										</div>
									</div>

									<div class="container-login100-form-btn">
										<button class="login100-form-btn" type="submit" name ="signup-submit">
											Login
										</button>
									</div>


								<div class="mt-10">
									<input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required class="single-input-secondary">
								</div>
							</form>
						</div>

					</div>
				</div>
			</section>

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
    		<script src="js/jquery.tabs.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
            <script src="js/isotope.pkgd.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
