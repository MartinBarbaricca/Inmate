<?php 
    session_start();
    $error = '';
    if (isset($_GET['e']) && $_GET['e']==1) {
        $error = "<br><p>Error de sesiÃ³n.</p>";
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <link href="estilob.css" rel="stylesheet" type="text/css" text-align="center">

	<title>Login</title>	
</head>
<body> 	
<h3><a href="index.html"><FONT COLOR="white">Volver </FONT></a> </h3>  

<?php echo $error; ?>
    <form action="control.php" method="post">
	  <p>
	    <input type="text" name="user"  placeholder="Usuario" required>
	  </p>
	  <p>
	    <input type="password" name="pass"  placeholder="ContraseÃ±a" required>
    </p>
		<input type="submit" name="login" value="Ingresar">
    </form>
    <br>
  
</body>
</html>