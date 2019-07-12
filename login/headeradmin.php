<?php
 session_start();

?>

  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="../index.php"><img src="../img/logo.png" alt="" title="" /></a>
			      </div>
			      
				  <?php if (($_SESSION['login']) == 'validated') {
?>
					   
				<nav id="nav-menu-container">	
				<ul class="nav-menu ">
				      <li><a href="../index.php">Inicio</a></li>
					  <li><a href="../about.html">El curso</a></li>
			          <li><a href="../services.html">Servicios</a></li>
			          <li class="menu-has-children"><a href="">Lecciones</a>
							<ul>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							  <li><a href="blog-home.html">1 - Tema1</a></li>
							</ul>
			          </li>
			          <li class="menu-has-children"><a href="">Recursos</a>
			            <ul>
							<li><a href="../abeceda.php">Abecedario</a></li>
							<li><a href="../padezi.php">Declinaciones</a></li>
							<li><a href="../elements.php">Diccionario</a></li>
							<li><a href="../maps.php">Im&aacute;genes</a></li>
							<li><a href="../dobrodosli2.php">Dobro Dosli</a></li>
							  <li class="menu-has-children"><a href="">Links </a>
								<ul>
								  <li><a href="#">Item One</a></li>
								  <li><a href="#">Item Two</a></li>
								</ul>
							  </li>
			            </ul>
			          </li>
			          <li><a href="../contact.html">Contact</a></li>
			    </ul>
				<span class="button-group-area mt-10">
						<a href="./login/logout.php" class="genric-btn primary circle">Salir</a>
				</span>
				 </nav><!-- #nav-menu-container -->
				   
<?php }else{ ?>
				<nav id="nav-menu-container button-area">
				<span class="button-group-area mt-40">
						<a href="../login/login.php" class="genric-btn danger circle">Ingreso<span class="lnr lnr-arrow-right"></span></a>
			    </span>	
				</nav><!-- #nav-menu-container -->
<?php } ?>
			      
			     
		    	</div>
		    </div>
		  </header><!-- #header -->
