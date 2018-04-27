<?php

$conn = mysqli_connect('localhost', 'root', '','test');
if (!$conn) {
	die('could not connect'. mysqli_error());
}

$sqlb = "SELECT colour, count(type) as types from fruit where colour like '%red%'
union SELECT colour, count(type) as types from fruit where colour like '%green%'
union SELECT colour, count(type) as types from fruit where colour like '%yello%'
union SELECT colour, count(type) as types from fruit where colour = 'black'
group by colour";
$resultb = mysqli_query($conn, $sqlb);


	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>". "colour" ."</th>";
	echo "<th>". "amount" ."</th></tr>";

while($rowb = mysqli_fetch_array($resultb)){

	echo "<tr><td>" . $rowb['colour'] . "</td>";
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
          ['colour', 'Amount'],

<?php	

$sqlc = "SELECT colour, count(type) as types from fruit where colour like '%red%'
union SELECT colour, count(type) as types from fruit where colour like '%green%'
union SELECT colour, count(type) as types from fruit where colour like '%yellow%'
union SELECT colour, count(type) as types from fruit where colour = 'black'
group by type";
$resultc = mysqli_query($conn, $sqlc);

while($rowc = mysqli_fetch_array($resultc)){

	echo "['".$rowc['colour']."',".$rowc['types']."],";

	}
 
?>		 
        ]);

        var options = {
          title: 'fruit colour',
          pieHole: 0.4,
        };
		


        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart2" style="width: 900px; height: 500px;"></div>
  </body>
</html>