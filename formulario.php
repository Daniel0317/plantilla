<!DOCTYPE HTML>
<!--
	Synchronous by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>my personal profile</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="image/x-icon" href="images/icono.png" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="wrapper">
			
			<!-- Header -->
			<div id="header">
				<div class="container"> 
					
					<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Jose Daniel Alvarez Rua</a></h1>
						<span>Design by TEMPLATED</span>
					</div>
					
					<!-- Nav -->
					<nav id="nav">
						<ul>
							
							<li><a href="index.php">Inicio</a></li>
							<li><a href="perfilprofecional.html">perfil Profecional</a></li>
							<li><a href="perfilpersonal.html">Perfil Personal</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
			<!-- /Header -->
			
			<div id="page">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section id="sidebar1">
								<header>
									<h2>Sidebar 1</h2>
								</header>
								<ul class="style3">
									<li class="first">
										<p class="date"><a href="#">Oct <b>03</b></a></p>
										<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent urna congue rutrum. </a></p>
									</li>
									<li>
										<p class="date"><a href="#">Sep <b>30</b></a></p>
										<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent urna congue rutrum.</a></p>
									</li>
									<li>
										<p class="date"><a href="#">Sep <b>27</b></a> </p>
										<p><a href="#">Donec leo, vivamus fermentum nibh in augue praesent urna congue rutrum.</a></p>
									</li>
								</ul>
							</section>
						</div>
						<div class="6u skel-cell-important">
							<section id="content" >
								<header>
									<h2>esta pagina fue creada</h2>
								</header>
								<p>This is <strong>Synchronous</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo.</p>
								<p>Sed etiam vestibulum velit mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor.</p>
								<a href="#" class="button">Full Article</a>
							</section>
						</div>
						<div class="3u">
							<section id="content" >
								<header>
									<h2>Formulario</h2>
								</header>
								<form name="frmDatos" method="POST"  action="Cont.php" enctype="multipart/form-data" >
									<h3>Informcion Correta</h3>
                                             <div class="p1">
                                            	
                                            <?php 
			echo "nombres: ".$_SESSION['UserNames'];
			echo "<br><br>";
			echo "apellidos: ".$_SESSION['UserLastNames'];
		 ?>
		
		
   											  </div>

</form>

							</section>
						</div>
					</div>

				</div>	
			</div>

			<!-- Footer -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="3u">
							<section id="box1">
								<header>
									<h2>HOBBIES</h2>
								</header>
								<ul class="style3">
									<li class="first">
										<p class="date"><a href="#">10.03.2012</a></p>
										<p><a href="#">Vestibulum sem magna, elementum ut, vestibulum facilisis. Nulla facilisi. Cum sociis natoque penatibus.</a></p>
									</li>
									<li>
										<p class="date"><a href="#">10.03.2012</a></p>
										<p><a href="#">Pellentesque erat erat, tincidunt in, eleifend, malesuada bibendum. Suspendisse sit amet  in eros bibendum condimentum. </a> </p>
									</li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section id="box2">
								<header>
									<h2>Donec dictum metus</h2>
								</header>
								<div> <a href="#" class="image full"><img src="images/nike.jpg" alt=""></a> </div>
								<p>Nulla enim eros, porttitor eu, tempus id, varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc lectus vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl.</p>
							</section>
						</div>
						<div class="3u">
							<section id="box3">
								<header>
									<h2>Gravida ipsum</h2>
								</header>
								<ul class="style1">
									<div> <a href="#" class="image full"><img src="images/Bar.jpg" alt=""></a> </div>
									<li class="first"><a href="#">Pellentesque quis elit non lectus eleifend purus condimentum.</a></li>
									<li><a href="#">Lorem ipsum dolort, consectetuer adipiscing dictum metus sapien.</a></li>
									<li><a href="#">Phasellus nec dictum metus in sapien pellentesque congue.</a></li>
									<li><a href="#">Cras vitae metus aliquam risus dictum metus in sapien pharetra.</a></li>
									<li><a href="#">Duis non dictum metus in sapien ante in metus commodo euismod lobortis.</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>

			<!-- Copyright -->
			<div id="copyright">
				<div class="container">
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</div>
			</div>
			
		</div>
	</body>
</html>