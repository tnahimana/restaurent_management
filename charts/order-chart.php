
<?php
require_once('config.php');

$sel_break = mysqli_query($con, "SELECT breakfast_counter from breakfast  WHERE register_date >= DATE(NOW()) - INTERVAL 30 DAY");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['breakfast_counter']; 
} 
$break_payed = $sum;

$sel_break = mysqli_query($con, "SELECT lunch_counter from lunch  WHERE register_date >= DATE(NOW()) - INTERVAL 30 DAY");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['lunch_counter']; 
} 
$lunch_payed = $sum;

$sel_break = mysqli_query($con, "SELECT dinner_counter from dinner  WHERE register_date >= DATE(NOW()) - INTERVAL 30 DAY");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['dinner_counter']; 
} 
$dinner_payed = $sum;

$break_percent = $break_payed*100/($break_payed+$dinner_payed+$lunch_payed);
$lunch_percent = $lunch_payed*100/($break_payed+$dinner_payed+$lunch_payed);
$dinner_percent = $dinner_payed*100/($break_payed+$dinner_payed+$lunch_payed);

 ?>


<div id="piechart"></div>
 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Breakfast', <?php echo $break_percent; ?>],
  ['Lunch', <?php echo $lunch_percent; ?>],
  ['Dinner', <?php echo $dinner_percent; ?>]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':'100%', 'height':370};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}

</script>

