<?php


		$mysqli = new mysqli("localhost", "root","", "inmate");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexion a MySQL: (" . $mysqli -> mysqli -> connect_errno () 
				. ") " . $mysqli -> mysqli_connect_error);
    
                
		}
		else
			//echo "Conexion exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>