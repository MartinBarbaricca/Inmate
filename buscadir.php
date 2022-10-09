<!DOCTYPE html>

	<?php
	session_start();
	 if (@!$_SESSION['user']) {
	 	header("Location:index3.php");
	 }elseif ($_SESSION['idrol']==1) {
	 	header("Location:admin.php");
	 }else
     if($_SESSION['idrol']==2){
        header("Location:index2.php");
     }
	 ?>
 <!DOCTYPE html>
<html>
<head>

<title>Proyecto Inmate</title>
</head>
<body background="images/fondo.png" style="background-attachment: fixed" >
<center>
    <h1><u>Busqueda de interno</u> </h1>
    </center>
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

<div class="container">

  <div style="text-align: left" class="dropdown">
     <center><button class="btn btn-danger dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Seleccione el tipo de busqueda
    <span class="caret"></span></button>  <input  class="btn btn-sucess" type="button" style="text-align: left" onclick="location.href='index3.php'" name="submit" value="VOLVER"/>   

    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" onclick="location.href='verinternodir.php'">Busqueda por Nombre</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" onclick="location.href='verinternoubdir.php'">Busqueda por ubicacion</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" onclick="location.href='verinternojuzdir.php'">Busqueda por Juzgado</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" onclick="location.href='verinternodtojuddir.php'">Busqueda por Dto Judicial</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" onclick="location.href='verinternodelitodir.php'">Busqueda por delito</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" onclick="location.href='verinternofechadir.php'">Busqueda por fecha de vencimiento</a></li>



        
    </ul></center>
  </div>
 
</div>



</body>
</html>

 


