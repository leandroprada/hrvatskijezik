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
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">					
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.html">Home</a></li>
			          <li><a href="about.html">About</a></li>
			          <li><a href="services.html">Services</a></li>
			          <li><a href="portfolio.html">Portfolio</a></li>
			          <li><a href="price.html">Pricing</a></li>
			          <li class="menu-has-children"><a href="">Blog</a>
			            <ul>
			              <li><a href="blog-home.html">Blog Home</a></li>
			              <li><a href="blog-single.html">Blog Single</a></li>
			            </ul>
			          </li>	
			          <li class="menu-has-children"><a href="">Pages</a>
			            <ul>
		            	  <li><a href="elements.html">Elements</a></li>
				          <li class="menu-has-children"><a href="">Level 2 </a>
				            <ul>
				              <li><a href="#">Item One</a></li>
				              <li><a href="#">Item Two</a></li>
				            </ul>
				          </li>					                		
			            </ul>
			          </li>					          					          		          
			          <li><a href="contact.html">Contact</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
		  
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Blog Details Page				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Blog Details Page</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->					  
			
		<!-- Start post-content Area -->
		
			<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-12">
							<div >
								<h3 class="center">Los Planetas</h3>
								<img class="img-fluid" src="img/maps/sistemasolar.jpg" alt="" usemap="#image-mapss">
								<map name="image-mapss">
								<area target="" alt="mercurio" title="mercurio" href="" coords="110,159,13" shape="circle">
								<area target="" alt="sol" title="sol - sunce" href="" coords="1,319,30,317,71,254,82,178,77,115,62,65,44,31,23,1,2,1,1,165" shape="poly">
								<area target="" alt="venus" title="venus - venera" href="" coords="161,161,21" shape="circle">
								<area target="" alt="tierra" title="tierra - zemlja" href="" coords="231,159,23" shape="circle">
								<area target="" alt="luna" title="luna - mjesec" href="" coords="253,127,10" shape="circle">
								<area target="" alt="marte" title="marte - mars" href="" coords="303,157,21" shape="circle">
								<area target="" alt="jupiter" title="jupiter - jupiter" href="" coords="453,157,105" shape="circle">
								<area target="" alt="saturno" title="saturno - saturn" href="" coords="601,161,52" shape="circle">
								<area target="" alt="neptuno" title="neptuno" href="" coords="747,158,49" shape="circle">
								<area target="" alt="urano" title="urano" href="" coords="858,160,45" shape="circle">
								</map>
							</div>
						</div>	
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">La Tierra y La Luna</h3>
								<img class="img-fluid" src="img/maps/tierraluna.jpg" alt="" usemap="#image-maptl">
								<map name="image-maptl">
								<area target="" alt="La Tierra - Zemlja" title="La Tierra - Zemlja" href="" coords="355,241,238" shape="circle">
								<area target="" alt="La Luna - Mjesec" title="La Luna - Mjesec" href="" coords="767,387,63" shape="circle">
								</map>
							</div>
						</div>	
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Edificio y Departamento</h3>
								<img class="img-fluid" src="img/maps/departamento.jpg" alt="" usemap="#image-mapde">
								<map name="image-mapde">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Casa</h3>
								<img class="img-fluid" src="img/maps/casa.jpg" alt="" usemap="#image-mapca">
								<map name="image-mapca">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Living</h3>
								<img class="img-fluid" src="img/maps/living.jpg" alt="" usemap="#image-mapli">
								<map name="image-mapli">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
							<div class="col-lg-12">
							<div>
								<h3 class="center">Cocina</h3>
								<img class="img-fluid" src="img/maps/cocina.jpg" alt="" usemap="#image-mapco">
								<map name="image-mapco">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Habitaci&oacute;n</h3>
								<img class="img-fluid" src="img/maps/habitacion.jpg" alt="" usemap="#image-mapha">
								<map name="image-mapha">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Ba&ntilde;o</h3>
								<img class="img-fluid" src="img/maps/bath.jpg" alt="" usemap="#image-mapba">
								<map name="image-mapba">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Mesa</h3>
								<img class="img-fluid" src="img/maps/mesa.jpg" alt="" usemap="#image-mapme">
								<map name="image-mapme">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Persona</h3>
								<img class="img-fluid" src="img/maps/persona.jpg" alt="" usemap="#image-mappe">
								<map name="image-mappe">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Cara</h3>
								<img class="img-fluid" src="img/maps/cara.jpg" alt="" usemap="#image-mapcr">
								<map name="image-mapcr">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						
					</div>
				</div>
			</section>
			
			
			
			
		
			
			
			<!-- End post-content Area -->
			
            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Me</h4>
                                <p>
                                    We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                                </p>
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                <p>Stay updated with our latest trends</p>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Me</h4>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div>Photo by Marlene Leppänen from Pexels - 
				Photo by Binyamin Mellish from Pexels - 
				Photo by Milly Eaton from Pexels - Photo by Vincent Rivaud from Pexels - Photo by Christa Grover from Pexels - Photo by Derick Santos from Pexels
				
				</div>
            </footer>
            <!-- End footer Area -->		

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