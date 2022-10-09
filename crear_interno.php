 


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
    <title>Proyecto Inmate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>  

     <!-- <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> --> 
  </head>
<body background="images/fondo.png" style="background-attachment: fixed" >
     
   
    <body data-offset="40" background="images/fondo.png" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
           
           
           
<?php 

//Método con str_shuffle() 
function generateRandomString($length = 900) { 
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
} 
?>





</div>
</header>  <br><br>

  <!-- Navbar
    ================================================== -->
  

  <div class="navbar"> 
  <div class="navbar-inner">  
    <div class="container">
      <div class="nav-collapse">  
          <ul class="nav">  
            <li class=""><a href="index2.php">Usuario</a></li>
             
    
        </ul>
        <form action="#" class="navbar-search form-inline" style="margin-top:6px">
        
        </form>
        <ul class="nav pull-right">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
              <li><a href="desconectar.php"> Cerrar Sesion </a></li>             
        </ul>
      </div><!-- /.nav-collapse -->
    </div>
  </div><!-- /navbar-inner -->
</div>
<center>
<div class="row">
    
    
        
    <div class="span12">

       <div class="caption">  
        
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
        <h2> Administracion de internos registrados</h2>    
          <div class="well well-small"> 
      <hr class="soft"/>  
     
    <h1><u>Alta de interno</u> </h1>
   
    <form action="registra_interno.php" method="POST">
    <div>       
  
            <p>
            <label>APELLIDO Y NOMBRE</label>  <input type="text" name="Apynombre" placeholder="APELLIDO Y NOMBRE" required><br>
            <label>DNI</label>  <input type="number" name="Dni" placeholder="DNI" required><br>
            <label>LEGAJO</label>  <input type="number" name="Legajo" placeholder="LEGAJO" required><br>
           
            <br>
            <br>
     

            <h2>DATOS JUDICIALES</h2>


            <label>UBICACION</label>  
             <?php
             require("connect_db.php");
             $query1= mysqli_query($mysqli,"SELECT Ubicacion FROM ubicacion");
             ?>
                <select name="ubicacion" id="ubicacion">
                     <option value="0" > Ubicacion</option>
                    <?php
                        $SQL="SELECT * from ubicacion";
                        $bubicacion=$mysqli->query($SQL);
                        while($fila=$bubicacion->fetch_array()){
                            echo "<option value='".$fila['id_ubicacion']."'>" .$fila['Ubicacion']."</option>";
                        }
                ?>         
                </select> 
            <!--<input type="text" name="Ubicacion" placeholder="UBICACION" required>-->
 <?php
            date_default_timezone_set('America/Buenos_Aires');
            $fecha_actual=date("d-m-y H:i:s");
            ?>
            <label> FECHA </label>  <input type="datetime" name="Fecha" placeholder="YYYY-MM-DD" value= "<?php echo $fecha_actual?>">

            <label>JUZGADO</label>  <input type="text" name="Juzgado" placeholder="JUZGADO"><br> 
            <label>DEPARTAMENTO JUDICIAL</label>  <input type="text" name="Depto_judicial" placeholder="DEPTO. JUDICIAL" required><br> 
            <label>NUMERO DE CAUSA</label>  <input type="number" name="Causa" placeholder="NRO. CAUSA" required><br> 
             
            <label> CONDENA </label>  <input type="text" name="Pena" placeholder="CONDENA"><br> 
            <label> VENCIMIENTO CONDENA </label>  <input type="datetime" name="Vencimiento" placeholder="YYYY-MM-DD">
           
         
            <br><br>

         
                    
 
            <label>ASOCIAR HUELLA DACTILAR</label><input type="text" name= "huella"  placeholder="Huella" required value ="<?php echo generateRandomString($length = 900) ?>"/>
          



           <label>DELITO</label>
             <?php
        require("connect_db.php");
      $query1= mysqli_query($mysqli,"SELECT Delito FROM delito");
      ?>
                <select name="delito" id="delito">
                     <option value="0" > Delito</option>
                    <?php
                        $SQL="SELECT * from delito";
                        $bdelito=$mysqli->query($SQL);
                        while($fila=$bdelito->fetch_array()){
                            echo "<option value='".$fila['id_delito']."'>" .$fila['Delito']."</option>";
                        }
                ?>         
                </select> 
                   <label> NOMBRE DEDO </label>
      <?php
        require("connect_db.php");
      $query2= mysqli_query($mysqli,"SELECT nombrededo FROM nombrededo");
      ?>
                <select name="nombrededo" id="nombrededo">
                     <option value="0" > Nombre Dedo</option>
                    <?php
                        $SQL1="SELECT * from nombrededo";
                        $bnombrededo=$mysqli->query($SQL1);
                        while($fila=$bnombrededo->fetch_array()){
                            echo "<option value='".$fila['id_nombrededo']."'>" .$fila['nombreDedo']."</option>";
                        }
                ?>         
                </select> 
            </p>
            </div>



            
       <input  class="btn btn-danger" type="submit" name="submit" value="Registrar interno"/>
       <br>
       <br>
       </form>
         
   
    <center> <input  class="btn btn-info" type="submit" onclick="location.href='index2.php'" name="submit" value="VOLVER"/></center>   
       </div><br>

    <br>
    <br> <br>

            <?php

require("connect_db.php");
$sql=("SELECT * FROM internos INNER join delito on internos.idDelito = delito.id_delito INNER Join nombrededo on internos.idNombrededo = nombrededo.id_nombrededo INNER join ubicacion on internos.idubicacion = ubicacion.id_ubicacion  order by Fecha");

//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$query=mysqli_query($mysqli,$sql);

echo "<table border='1'; class='table table-hover';>";
    echo "<tr class='warning'>";
     
        echo "<td>Interno</td>";
        echo "<td>Dni</td>";
        echo "<td>Legajo</td>";
        echo "<td>Ubicacion</td>";
        echo "<td>Juzgado</td>";
        echo "<td>Depto Judicial</td>";
        echo "<td>Causa</td>";
       echo "<td>Pena</td>";
        echo "<td>Vencimiento</td>";
        echo "<td>Delito</td>";
        echo "<td>Nombre dedo</td>";
        echo "<td>renaper</td>";

    echo "</tr>"; 
?>


<?php 
 while($arreglo=mysqli_fetch_array($query)){
      echo "<tr class='success'>";
        
        echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[Ubicacion]</td>";
        echo "<td>$arreglo[4]</td>";
        echo "<td>$arreglo[5]</td>";
        echo "<td>$arreglo[6]</td>";
        echo "<td>$arreglo[7]</td>";
        echo "<td>$arreglo[8]</td>";
        echo "<td>$arreglo[Delito]</td>";
        echo "<td>$arreglo[nombreDedo]</td>";

        echo "<td><a href='renaperpagina.php'> <center> <img src='images/captura.png' class='img-rounded'></center></td>";

}
 
?>
<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </style>
  </body>
</html>
</div>  


</body>
</html>