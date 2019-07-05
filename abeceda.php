<?php
 session_start();
 
 if (($_SESSION['username']) != "autorizado") {
	
	 echo "Su usuario NO ESTÁ AUTORIZADO";
	 header("Location: ../login/signup.php");
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
		<title>Abecedario Croata</title>

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
<?php require 'header.php';?>
		

		
			<!-- start banner Area -->
			<section class="about-banner">
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Abecedario				
							</h1>	
							<p class="text-white link-nav">Haz click en cada letra</p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				<!-- Start portfolio-area Area -->
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		       <!--      <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Latest Featured Projects</h1>
		                        <p>Who are in extremely love with eco friendly system.</p>
		                    </div>
		                </div>
		            </div> -->
                    
                    <!-- <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vector">Vector</li>
                            <li data-filter=".raster">Raster</li>
                            <li data-filter=".ui">UI/UX</li>
                            <li data-filter=".printing">Printing</li>
                        </ul>
                    </div> -->
                    
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-1.png" alt="">
	                            	</div>
									<a href="img/slova/p1.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>		                               
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-2.png" alt="">
	                            	</div>
									<a href="img/slova/p2.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>	                               
                            </div>                            
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-3.png" alt="">
	                            	</div>
									<a href="img/slova/p3.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a> 
	                           	</div>
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-4.png" alt="">
	                            	</div>
									<a href="img/slova/p4.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-5.png" alt="">
	                            	</div>
									<a href="img/slova/p5.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                           </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-6.png" alt="">
	                            	</div>
									<a href="img/slova/p6.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                            </div>
							
							 <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-7.png" alt="">
	                            	</div>
									<a href="img/slova/p7.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>		                               
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-8.png" alt="">
	                            	</div>
									<a href="img/slova/p8.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>	                               
                            </div>                            
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-9.png" alt="">
	                            	</div>
									<a href="img/slova/p9.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a> 
	                           	</div>
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-10.png" alt="">
	                            	</div>
									<a href="img/slova/p10.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-11.png" alt="">
	                            	</div>
									<a href="img/slova/p11.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                           </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-12.png" alt="">
	                            	</div>
									<a href="img/slova/p12.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                            </div>
							
							 <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-13.png" alt="">
	                            	</div>
									<a href="img/slova/p13.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>		                               
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-14.png" alt="">
	                            	</div>
									<a href="img/slova/p14.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>	                               
                            </div>                            
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-15.png" alt="">
	                            	</div>
									<a href="img/slova/p15.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a> 
	                           	</div>
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-16.png" alt="">
	                            	</div>
									<a href="img/slova/p16.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-17.png" alt="">
	                            	</div>
									<a href="img/slova/p17.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                           </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-18.png" alt="">
	                            	</div>
									<a href="img/slova/p18.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                            </div>
							
							 <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-19.png" alt="">
	                            	</div>
									<a href="img/slova/p19.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>		                               
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-20.png" alt="">
	                            	</div>
									<a href="img/slova/p20.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>	                               
                            </div>                            
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-21.png" alt="">
	                            	</div>
									<a href="img/slova/p21.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a> 
	                           	</div>
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-22.png" alt="">
	                            	</div>
									<a href="img/slova/p22.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-23.png" alt="">
	                            	</div>
									<a href="img/slova/p23.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                           </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-24.png" alt="">
	                            	</div>
									<a href="img/slova/p24.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                            </div>
							
							 <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-25.png" alt="">
	                            	</div>
									<a href="img/slova/p25.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>		                               
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-26.png" alt="">
	                            	</div>
									<a href="img/slova/p26.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                              		
                            	</div>	                               
                            </div>                            
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-27.png" alt="">
	                            	</div>
									<a href="img/slova/p27.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a> 
	                           	</div>
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-28.png" alt="">
	                            	</div>
									<a href="img/slova/p28.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                            </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-29.png" alt="">
	                            	</div>
									<a href="img/slova/p29.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                           </div>
                            <div class="single-portfolio col-sm-2 all">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/slova/p-30.png" alt="">
	                            	</div>
									<a href="img/slova/p30.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/slova/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                            </div>

                        </div>
						

                    </div>
                    
                </div>
            </section>
            <!-- End portfolio-area Area -->	

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