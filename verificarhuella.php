
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
    <title>Huella</title>

 <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>   -->
</head>


<title>INTERNOS</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
<body>


<body>
    <center><h2>VERIFICACION DE HUELLA DACTILAR</h2></center>

<form class="w3-input w3-border w3-round" action="buscahuella.php" method="POST">
  <input class="w3-input w3-border w3-round" name="buscar" placeholder="Huella" type="text">
  <p>
  <input class="w3-btn w3-blue" name="ir" type="submit" value="Verificar"></p>
</form>
<center> <input  class="w3-btn w3-blue" type="submit" onclick="location.href='huella.php'" name="submit" value="VOLVER"/></center>   



<div class="w3-container">
	<h2>INTERNOS</h2>
  <table class="w3-table-all w3-hoverable">
    <thead>
      <tr class="w3-blue">
         <!-- <th>Id </th>   -->
        <th>Apellido y Nombre</th>
      
        <th>LEGAJO</th> 
        <th>UBICACION</th> 
        <th>JUZGADO</th> 
        <th>DEPTO JUD</th>
        <th>CAUSA</th>
        <th>DELITO</th> 
        <th>PENA</th> 
        <th>VENCIMIENTO</th> 
        <th>NOMBRE DEDO</th> 
        <th>HUELLA DACTILAR</th> 
        <?php
$inc = include("connect_db.php");
if ($inc) {
 $consulta=("SELECT * FROM internos INNER join delito on internos.idDelito = delito.id_delito INNER Join nombrededo on internos.idNombrededo = nombrededo.id_nombrededo INNER JOIN ubicacion on internos.idubicacion = ubicacion.id_ubicacion");
  $resultado = mysqli_query($mysqli,$consulta);
  if ($resultado) {
    while ($row = $resultado->fetch_array()) {
      // $id = $row['id'];
      $Apynombre = $row['Apynombre'];
      ;
      $Legajo = $row['Legajo'];
      $Ubicacion = $row['Ubicacion'];
      $Juzgado = $row['Juzgado'];
      $Depto_judicial = $row['Depto_judicial'];
      $Causa = $row['Causa'];
      $Delito = $row['Delito'];
      $Pena = $row['Pena'];
      $Vencimiento = $row['Vencimiento'];
      $NombreDedo = $row['nombreDedo'];
      $huella = $row['huella'];
      ?>

    <tr>
      <!-- <td><?php echo strtoupper($id); ?></td> -->
      <td><?php echo strtoupper($Apynombre); ?></td>
       <td><?php echo strtoupper($Legajo); ?></td>
      <td><?php echo strtoupper($Ubicacion); ?></td>
      <td><?php echo strtoupper($Juzgado); ?></td>
      <td><?php echo strtoupper($Depto_judicial); ?></td>
      <td><?php echo strtoupper($Causa); ?></td>
      <td><?php echo strtoupper($Delito); ?></td>
      <td><?php echo strtoupper($Pena); ?></td>
      <td><?php echo strtoupper($Vencimiento); ?></td>
      <td><?php echo strtoupper($NombreDedo); ?></td>
      <td><?php echo strtoupper($huella); ?></td>

      </div>
 </body>

      <?php
      }
    }
  }
?>
