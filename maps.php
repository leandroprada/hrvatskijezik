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
		<meta name="viewport" content="width=device-width, initial-scale=0.67, shrink-to-fit=no">
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
		  <?php require "header.php";

		?>
		  
			<!-- start banner Area -->
			<section class="relative about-banner">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Imágenes				
							</h1>	
							<p class="text-white link-nav"><a href="index.html"><a href="blog-home.html">Al pasar por cada imagen</a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Se ven los nombres</a></p>
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
								<img class="img-fluid map" src="img/maps/sistemasolar.jpg" alt="" usemap="#image-mapss">
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
								<img class="img-fluid map" src="img/maps/tierraluna.jpg" alt="" usemap="#image-maptl">
								<map name="image-maptl">
								<area target="" alt="La Tierra - Zemlja" title="La Tierra - Zemlja" href="" coords="355,241,238" shape="circle">
								<area target="" alt="La Luna - Mjesec" title="La Luna - Mjesec" href="" coords="767,387,63" shape="circle">
								</map>
							</div>
						</div>	
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Edificio y Departamento</h3>
								<img class="img-fluid map" src="img/maps/departamento.jpg" alt="" usemap="#image-mapde">
								<map name="image-mapde">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Casa</h3>
								<img class="img-fluid map" src="img/maps/casa.jpg" alt="" usemap="#image-mapca">
								<map name="image-mapca">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Living</h3>
								<img class="img-fluid map" src="img/maps/living.jpg" alt="" usemap="#image-mapli">
								<map name="image-mapli">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
							<div class="col-lg-12">
							<div>
								<h3 class="center">Cocina</h3>
								<img class="img-fluid map" src="img/maps/cocina.jpg" alt="" usemap="#image-mapco">
								<map name="image-mapco">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Habitaci&oacute;n</h3>
								<img class="img-fluid map" src="img/maps/habitacion.jpg" alt="" usemap="#image-mapha">
								<map name="image-mapha">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Ba&ntilde;o</h3>
								<img class="img-fluid map" src="img/maps/bath.jpg" alt="" usemap="#image-mapba">
								<map name="image-mapba">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Mesa</h3>
								<img class="img-fluid map" src="img/maps/mesa.jpg" alt="" usemap="#image-mapme">
								<map name="image-mapme">
								<area target="" alt="departamento - stan" title="departamento - stan" href="" coords="103,120,319,117,334,184,90,188" shape="poly">
								<area target="" alt="edificio - zgrada" title="edificio - zgrada" href="" coords="0,637,426,638,425,565,315,100,105,98" shape="poly">
								</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Persona</h3>
								<img class="img-fluid map" src="img/maps/persona.jpg" alt="" usemap="#image-mappe">
								<map name="image-mappe">
								<area target="" alt="pie - stopalo" title="pie - stopalo" href="" coords="207,567,225,571,234,565,247,562,250,549,243,535,240,528,231,527,221,531,213,547" shape="poly">	
								<area target="" alt="pierna - noga" title="pierna - noga" href="" coords="239,523,231,520,222,524,220,486,217,467,224,441,218,399,212,353,226,327,246,313,249,301,256,319,258,366,251,426,255,455,246,506" shape="poly">
								<area target="" alt="mano - saka" title="mano - saka" href="" coords="191,247,188,260,202,267,212,272,222,254,220,241,205,240" shape="poly">
								<area target="" alt="brazo - ruka" title="brazo - ruka" href="" coords="161,169,181,193,154,231,172,240,193,245,184,263,161,258,133,254,124,239,132,209,141,198,150,182" shape="poly">
								<area target="" alt="cabeza - glava" title="cabeza - glava" href="" coords="214,148,228,169,242,162,255,141,261,107,252,96,238,93,221,106,215,124" shape="poly">
								<area target="" alt="pecho - prsa" title="pecho - prsa" href="" coords="179,176,258,188,248,230,222,228,197,228,179,227" shape="poly">
								<area target="" alt="rodilla - koljeno" title="rodilla - koljeno" href="" coords="175,422,20" shape="circle">
								<area target="" alt="dedo - prst" title="dedo - prst" href="" coords="270,252,11" shape="circle">
							</map>
							</div>
						</div>
						
						<div class="col-lg-12">
							<div>
								<h3 class="center">Cara</h3>
								<img class="img-fluid map" src="img/maps/cara.jpg" alt="" usemap="#image-mapcr">
								<map name="image-mapcr">
								<area target="" alt="pelo - kosa" title="pelo - kosa" href="" coords="31,581,114,510,190,458,208,387,202,297,218,187,261,116,308,101,360,108,409,134,436,182,455,204,500,210,494,256,466,301,432,386,398,426,565,441,536,240,528,182,504,114,472,35,423,2,233,2,178,50,142,87,139,126,97,188,67,253,58,319,45,355,25,482,2,554" shape="poly">
								<area target="" alt="labio - usna" title="labio - usna" href="" coords="261,348,290,384,308,390,330,390,342,388,362,375,391,344,366,361,342,370,309,373,292,364,274,358" shape="poly">
								<area target="" alt="boca - usta" title="boca - usta" href="" coords="260,342,318,349,360,339,391,331,364,378,342,388,316,391,293,384,276,370" shape="poly">
								<area target="" alt="nariz . nos" title="nariz . nos" href="" coords="332,228,314,225,302,225,291,235,297,272,299,298,286,299,286,321,302,330,316,336,327,332,338,323,351,314,355,298,345,290,336,294,336,264" shape="poly">
								<area target="" alt="ojo - oko" title="ojo - oko" href="" coords="341,235,358,243,377,245,395,241,413,230,406,217,386,212,367,213,348,220" shape="poly">
								<area target="" alt="mejilla - obraz" title="mejilla - obraz" href="" coords="345,249,348,282,390,326,395,364,403,398,433,367,450,330,453,293,437,262,420,251,390,255" shape="poly">
								<area target="" alt="oreja - oreja" title="oreja - oreja" href="" coords="460,215,466,237,466,261,464,287,475,287,489,265,495,246,495,225,495,213,468,207" shape="poly">
								<area target="" alt="frente - celo" title="frente - celo" href="" coords="218,212,272,208,306,214,342,200,395,195,424,203,440,192,405,136,361,112,309,104,264,119,228,172" shape="poly">
								<area target="" alt="pera - brada" title="pera - brada" href="" coords="272,392,303,402,340,402,359,395,382,385,386,412,363,429,330,436,299,436,280,423" shape="poly">
								<area target="" alt="ceja - obrva" title="ceja - obrva" href="" coords="285,225,275,213,246,213,223,215,214,220,210,233,230,223,255,220,270,225" shape="poly">
								<area target="" alt="pestañas - trepavice" title="pestañas - trepavice" href="" coords="283,240,266,233,253,235,240,239,230,248,218,244,230,234,242,228,257,226,278,230" shape="poly">
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
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.0/jquery.maphilight.min.js"></script>
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