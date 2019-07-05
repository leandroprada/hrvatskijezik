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
	                            		 <img class="image img-fluid" src="img/slova/p1.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-1.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p2.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-2.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p3.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-3.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p4.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-4.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p5.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-5.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p6.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-6.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p7.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-7.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p8.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-8.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p9.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-9.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p10.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-10.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p11.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-11.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p12.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-12.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p13.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-13.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p14.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-14.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p15.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-15.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p16.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-16.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p17.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-17.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p18.jpg" alt="">
	                            	</div>
									<a href="img/slova/p18.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p19.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-19.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p20.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-20.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p21.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-21.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p22.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-22.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p23.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-23.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p24.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-24.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p25.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-25.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p26.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-26.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p27.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-27.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p28.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-28.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p29.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-29.png" class="img-pop-up">	
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
	                            		 <img class="image img-fluid" src="img/slova/p30.jpg" alt="">
	                            	</div>
									<a href="img/slova/p-30.png" class="img-pop-up">	
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