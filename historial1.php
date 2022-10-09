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
    <h1><u>Busqueda Historial Interno</u> </h1>
    </center>

    
       <br>
       <br>
    </div>
         
   
    <center> <input  class="btn btn-info" type="submit" onclick="location.href='historial.php'" name="submit" value="VOLVER"/>   
    <input class="printbutton" type="submit" name="submit" alt="imprimir"  value="IMPRIMIR" >  </center>

    <br>
    <br>
    <script>
        document.querySelectorAll('.printbutton').forEach(function(element) {
            element.addEventListener('click', function() {
                print();
            });
        });
    </script> 


            <?php

require("connect_db.php");

$recibir =$_POST['buscar'];

  if ($recibir != "") {
$sql=("SELECT * FROM historial  INNER JOIN ubicacion on historial.idubicacion = ubicacion.id_ubicacion INNER JOIN internos on historial.idint=internos.id WHERE Apynombre LIKE '%$recibir%' order by Fechamov");

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
 while($arreglo=mysqli_fetch_array($query)){
      echo "<tr class='success'>";
        
      echo "<td>$arreglo[Apynombre]</td>";
         echo "<td>$arreglo[Legajo]</td>"; 
         
         
           echo "<td>$arreglo[Ubicacion]</td>";
         
        echo "<td>$arreglo[3]</td>";

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