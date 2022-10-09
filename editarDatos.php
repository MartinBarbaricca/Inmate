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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

		$sql="SELECT * FROM internos INNER JOIN delito on internos.idDelito = delito.id_delito INNER JOIN ubicacion on internos.idubicacion = ubicacion.id_ubicacion WHERE internos.id=$id";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		       $id=$row[0];
		    	$Apynombre=$row[1];
                $Dni=$row[2];
		    	$Legajo=$row[3];
		    	$Ubicacion=$row[13];
		    	$Juzgado=$row[4];
                $Depto_judicial=$row[5];
                $Causa=$row[6];
                $Delito=$row[ 11];
                $Pena=$row[7];
                $Vencimiento=$row[8];
		    }

/*$sql1="SELECT * FROM internos INNER JOIN delito on internos.idDelito = delito.id_delito INNER JOIN ubicacion on internos.idubicacion = ubicacion.id_ubicacion INNER JOIN historial on historial.idint = ubicacion.id_ubicacion WHERE internos.id=$id";
$ressql1=mysqli_query($mysqli,$sql1);
		while ($row=mysqli_fetch_row ($ressql1)){
		      
		}*/
		?>

		<form action="ejecutaactualizarinterno1.php" method="POST" >
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>  
				Apellido y Nombre<br> <input type="text" name="Apynombre" value="<?php echo $Apynombre?>"><br>
                Dni<br> <input type="number" name="Dni" value="<?php echo $Dni?>"><br>
                Legajo<br> <input type="number" name="Legajo" value="<?php echo $Legajo?>"><br>
			Ubicacion<br> <input type="text" name="Ubicacion" value="<?php echo $Ubicacion?>"><br>
   <?php

   require("connect_db.php");
$sql=("SELECT * FROM ubicacion");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

echo "<table border='1'; class=' ';>";
    echo "<tr class='warning'>";
     
        echo "<td>Codigo</td>";
        echo "<td>Ubicacion</td>";
     
    
       
     
    echo "</tr>";
     
 
 while($arreglo=mysqli_fetch_array($query)){
      echo "<tr class='success'>";
        
         echo "<td>$arreglo[0]</td>";
        echo "<td>$arreglo[1]</td>";
    
      

}
 
?>

<TABLE BORDER>
 
	 

</TABLE>



    
      
 


				
				Juzgado<br> <input type="text" name="Juzgado" value="<?php echo $Juzgado?>"><br>
				
				Depto_judicial<br> <input type="text" name="Depto_judicial" value="<?php echo $Depto_judicial?>"><br>
				Causa<br> <input type="text" name="Causa" value="<?php echo $Causa?>"><br>
                Delito<br> <input type="text" name="Delito" value= "<?php echo $Delito?>" ><br>

 <?php

   require("connect_db.php");
$sql=("SELECT * FROM delito");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

echo "<table border='1'; class=' ';>";
    echo "<tr class='warning'>";
     
        echo "<td>Codigo</td>";
        echo "<td>delito</td>";
     
    
       
     
    echo "</tr>";
     
 
 while($arreglo=mysqli_fetch_array($query)){
      echo "<tr class='success'>";
        
         echo "<td>$arreglo[0]</td>";
        echo "<td>$arreglo[1]</td>";
    
      

}
 
?>

<TABLE BORDER>
 
	 

</TABLE>

                Pena<br> <input type="text" name="Pena" value="<?php echo $Pena?>"><br>
                Vencimiento<br> <input type="text" name="Vencimiento" value="<?php echo $Vencimiento?>"><br>
			

				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
				
			</form>
 
				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<input  class="btn btn-info" type="submit" onclick="location.href='actualizarinterno.php'" name="submit" value="VOLVER"/> 

 





		
		
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
