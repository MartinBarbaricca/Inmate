<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index1.php");
}
?>	

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Inmate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->
  </head>
<body data-offset="40" background="images/fondo.png" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="index2.php">Usuario</a></li>
			 
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Sesion </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2> Administracion de internos registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edicion de internos</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM internos WHERE id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		        $id=$row[0];
		    	$Apynombre=$row[1];
                $Dni=$row[2];
                $Legajo=$row[3];
				$huella=$row[12];
		    }



		?>

		<form action="ejecutaactualizarinterno.php" method="POST" >
			 Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>  
				Apellido y Nombre<br> <input type="text" name="Apynombre" value="<?php echo $Apynombre?>"><br>
                Dni<br> <input type="number" name="Dni" value="<?php echo $Dni?>"><br>
                Legajo<br> <input type="number" name="Legajo" value="<?php echo $Legajo?>"><br>
			
				Huella<br> <input type="text" name="huella" value="<?php echo $huella?>" readonly="readonly"><br>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			 

				
			</form>
 
			
		
		
		<div class="span8">

		</div>	
		</div>	
		<input  class="btn btn-info" type="submit" onclick="location.href='index2.php'" name="submit" value="VOLVER"/> 



		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>

</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>







<!-- 
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto Inmate</title>
</head>
<body background="images/fondo.png" style="background-attachment: fixed" >
	<center> 
    <center>
    <h1><u>Alta de interno</u> </h1>
    </center>

    <form action="registra_interno.php" method="POST">
    <div>       
  
            <p>
            <label>APELLIDO Y NOMBRE</label>  <input type="text" name="Apynombre" placeholder="APELLIDO Y NOMBRE" required><br>
            <label>DNI</label>  <input type="number" name="Dni" placeholder="DNI" required><br>
            <label>LEGAJO</label>  <input type="number" name="Legajo" placeholder="LEGAJO" required><br>
            <label>PROCEDENCIA</label>  <input type="text" name="Procedencia" placeholder="PROCEDENCIA" required>
            <br>
            <br>
</div>     

            <h2>DATOS JUDICIALES</h2>
            <label>JUZGADO</label>  <input type="text" name="Juzgado" placeholder="JUZGADO"><br> 
            <label>DEPARTAMENTO JUDICIAL</label>  <input type="text" name="Depto_judicial" placeholder="DEPTO. JUDICIAL"><br> 
            <label>NUMERO DE CAUSA</label>  <input type="number" name="Causa" placeholder="NRO. CAUSA"><br> 
            <label>DELITO</label>  <input type="text" name="Delito" placeholder="DELITO"><br> 
            <label>CONDENA</label>  <input type="text" name="Pena" placeholder="CONDENA"><br> 
            <label>VENCIMIENTO CONDENA</label>  <input type="date" name="Vencimiento" placeholder="VENCIMIENTO">

            </p>
            <br> <input  class="btn btn-danger" type="submit" name="submit" value="Registrar">
         
            
            <br><br> <input type="button" value="Volver" onClick="history.go(-1);">      

</body>
</html> -->