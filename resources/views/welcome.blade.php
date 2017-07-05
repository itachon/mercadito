<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Forty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=deivce-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
                <link rel="stylesheet" href="{{ asset('public/principal/css/main.css') }}">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
        
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>MERCADITO</strong> <span>VALORAMOS TU ESFUERZO</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Inicio</a></li>
							<li><a href="landing.html">Landing</a></li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="actions vertical">
							<li><a href="#" class="button special fit">Registro</a></li>
							<li><a href="#" class="button fit">Inicio de Sesión</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>¿Tienes un producto que vender?</h1>
							</header>
							<div class="content">
								<p>En el "Mercadito" tenemos como mision ofrecer una vitrina
                                                                    para emprendedores y PYMES con productos artesanles, apoyamos y valoramos 
                                                                    estos productos.</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">COMENZAR A VENDER</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
                                                                            <img src="{{ asset('public/principal/images/gorro.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Tejidos</a></h3>
										<p>Productos de todo tipo y temporada</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('public/principal/images/conservas.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Consevas</a></h3>
										<p>Frutas, mermeladas, verduras y mucho mas</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('public/principal/images/diseño.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Diseño</a></h3>
										<p>Diseños para toda temporada</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('public/principal/images/botanica.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Botanica</a></h3>
										<p>Flores y plantas de interior, frutales y decorativas</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('public/principal/images/pic05.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Consequat</a></h3>
										<p>Ipsum dolor sit amet</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="{{ asset('public/principal/images/pic06.jpg') }}" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Etiam</a></h3>
										<p>Feugiat amet tempus</p>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Massa libero</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="landing.html" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
                    
			<script type="text/javascript" src="{{ URL::asset('public/principal/js/jquery.min.js') }}"></script>
                        <script type="text/javascript" src="{{ URL::asset('public/principal/js/jquery.scrolly.min.js') }}"></script>
                        <script type="text/javascript" src="{{ URL::asset('public/principal/js/jquery.scrollex.min.js') }}"></script>
                        <script type="text/javascript" src="{{ URL::asset('public/principal/js/skel.min.js') }}"></script>
                        <script type="text/javascript" src="{{ URL::asset('public/principal/js/util.js') }}"></script>
                        <script type="text/javascript" src="{{ URL::asset('public/principal/js/main.js') }}"></script>
                        
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

	</body>
</html>