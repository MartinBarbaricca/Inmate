 
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
    <h1><u>HISTORIAL DE MOVIMIENTOS POR UBICACION</u> </h1>
    </center>
<br> <br>
    
<div class="container">

<div class = "row">
<form  action="historialubic1.php" method="POST" >

  <input class="w3-input w3-border w3-round" name="buscar" placeholder="Buscar..Ingrese al menos 3 letras" type="search-content-box"required><br>
     <center>
        <p><input class="btn btn-danger " name="ir" type="submit" value="Buscar"></p></center>
</form>


<center> <input  class="btn btn-info" type="submit" onclick="location.href=' verlistado.php'" name="submit" value="VOLVER"/> 
<input class="printbutton" type="submit" name="submit" alt="imprimir"  value="IMPRIMIR" >  </center>  
</div>
</div>

	


<script>
        document.querySelectorAll('.printbutton').forEach(function(element) {
            element.addEventListener('click', function() {
                print();
            });
        });
    </script> 



  
    <div class="container">

    <div class = "row">
        <div class = "col">
        <h2>HISTORIAL POR UBICACION</h2>
    <center><table class="w3-table-all w3-hoverable">
        
        <thead>
         <tr class="w3-blue">
       
            <th>Apellido y Nombre</th>
            <th>LEGAJO</th> 
            <th>UBICACION</th> 
            <th>FECHA</th> 
         
<?php
require("connect_db.php");
$sql=("SELECT * FROM historial  INNER JOIN ubicacion on historial.idubicacion = ubicacion.id_ubicacion INNER JOIN internos on historial.idint=internos.id order by Fechamov ");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);
  
?>
</thead>
<tbody>
<?php 
 while($arreglo=mysqli_fetch_array($query)){
      echo "<tr class='success'>";
        
       echo "<td>$arreglo[Apynombre]</td>";
         echo "<td>$arreglo[Legajo]</td>"; 
         
         
           echo "<td>$arreglo[Ubicacion]</td>";
         
        echo "<td>$arreglo[3]</td>";

}
?>
</div>
</div>
</div>
</tbody>
</table></center>
</html>