<!doctype html>
<html>
	<head>
	<title>Numero aleatorio usando Formulario</title>
    
<script type="text/javascript">
function aleatorio(a,b) {
return Math.round(Math.random()*(b-a)+parseInt(a));
}

function calcula_aleatorio(){
  minimo = document.f1.minim.value
  maximo = document.f1.maxim.value
  resultado = aleatorio(minimo,maximo)
  document.f1.res.value = resultado
}
</script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<style>

</style>
</head>
<body>
<div role="navigation" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="#" class="navbar-brand">BAULCODE</a> </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
</div>


<div class="container">
  <div class="row">
    <h4>Generar NÃºmero aleatorio</h4>
    <hr style="margin-top:5px;margin-bottom: 5px;">
    <div class="content"> </div>
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Formulario</h3>
      </div>
      <div class="panel-body">
        <div class="col-lg-6">
        

<form name="f1">
<div class="form-group">
              <label for="my-file-selector">MÃ­nimo:</label>
            <input class="form-control" maxlength="5" size="5" name="minim">  
              
</div>
<div class="form-group">
              <label for="my-file-selector">MÃ¡ximo:</label>
            <input class="form-control" maxlength="5" size="5" name="maxim">  
              
</div>
  
 
  <input class="btn btn-primary" onclick="calcula_aleatorio()" type="button" value="Calcular Aleatorio">
 <div class="form-group">
 <label for="my-file-selector">NÃºmero aleatorio entre el mÃ­nimo y el mÃ¡ximo:</label>
  
  <input class="form-control" maxlength="5" size="5" name="res">
  </div>
</form>

        </div>
        <div class="col-lg-6"> </div>
      </div>
    </div>
  </div>
</div>  
</body>
</html>
