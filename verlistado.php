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
    <h1><u>Listado de Internos</u> </h1>
    </center>

    
       <br>
       <br>
    </div>
         
   
    <center> <input  class="btn btn-info" type="submit" onclick="location.href='index2.php'" name="submit" value="VOLVER"/></center>   
    <br>
    <br>


            <?php

require("connect_db.php");
$sql=("SELECT * FROM internos INNER JOIN delito on internos.idDelito=delito.id_delito INNER JOIN ubicacion on internos.idubicacion = ubicacion.id_ubicacion");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

echo "<table border='1'; class='table table-hover';>";
    echo "<tr class='warning'>";
     
        echo "<td>Interno</td>";
        echo "<td>Dni</td>";
        echo "<td>Legajo</td>";
        echo "<td>Ubicacion</td>";
        echo "<td>Juzgado</td>";
        echo "<td>Depto Judicial</td>";
        echo "<td>Causa</td>";
        echo "<td>Delito</td>";
        echo "<td>Pena</td>";
        echo "<td>Vencimiento</td>";
        // echo "<td>huella</td>";
       
     
    echo "</tr>";
     
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

</div>	
<center>     <input class="printbutton" type="submit" name="submit" alt="imprimir"  value="IMPRIMIR" >  <input  class="btn btn-danger" type="submit" onclick="location.href='historial.php'" name="submit" value="HISTORIAL"/> 
 
</center>   
 
<br><br>

<script>
        document.querySelectorAll('.printbutton').forEach(function(element) {
            element.addEventListener('click', function() {
                print();
            });
        });
    </script> 


</body>

</html>
