<!DOCTYPE html>
<html>
	<head>
		<title>PORSENI 2018</title>
		<!-- html meta -->
		<meta charset="UTF-8">
  		<meta name="description" content="Website Pekan Olahraga dan Seni (PORSENI) 2018">
		<meta name="keywords" content="PORSENI, Pekan Olahraga dan Seni, PORSENI 2018">
		<meta name="author" content="PNJ">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<!-- bootstrap 3.3.7 CSS -->
  		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    	
    	<!-- font-awesome-4.7.0 CSS -->
  		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.min.css">

    	<!-- Styling CSS -->
    	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/artikel.css">

    	<!-- owl-carousel CSS -->
    	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/owl-carousel/dist/assets/owl.carousel.min.css">
    	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/owl-carousel/dist/assets/owl.theme.green.min.css">
    	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.css">

    	<!-- favicon -->
    	<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/images/icon.png" type="image/x-icon">

	</head>
	
	<body>
		<header>
			<section id="navigation">
				<div class="navbar navbar-fixed-top" style="">
		  			<div class="container">
			  			<div class="navbar-header">
			  				<div class="logo-container">
			  					<img src="<?php echo base_url(); ?>/assets/images/logo-porseni1.png">
			  					<p style="">.blog</p>
			  				</div>

			  				<div class="side-nav-btn">
			  					<div class="bar"></div>
			  					<div class="bar"></div>
			  					<div class="bar"></div>
			  				</div>
						</div>

			  			<div id="bs-collapse" class="navbar-collapse collapse container-fluid">
						   	<ul class="nav navbar-nav">
						    	<li><a href="../index">Beranda</a></li>
						    	<li><a href="../list">List Berita</a></li>
						    	<li><a class="login-button" href="https://porseni.pnj.ac.id/index.php/login">Login Institusi</a></li>
						   	</ul>
						</div>
					</div>
				</div>

				<div class="main-side-nav-overlay"></div>

				<div class="main-side-nav">
					<!-- <div style="height: 40px; background: linear-gradient(135deg, #b2ff59 0%, #009688 100%);"></div> -->
					<div class="side-nav-header">
						<p>PORSENI XII</p>
					</div>

					<div class="side-navbar">
						<p>Menu</p>
						<a href="index.html">Beranda</a>
						<a href="list-berita.html">List Berita</a>
						<a href="https://porseni.pnj.ac.id/index.php/login">Login Institusi</a>
					</div>
					<hr>
					<div class="side-navbar">
						<p>Social Media</p>
						<!-- <a href="#">Facebook</a> -->
						<a href="https://www.twitter.com/porsenixii2018?s=08">Twitter</a>
						<a href="https://www.instagram.com/porsenixii2018">Instagram</a>
					</div>
				</div>
			</section>
		</header>

		<main>
			<section id="main-content">
				<div class="container">
					<div class="row">
						<div class="content-container col-lg-12 col-12">
							<div class="content-title">
								<h1><?php echo $sql['judul']; ?></h1>
							</div>

							<div class="content-title">
								<?php if($sql['foto']!=''){?>
								<img src="<?php echo base_url(); ?>assets/upload/berita/<?php echo $sql['foto']; ?>" style="width: 100%; margin-bottom: 12px;">
								<?php } ?>
							</div>
							
							<div class="content" style="">
								<?php echo $sql['content']; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<section id="main-copyright">
				<div class="company-list">
					<ul>
						<li><img src="<?php echo base_url(); ?>/assets/images/bakroma.png"></li>
						<li><img src="<?php echo base_url(); ?>/assets/images/pnj.png"></li>
						<li><img src="<?php echo base_url(); ?>/assets/images/polimedia.png"></li>
					</ul>
				</div>
				
				<p><i class="fa fa-fw fa-copyright"></i>2018 Pentas Olahraga dan Seni</p>	
			</section>
		</footer>

		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/owl-carousel/dist/owl.carousel.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/main.js"></script>
	</body>
</html>