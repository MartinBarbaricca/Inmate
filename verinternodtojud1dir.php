<!DOCTYPE html>

	<?php
	session_start();
	 if (@!$_SESSION['user']) {
	 	header("Location:index1.php");
	 }elseif ($_SESSION['idrol']==1) {
	 	header("Location:index2.php");
	 }
	 ?>
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
    <center>
    <h1><u>Busqueda de Internos</u> </h1>
    </center>

    
       <br>
       <br>
    </div>
         
   
    <center> <input  class="btn btn-info" type="submit" onclick="location.href='verinternodtojuddir.php'" name="submit" value="VOLVER"/> 
    <button onClick="window.print()">IMPRIMIR</button></center>  
    <br>
    <br>
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

$recibir =$_POST['buscar'];

  if ($recibir != "") {
$sql=("SELECT * FROM internos INNER JOIN delito on internos.idDelito=delito.id_delito INNER JOIN ubicacion on internos.idubicacion=ubicacion.id_ubicacion  WHERE internos.Depto_judicial LIKE '%$recibir%'order by internos.Apynombre");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);


     
       
     
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
}
else
 
{
    echo'<script language="javascript">alert(" El usuario no se encuentra en la base de datos...");
  location.href="verinterno.php";
  </script> ';

}


?>

</div>	


</body>
</html>