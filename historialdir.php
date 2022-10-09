 
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>


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
    <h1><u>HISTORIAL DE MOVIMIENTOS</u> </h1>
    </center>

   
<center><form class="w3-container w3- blue" action="historial1.php" method="POST">

  <input class="w3-input w3-border w3-round" name="buscar" placeholder="Buscar..Ingrese al menos 3 letras" type="search-content-box"required><br>
  <p>
  <input class="btn btn-danger " name="ir" type="submit" value="Buscar"></p>
</form></center>
<center> <input  class="btn btn-info" type="submit" onclick="location.href=' verlistado.php'" name="submit" value="VOLVER"/> 
<input class="printbutton" type="submit" name="submit" alt="imprimir"  value="IMPRIMIR" >  </center>  
<div class="w3-container">
    <h2>HISTORIAL</h2>
  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-blue">
    




            <?php

require("connect_db.php");
$sql=("SELECT * FROM historial  INNER JOIN ubicacion on historial.idubicacion = ubicacion.id_ubicacion INNER JOIN internos on historial.idint=internos.id order by Fechamov ");
 
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);
 
echo "<table border='1'; class='table table-hover';>";
    echo "<tr class='warning'>";
     
        echo "<td>Interno</td>";
    
        echo "<td>Legajo</td>";
        echo "<td>Ubicacion</td>";
       
     
        echo "<td>Fecha</td>";
       
     
    echo "</tr>";
 
 
?>
 
 
<?php 
 while($arreglo=mysqli_fetch_array($query)  ){
      echo "<tr class='success'>";

         echo " <td>$arreglo[Apynombre]</td> ";
         echo "<td>$arreglo[Legajo]</td>"; 
         
         
           echo "<td>$arreglo[Ubicacion]</td>";
         
        echo "<td>$arreglo[3]</td>";

        
       
}
 
?>