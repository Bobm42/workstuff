<?php

$conn = mysqli_connect('localhost', 'root', '','test');
if (!$conn) {
	die('could not connect'. mysqli_error());
}

$sql = "SELECT type, count(type) as types from fruit where colour = 'yellow'
union SELECT type, count(type) as types from fruit where colour = 'orange'
group by type";
$result = mysqli_query($conn, $sql);


	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>". "type" ."</th>";
	echo "<th>". "amount" ."</th></tr>";

while($row = mysqli_fetch_array($result)){

	echo "<tr><td>" . $row['type'] . "</td>";
	echo "<td>" . $row['types'] . "</td></tr>";

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
          ['Type', 'Count'],

<?php	

$sqla = "SELECT type, count(type) as types from fruit where colour = 'yellow'
union SELECT type, count(type) as types from fruit where colour = 'orange'
group by type";
$resulta = mysqli_query($conn, $sql);

while($rowa = mysqli_fetch_array($resulta)){

	echo "['".$rowa['type']."',".$rowa['types']."],";

	}
 
?>		 
        ]);

        var options = {
          title: 'fruit colour',
          pieHole: 0.4,
        };
		


        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>