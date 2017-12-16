<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ApietTravel</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- CSS BOOTSTRAP -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<!-- STYLE APIETTRAVEL -->
		<link rel="stylesheet" href="css/apiettravel.css">
		<link rel="stylesheet" href="img/fonts.css">
		<!-- STYLE BAGUETTEBOX -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
		<!-- JS - SMOOTH SCROLL -->
		<script src="js/jquery-1.11.1.min.js"></script> 
		<script src="js/smooth-scroll.min.js"></script>
		<script src="js/apiettravel.js"></script>
		<script src="js/jquery.simpleWeather.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	</head>
	<body data-spy="scroll" data-target="#navbarSupportedContent">
		<!-- Boton Ir Arriba -->
		<span class="ir-arriba icon-arrow-up2"></span>	
		<header id="sec-inicio">
			<nav class="navbar navbar-expand-md fixed-top">
			  <a class="navbar-brand" href="http://localhost:8080/webapiettravel/index.php">
			  	<img src="img/apiettravel.png" width="30" height="30" class="d-inline-block align-top" alt="">
				ApietTravel
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="icon-menu" style="color:#fff"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a data-scroll class="nav-link" href="#sec-inicio">Inicio <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a data-scroll class="nav-link" href="#sec-mapa">Mapa</a>
			      </li>
			      <li class="nav-item">
			        <a data-scroll class="nav-link" href="#sec-lugares">Lugares</a>
			      </li>
			      <li class="nav-item">
			        <a data-scroll class="nav-link" href="#sec-galeria">Galería</a>
			      </li>
			      <li class="nav-item">
			        <a data-scroll class="nav-link" href="#sec-contacto">Contacto</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
			      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" style="color:#fff;">Buscar</button>
			    </form>
			  </div>
			</nav>
		</header>