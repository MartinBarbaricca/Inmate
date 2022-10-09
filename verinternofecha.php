 
<!DOCTYPE html>




<?php
session_start();
 if (@!$_SESSION['user']) {
     header("Location:index1.php");
 }elseif ($_SESSION['idrol']==1) {
     header("Location:index2.php");
 }
 ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>

<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>
</head> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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
    <h1><u>Busqueda de interno</u> </h1>
    </center>



    
<center><form class="w3-container w3- blue" action="verinternofecha1.php" method="POST">
  <input class="w3-input w3-border w3-round" name="buscar" placeholder="Buscar..Ingrese fecha inicio" type="date"required><br>
<br>  
  <input class="w3-input w3-border w3-round" name="buscar1" placeholder="Buscar..Ingrese fecha fin" type="date"required><br>

  <p>
  <input class="btn btn-danger " name="ir" type="submit" value="Buscar"></p>
</form></center>


<center> <input  class="btn btn-info" type="submit" onclick="location.href='busca.php'" name="submit" value="VOLVER"/></center>   
<div class="w3-container">
	<h2>INTERNOS</h2>
  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-blue">
       
        <th>Apellido y Nombre</th>
        <th>DNI</th>
        <th>LEGAJO</th> 
        <th>UBICACION</th> 
        <th>JUZGADO</th> 
        <th>DEPTO JUD</th>
        <th>CAUSA</th>
        <th>DELITO</th> 
        <th>PENA</th> 
        <th>VENCIMIENTO</th> 
      
         
<?php
require("connect_db.php");
$sql=("SELECT * FROM internos INNER JOIN delito on internos.idDelito=delito.id_delito INNER JOIN ubicacion on internos.idubicacion = ubicacion.id_ubicacion");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

?>

<?php 

 while($arreglo=mysqli_fetch_array($query)){
      echo "<tr class='success'>";
        
          echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[Ubicacion]</td>";
        echo "<td>$arreglo[4]</td>";
        echo "<td>$arreglo[5]</td>";
        echo "<td>$arreglo[6]</td>";
        echo "<td>$arreglo[Delito]</td>";
        echo "<td>$arreglo[7]</td>";
        echo "<td>$arreglo[8]</td>";

}
?>