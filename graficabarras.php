<!DOCTYPE html>

<?php


require("connect_db.php");
$sql = "select Pena,id from internos"; // Consulta SQL
//$query = $con->query($sql); // Ejecutar la consulta SQL
$query=mysqli_query($mysqli,$sql);
$data = array(); // Array donde vamos a guardar los datos
while($r = $query->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
    $data[]=$r; // Guardar los resultados en la variable $data
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Grafica de Barra y Lineas con PHP y MySQL</title>
    <script src="chart.min.js"></script>
</head>
<body>
<h1>Grafica de Barra y Lineas con PHP y MySQL</h1>
<canvas id="chart1" style="width:100%;" height="100"></canvas>
<script>
var ctx = document.getElementById("chart1");
var data = {
        labels: [ 
        <?php foreach($data as $d):?>
        "<?php echo $d->Pena ?>", 
        <?php endforeach; ?>
        ],
        datasets: [{
            label: '$ Penas',
            data: [
        <?php foreach($data as $d):?>
        <?php echo $d->id;?>, 
        <?php endforeach; ?>
            ],
            backgroundColor: "#3898db",
            borderColor: "#9b59b6",
            borderWidth: 2
        }]
    };
var options = {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    };
var chart1 = new Chart(ctx, {
    type: 'bar', /* valores: line, bar*/
    data: data,
    options: options
});
</script>
</body>
</html>