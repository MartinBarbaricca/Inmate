 
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huella</title>

 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>  
</head>

<?php
session_start();
 if (@!$_SESSION['user']) {
     header("Location:index1.php");
 }elseif ($_SESSION['idrol']==1) {
     header("Location:index2.php");
 }
 ?>

<!DOCTYPE html>
<html>
<head>

  <!-- <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">   -->
<title>Proyecto Inmate</title>
</head>
<body background="images/fondo.png" style="background-attachment: fixed" >
<center>
    <h1><u>SELECCIONE LA OPCION DESEADA</u> </h1>
    </center>
<br>
<br>
<center> <input  class="btn btn-info" type="submit" onclick="location.href='index2.php'" name="submit" value="VOLVER"/></center>   
<br>
<br>
 
<center><td><a href='verificarhuella.php'><br><img src='images/huella.png' class='img-rounded' style='width:200px; height:200px' ></a></td></center>

 

 </body></html>