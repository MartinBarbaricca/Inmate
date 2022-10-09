<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index1.php");
	}elseif ($_SESSION['idrol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
 <title>Proyecto Inmate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
	<body background="images/fondo.png" style="background-attachment: fixed" >

    <br>
    <br>
    <br>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilos.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
</head>
<body>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">


<!DOCTYPE html>
<h1 class="span">PAGINA DE USUARIO</h1></div>
</header>

  <!-- Navbar
    ================================================== -->
    <!DOCTYPE html>

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="index2.php">Principal</a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
				<li><a href="">Bienvenido!!! </a></li>
			  <li><a href="desconectar.php"> Cerrar Sesion </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
<!-- ======================================================================================================================== -->

 <div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/alta de internos.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Alta de internos</h4>
				  <p>
				  Permite dar de alta o cargar un interno que ingrese a la Unidad Penal.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/modificacion.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				<h4>Modificacion de interno</h4>
				  <p>
				   Modificacion de datos del interno dado de alta en el sistema.
				  
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/eliminacion.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Eliminacion de interno</h4>
				  <p>
				  Eliminacion de datos de interno registrado en el sistema.
				  </p>
			</div>
		  </div>

		  <div class="item">
			<img src="images/ver.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Listado de interno</h4>
				  <p>
				  Busqueda de internos.
				  </p>
			</div>
		  </div>

		  <div class="item">
			<img src="images/verificar.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Verificar huella digital</h4>
				  <p>
				  Verificacion de huellas digitales.
				  </p>
			</div>
		  </div>

		  <!-- <div class="item">
			<img src="images/renaper.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Cotejar huella digital con Renaper (Registro Nacional de las Personas)</h4>
				  <p>
				  Coteja huellas digitales de los internos registrados en el sitema con el Renaper.
				  </p>
			</div>
		  </div> -->


		  <div class="item">
			<img src="images/listado2.png" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Ver listado de internos</h4>
				  <p>
				  Listado de internos registrados en el sistema.
				  </p>
			</div>
		  </div>



		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"> <img src="images/izq.jpg"></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"> <img src="images/der.png"></a>
</div> 

<h3>Registro de Internos</h3>
<div class="row" style="text-align:center">
 
			<div class="span3">
				<div class="well well-small">
					<h4>Alta de internos</h4>
					<a href="crear_interno.php"><small>Ingresar</small></a>
				</div>
			</div>
			
			<div class="span2.25 ">
				<div class="well well-small">
					<h4>Modificacion de internos</h4>
					<a href="actualizarinterno.php"><small>Ingresar</small></a>
				</div>
			</div>
			<div class="span2.25">
				<div class="well well-small">
					<h4>Eliminacion de internos</h4>
					<a href="eliminarinterno.php"><small>Ingresar</small></a>
				</div>
			</div>
			<div class="span2.25">
				<div class="well well-small">
					<h4>Busqueda de internos</h4>
					<a href="busca.php"><small>Ingresar</small></a>
				</div>
			</div>
			<div class="span2.25">
				<div class="well well-small">
					<h4>Huella digital</h4><br>
					<a href="huella.php"><small>Ingresar</small></a>
				</div>
			</div>
			<!-- <div class="span2">
				<div class="well well-small">
					<h4>Cotejar huella con Renaper</h4>
					<a href="renaperpagina.php"><small>Ingresar</small></a>
				</div>
			</div> -->

 
	
		 <div class="span12">
				<div class="well well-small">
					<h4 >Ver Listado de internos</h4>
					<a href="verlistado.php"><small>Ingresar</small></a>
				</div>
			</div>
		
			
			
 </div>
		
	</div>
	</div>
	
	
    
	</style>
  </body>
</html>