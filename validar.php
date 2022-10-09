<?php



session_start();
	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];



	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM administrador WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['idrol']=$f2['idrol'];

			 echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['idrol']=$f['idrol'];

			echo '<script>alert("BIENVENIDO USUARIO")</script> ';
			echo "<script>location.href='index2.php'</script>";
		 

		}
	}

			$sql1=mysqli_query($mysqli,"SELECT * FROM director WHERE email='$username'");
			if($f1=mysqli_fetch_assoc($sql1)){
				if($pass==$f1['password']){
					$_SESSION['id']=$f1['id'];
					$_SESSION['user']=$f1['user'];
					$_SESSION['idrol']=$f1['idrol'];
		
						echo '<script>alert("BIENVENIDO DIRECTOR")</script> ';
			 
						echo "<script>location.href='index3.php'</script>";


		} else if($pass!=$f1['password']){
			echo '<script>alert("INGRESO INCORRECTO, INTENTE NUEVAMENTE ")</script> ';
		
		echo "<script>location.href='index1.php'</script>";	
		}
}
else{
		
		echo '<script>alert("INGRESO INCORRECTO, INTENTE NUEVAMENTE ")</script> ';
		
		echo "<script>location.href='index1.php'</script>";	

	}
?>