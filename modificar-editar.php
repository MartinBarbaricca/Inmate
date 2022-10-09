<!DOCTYPE html>

	<?php
	session_start();
	 if (@!$_SESSION['user']) {
	 	header("Location:index1.php");
	 }elseif ($_SESSION['rol']==1) {
	 	header("Location:index2.php");
	 }
	 ?>
<?php
require ("connect_db.php");

if (isset($_POST['editar'])) {
	$id = $_POST['id'];
	$Apynombre = $_POST['Apynombre'];
	$Dni = $_POST['Dni'];
	$Legajo = $_POST['Legajo'];
	$Ubicacion = $_POST['Ubicacion'];
	$Juzgado = $_POST['Juzgado'];
	$Depto_judicial = $_POST['Depto_judicial'];
	$Causa = $_POST['Causa'];
	$Delito= $_POST['Delito'];
	$Pena= $_POST['Pena'];
    $Vencimiento= $_POST['Vencimiento'];
    $huella= $_POST['huella'];


$sql = "UPDATE internos SET Apynombre='$Apynombre', Dni='$Dni', Legajo='$Legajo', Ubicacion='$Ubicacion', Juzgado='$Juzgado', Depto_judicial='$Depto_judicial', Causa='$Causa', Delito='$Delito', Pena='$Pena', Vencimiento='$Vencimiento', huella='$huella' WHERE id='$id'"; 

if ($mysqli-> query($sql)=== true) {
	 
	 ?>
<script type="text/javascript">
	// alert("<?php echo $Apynombre;?> se edito correctamente");
	window.location.href="actualizarinterno2.php";
</script>
	 <?php
}else {
	die ("Error al editar");
}
}
?>


