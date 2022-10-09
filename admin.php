<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index1.php");
}elseif ($_SESSION['idrol']==2) {
	header("Location:index2.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- <link rel="shortcut icon" href="assets/ico/favicon.ico"> 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png"> -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
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

  

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR</a></li>
			 
	
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
		<h2> Administracion de usuarios registrados</h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
		
			<?php

				require("connect_db.php");
				$sql=("SELECT * FROM login INNER JOIN rol on login.idrol = rol.id");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usuario</td>";
						echo "<td>Legajo</td>";
						echo "<td>Password</td>";
						echo "<td>Correo</td>";
						echo "<td>Rol</td>";
						echo "<td>Editar</td>";
						echo "<td>Eliminar</td>";
					echo "</tr>"; 
			?>
            <script type= "text/javascript">
                
				function ConfirmDelete()
                {
                    var respuesta = confirm ("Estas seguro que deseas Eliminar al usuario?");
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
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
						echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[tipo]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded' onclick='return ConfirmDelete()'/ ></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM login  WHERE  id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar) ;
                        
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
		</div>	
		<br/>
			<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registrar usuario</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingrese nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingrese nombre" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt"><b>Ingrese Legajo</b></label>
      <input type="number" name="Legajo" class="form-control" placeholder="Ingrese Legajo" />
    </div>

    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingrese email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingrese mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingrese contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingrese contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repita contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repita contraseña" />
    </div>
       <input  class="btn btn-danger" type="submit" name="submit" value="Registrar usuario"/>
    </div>
   
   

  </fieldset>
</form>

</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->
		</div>


	
	

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>