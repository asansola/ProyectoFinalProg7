<?php
include ("IncluirClases.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">


<title>Prueba Restaurante</title>


<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/heroic-features.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../index.php">Inicio</a>
			</div>

			<!-- /.navbar-collapse -->
			<!-- Collect the nav links, forms, and other content for toggling -->

			
            <?php																		
												$menu = new MenuBLL ();
												$array = array ();
												$array = $menu->Listar ();
												$menu->Crear_Menu ( $array )									
			?>
			<!-- /.navbar-collapse -->
			
    <div class="clearfix visible-lg"></div>
  </div>
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">

		<!-- Jumbotron Header -->
		<header class="jumbotron hero-spacer">
			<h1>Bienvenido al Restaurante!</h1>
			<p>Estamos a sus �rdenes.</p>
			<p>
				<a class="btn btn-primary btn-large">Call to action!</a>
			</p>
		</header>

		<hr>

		<!-- Title -->
		<div class="row">
			<div class="col-lg-12">
				<h3>Men�</h3>
			</div>
		</div>
		<!-- /.row -->

		<!-- Page Features -->
		<div class="row text-center">

			<div class="col-md-3 col-sm-6 hero-feature">
				<div class="thumbnail">
					<img src="http://placehold.it/800x500" alt="">
					<div class="caption">
						<h3>Feature Label</h3>
						<p>Prueba.</p>
						<p>
							<a href="#" class="btn btn-primary">Buy Now!</a> <a href="#"
								class="btn btn-default">More Info</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 hero-feature">
				<div class="thumbnail">
					<img src="http://placehold.it/800x500" alt="">
					<div class="caption">
						<h3>Feature Label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p>
							<a href="#" class="btn btn-primary">Buy Now!</a> <a href="#"
								class="btn btn-default">More Info</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 hero-feature">
				<div class="thumbnail">
					<img src="http://placehold.it/800x500" alt="">
					<div class="caption">
						<h3>Feature Label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p>
							<a href="#" class="btn btn-primary">Buy Now!</a> <a href="#"
								class="btn btn-default">More Info</a>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 hero-feature">
				<div class="thumbnail">
					<img src="http://placehold.it/800x500" alt="">
					<div class="caption">
						<h3>Feature Label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<p>
							<a href="#" class="btn btn-primary">Buy Now!</a> <a href="#"
								class="btn btn-default">More Info</a>
						</p>
					</div>
				</div>
			</div>

		</div>
		<!-- /.row -->

		<hr>

		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Derechos Reservados &copy; Restaurante <?php date('Y')?></p>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.container -->

	<!-- jQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>

</body>

</html>
