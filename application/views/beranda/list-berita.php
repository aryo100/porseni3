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
				<div class="navbar navbar-fixed-top">
		  			<div class="container">
			  			<div class="navbar-header">
			  				<div class="logo-container">
			  					<img src="<?php echo base_url(); ?>/assets/images/logo-porseni1.png">
			  					<p>.blog</p>
			  				</div>

			  				<div class="side-nav-btn">
			  					<div class="bar"></div>
			  					<div class="bar"></div>
			  					<div class="bar"></div>
			  				</div>
						</div>

			  			<div id="bs-collapse" class="navbar-collapse collapse container-fluid">
						   	<ul class="nav navbar-nav">
						    	<li><a href="index">Beranda</a></li>
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
						<a href="..">Beranda</a>
						<a href="https://porseni.pnj.ac.id/index.php/login">Login Institusi</a>
					</div>
					<hr>
					<div class="side-navbar">
						<p>Social Media</p>
						<a href="#">Facebook</a>
						<a href="https://www.twitter.com/porsenixii2018?s=08">Twitter</a>
						<a href="https://www.instagram.com/porsenixii2018">Instagram</a>
					</div>
				</div>
			</section>
		</header>

		<main>
			<section id="main-post">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-12">
							<h2 style="text-align: center; color: #009688; margin-bottom: 5rem; margin-top: 50px;">List Berita Porseni</h2>
							<div class="post-container">
								<?php foreach ($sql as $obj) {
									?>
								<div class="row color-bg" style="margin-bottom: 40px;">
									<div class="col-md-6 nopadding features-intro-img">
										<div class="about-image" style="background-image:url(<?php echo base_url(); ?>assets/upload/berita/<?php echo $obj->foto; ?>)" style="width: 100%; padding: 2rem;"></div><!-- about image 1 -->
									</div>
				
							        <div class="col-md-6 about-text">
										<h3><a href="venue.html"><?php echo $obj->judul; ?></a></h3>
										<p>
										<?php if(strlen($obj->content) > 100){echo substr($obj->content,0,100).'..';}else{echo $obj->content;} ?>
										</p>	
									</div>
								</div>	
								<?php } ?>
							
								<div class="row color-bg" style="margin-bottom: 40px;">
									<div class="col-md-6 nopadding features-intro-img">
										<div class="about-image" style="background-image:url(<?php echo base_url(); ?>/assets/images/gorciracas1.jpg)" style="width: 100%; padding: 2rem;"></div><!-- about image 1 -->
									</div>
				
							        <div class="col-md-6 about-text">
										<h3><a href="venue.html">Venue Lomba Pentas Olahraga dan Seni 2018</a></h3>
										<p>
											Berikut ini adalah daftar venue perlombaan yang diadakan porseni dalam dua bulan kedepan...
										</p>	
									</div>
								</div>

								<div class="row color-bg" style="margin-bottom: 40px;">
									<div class="col-md-6 nopadding features-intro-img">
										<div class="about-image" style="background-image:url(<?php echo base_url(); ?>/assets/images/margo.jpg)" style="width: 100%; padding: 2rem;"></div><!-- about image 1 -->
									</div>
				
							        <div class="col-md-6 about-text">
										<h3><a href="hotel.html">Daftar Hotel dan Penginapan Sekitar Venue Lomba PORSENI 2018</a></h3>
										<p>
											Bagi kalian yang masih binggung ingin menginap dimana saat mengikuti lomba, saya sebagai admin ingin memberikan list hotel...
										</p>
									</div>
								</div>

								<div class="row color-bg" style="margin-bottom: 40px;">
									<div class="col-md-6 nopadding features-intro-img">
										<div class="about-image" style="background-image:url(<?php echo base_url(); ?>/assets/images/monas.jpg)" style="width: 100%; padding: 2rem;"></div><!-- about image 1 -->
									</div>
				
							        <div class="col-md-6 about-text">
										<h3><a href="rekreasi.html">Daerah Tujuan Wisata di Jakarta</a></h3>
										<p>
											Berikut ini daerah tujuan wisata di jakarta yang bisa kalian kunjungi...
										</p>
									</div>
								</div>

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