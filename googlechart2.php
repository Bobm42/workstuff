<?php

$conn = mysqli_connect('localhost', 'root', '','test');
if (!$conn) {
	die('could not connect'. mysqli_error());
}

$sqlb = "SELECT type, count(type) as types from fruit where type = 'Orange'
union SELECT type, count(type) as types from fruit where type = 'Berry'
union SELECT type, count(type) as types from fruit where type = 'Apple'
union SELECT type, count(type) as types from fruit where type = 'Seed'
group by type";
$resultb = mysqli_query($conn, $sqlb);


	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>". "type" ."</th>";
	echo "<th>". "amount" ."</th></tr>";

while($rowb = mysqli_fetch_array($resultb)){

	echo "<tr><td>" . $rowb['type'] . "</td>";
	echo "<td>" . $rowb['types'] . "</td></tr>";

	}
		echo "</table>";


?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['type', 'Amount'],

<?php	

$sqlc = "SELECT type, count(type) as types from fruit where type = 'Orange'
union SELECT type, count(type) as types from fruit where type = 'Berry'
union SELECT type, count(type) as types from fruit where type = 'Apple'
union SELECT type, count(type) as types from fruit where type = 'Seed'
group by type";
$resultc = mysqli_query($conn, $sqlc);

while($rowc = mysqli_fetch_array($resultc)){

	echo "['".$rowc['type']."',".$rowc['types']."],";

	}
 
?>		 
        ]);

        var options = {
          title: 'fruit type',
          pieHole: 0.4,
        };
		


        var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart3" style="width: 900px; height: 500px;"></div>
  </body>
</html>