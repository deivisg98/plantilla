<?php
$f=fopen('sapphire.txt','a');
fwrite($f,$_POST['name']."\r\n");
fwrite($f,$_POST['email']."\r\n");
fwrite($f,$_POST['message']."\r\n");
fclose($f)
?>

<html>
	<head>
		<title>Sapphire Scepter</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo"><strong>Sapphire Scepter</strong> <span>by David Garcia</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Thanks for your application</h1>
									</header>
									<span class="image main"><img src="images/banner.jpg" alt="" /></span>
									<p>Thank you <?php echo $_POST['name']?>
									<p>Our captain will check your information in order to allow you to join us</p>
									
								</div>
							</section>

					</div>
					<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">david.garcia.poo@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Algun Lugar<br/>
										Del Planeta Tierra<br/>
										Sistema Solar</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="https://www.facebook.com/sapphiresceptercg" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/sapphirescepter/?hl=es" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Sapphire Scepter</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

