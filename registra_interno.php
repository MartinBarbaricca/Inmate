
    <?php
    include("connect_db.php");
 
    $Apynombre= $_POST['Apynombre'];
    $Dni= $_POST['Dni'];
    $Legajo= $_POST['Legajo'];
    $Ubicacion= $_POST['ubicacion'];
    $Juzgado= $_POST['Juzgado'];
    $Depto_judicial= $_POST['Depto_judicial'];
    $Causa= $_POST['Causa'];
    $Pena= $_POST['Pena'];
    $Vencimiento= $_POST['Vencimiento'];
    $Fecha= $_POST['Fecha'];
    $huella= $_POST['huella'];
    $delito= $_POST['delito'];
    $nombrededo= $_POST['nombrededo'];


/*echo("$Apynombre"); 
echo("$Dni"); 
echo("$Legajo");
echo("$Ubicacion");
echo("$Juzgado");
echo("$Depto_judicial");
echo("$Causa");
echo("$Pena");
echo("$Vencimiento");
echo("$Fecha");
echo("$huella");
echo("$delito");
echo("$nombrededo");*/




     require("connect_db.php");
                
                
        $query=mysqli_prepare($mysqli,"INSERT INTO internos (Apynombre,Dni,Legajo,idubicacion,Juzgado,Depto_judicial,Causa,Pena,Vencimiento,Fecha,huella,idDelito,idNombrededo)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
 
    if ($query) {
        mysqli_stmt_bind_param($query,'siissssssssii',$Apynombre,$Dni,$Legajo,$Ubicacion,$Juzgado,$Depto_judicial,$Causa,$Pena,$Vencimiento,$Fecha,$huella,$delito,$nombrededo);              
                        mysqli_stmt_execute($query);            
                    } else {
                        die("<pre>".mysqli_error($mysqli).PHP_EOL.$query."</pre>");
                    }

         if(mysqli_error($mysqli)){}else { '<script>alert( "INTERNO CARGADO CON EXITO")</script>' ;}




  $query=mysqli_prepare($mysqli,"INSERT INTO historial (idint,idubicacion) SELECT id, idubicacion FROM internos");
 
     mysqli_stmt_execute($query);    

  echo '<script>alert("INTERNO CARGADO CON EXITO")</script> ';
  echo "<script>location.href='crear_interno.php'</script>";
 
?>

     
 
    

 


