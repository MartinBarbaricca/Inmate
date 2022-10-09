<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index1.php");
}
?>	

<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");

	$sentencia="update internos set Apynombre='$Apynombre', Dni='$Dni', Legajo='$Legajo', idubicacion='$Ubicacion', Juzgado='$Juzgado', Depto_judicial='$Depto_judicial',Causa='$Causa',idDelito='$Delito',Pena='$Pena', Vencimiento='$Vencimiento' where id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	  $insert_new_inc = mysqli_prepare($mysqli," INSERT INTO historial(idint,idubicacion) VALUES (?, ?) ");
    mysqli_stmt_bind_param($insert_new_inc, 'ii',$id,$Ubicacion);
    mysqli_stmt_execute($insert_new_inc);


	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: actualizarinterno.php");
		
		echo "<script>location.href='actualizarinterno.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		
		echo "<script>location.href='actualizarinterno.php'</script>";

	}
	
 
?>