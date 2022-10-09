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

<!DOCTYPE html>
<h1 class="span">PAGINA DE USUARIO</h1></div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">Usuario</a></li>
			 
	
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
		<h2>Eliminar internos</h2>
		<div class="row-fluid">
		
		<center> <input  class="btn btn-info" type="submit" onclick="location.href='index2.php'" name="submit" value="VOLVER"/></center>   
 

</div>
<?php

require("connect_db.php");
$sql=("SELECT * FROM internos INNER JOIN ubicacion on internos.idubicacion = ubicacion.id_ubicacion ");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

echo "<table border='1'; class='table table-hover';>";
echo "<tr class='warning'>";
// echo "<td>Id</td>";
echo "<td>Apynombre</td>";
echo "<td>DNI</td>";
echo "<td>Legajo</td>";
echo "<td>Ubicacion</td>";
echo "<td>Juzgado</td>";
echo "<td>Depto_judicial</td>";

 echo "<td>    </td>";

echo "</tr>"; 
?>
 <script type= "text/javascript">
                
				function ConfirmDelete()
                {
                    var respuesta = confirm ("Estas seguro que deseas Eliminar al interno?");
                    if (respuesta == true)
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
                </script>
			  

<?php 
while($arreglo=mysqli_fetch_array($query)){
echo "<tr class='success'>";
// echo "<td>$arreglo[0]</td>";
 echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[Ubicacion]</td>";
        echo "<td>$arreglo[4]</td>";
        echo "<td>$arreglo[5]</td>";
  

echo "<td><a href='eliminarinterno.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded' onclick='return ConfirmDelete()'/ ></a></td>";}
echo "</tr>";	
 
?>

		<?php
		extract($_GET);
		require("connect_db.php");
	     $sql=("SELECT * FROM internos");
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	// $id=$row[0];
		    	$Apynombre=$row[1];
                $Dni=$row[2];
		    	$Legajo=$row[3];
		    	$Procedencia=$row[4];
		    	$Juzgado=$row[5];
                $Depto_judicial=$row[6];
                $Causa=$row[7];
                $Delito=$row[8];
                $Pena=$row[9];
                $Vencimiento=$row[10];
                $huella=$row[11];
		    }

            extract($_GET);
            if(@$idborrar==2){

                $sqlborrar="DELETE FROM internos WHERE id=$id";
                $resborrar=mysqli_query($mysqli,$sqlborrar) ;
                
                echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                //header('Location: proyectos.php');
                echo "<script>location.href='eliminarinterno.php'</script>";
            }

		?>


		<div class="span8">
		
		</div>	
		</div>	
		<br/>

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