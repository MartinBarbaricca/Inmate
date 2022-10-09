<?php
 

if (session_status() == PHP_SESSION_NONE) {
  
session_start();
 if (@!$_SESSION['user']) {
     header("Location:index1.php");
 }elseif ($_SESSION['idrol']==1) {
     header("Location:index2.php");
 }
}
 ?>

<?php

	$realname=$_POST['realname'];
	$Legajo=$_POST['Legajo'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$realname','$Legajo','$pass','$mail','2')");
				//echo 'Se ha registrado con exito';admin@gmail.com
				echo ' <script language="javascript">alert("Usuario registrado con Exito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>