<!DOCTYPE html>

	<?php
	session_start();
    if (@!$_SESSION['user']) {
        header("Location:index3.php");
    }elseif ($_SESSION['idrol']==1) {
        header("Location:admin.php");
    }else
    if($_SESSION['rol']==2){
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
    <h1><u>Busqueda Historial Interno</u> </h1>
    </center>

    
       <br>
       <br>
    </div>
         
   
    <center> <input  class="btn btn-info" type="submit" onclick="location.href='historialdir.php'" name="submit" value="VOLVER"/></center>   
    <input  class="btn btn-danger" type="submit" onclick="location.href='historialdir.php'" name="submit" value="HISTORIAL" /> <input  class="btn btn-danger" type="submit" onclick="location.href='historialimp.php'" name="submit" value="IMPRIMIR" >   

    <br>
    <br>


            <?php

require("connect_db.php");

$recibir =$_POST['buscar'];

  if ($recibir != "") {
$sql=("SELECT * FROM historial WHERE Apynombre LIKE '%$recibir%' order by Fecha");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

echo "<table border='1'; class='table table-hover';>";
    echo "<tr class='warning'>";
     
        echo "<td>Interno</td>";
        echo "<td>Dni</td>";
        echo "<td>Legajo</td>";
        echo "<td>Procedencia</td>";
        echo "<td>Juzgado</td>";
        echo "<td>Depto Judicial</td>";
        echo "<td>Causa</td>";
        echo "<td>Delito</td>";
        echo "<td>Pena</td>";
        echo "<td>Vencimiento</td>";
         echo "<td>Fecha</td>";
       
     
    echo "</tr>";
     
?>


<?php 
 while($arreglo=mysqli_fetch_array($query)){
      echo "<tr class='success'>";
        
        echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[4]</td>";
        echo "<td>$arreglo[5]</td>";
        echo "<td>$arreglo[6]</td>";
        echo "<td>$arreglo[7]</td>";
        echo "<td>$arreglo[8]</td>";
        echo "<td>$arreglo[9]</td>";
        echo "<td>$arreglo[10]</td>";
         echo "<td>$arreglo[11]</td>";
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