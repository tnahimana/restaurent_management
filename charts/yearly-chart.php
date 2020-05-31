<?php
$year = date('Y');
//january
$sel_break = mysqli_query($con, "select * from money_to_pay where monthname(register_date)='January' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $january = $sum/1000;
    // echo $january . "K";
}
else{
   $january = $sum/10000000;
//    echo $january . "M";
}
//february
$sel_break = mysqli_query($con, "select * from money_to_pay where monthname(register_date)='February' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $february = $sum/1000;
    // echo $february . "K";
}
else{
   $february = $sum/10000000;
//    echo $february . "M";
}
//march
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='March' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $march = $sum/1000;
    // echo $march . "K";
}
else{
   $march = $sum/10000000;
//    echo $march . "M";
}
//april
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='April' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $april = $sum/1000;
    // echo $april . "K";
}
else{
   $april = $sum/10000000;
//    echo $april . "M";
}
//may
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='May' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $may = $sum/1000;
    // echo $may . "K";
}
else{
   $may = $sum/10000000;
//    echo $may . "M";
}
//june
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='June' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $june = $sum/1000;
    // echo $june . "K";
}
else{
   $june = $sum/10000000;
//    echo $june . "M";
}
//july
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='July' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $july = $sum/1000;
    // echo $july . "K";
}
else{
   $july = $sum/10000000;
//    echo $july . "M";
}
//august
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='August' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $august = $sum/1000;
    // echo $august . "K";
}
else{
   $august = $sum/10000000;
//    echo $august . "M";
}
//september
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='September' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $september = $sum/1000;
    // echo $september . "K";
}
else{
   $september = $sum/10000000;
//    echo $september . "M";
}
//october
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='October' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $october = $sum/1000;
    // echo $october . "K";
}
else{
   $october = $sum/10000000;
//    echo $october . "M";
}
//november
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='November'AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $november = $sum/1000;
    // echo $november . "K";
}
else{
   $november = $sum/10000000;
//    echo $november . "M";
}
//december
$sel_break = mysqli_query($con, "select *from money_to_pay where monthname(register_date)='December' AND year(register_date) = '$year'");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $december = $sum/1000;
    // echo $december . "K";
}
else{
   $december = $sum/10000000;
//    echo $december . "M";
}
 
$dataPoints = array( 
	array("y" => $january,"label" => "January" ),
	array("y" => $february,"label" => "February" ),
	array("y" => $march,"label" => "March" ),
	array("y" => $april,"label" => "April" ),
	array("y" => $may,"label" => "May" ),
	array("y" => $june,"label" => "June" ),
	array("y" => $july,"label" => "July" ),
	array("y" => $august,"label" => "August" ),
	array("y" => $september,"label" => "September" ),
	array("y" => $october,"label" => "October" ),
	array("y" => $november,"label" => "November" ),
    array("y" => $december,"label" => "December" ),
    
);
 
?>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer11", {
	animationEnabled: true,
	title:{
		// text: "Revenue Chart of Acme Corporation"
	},
	axisY: {
		// title: "Revenue (in Rwf)",
		prefix: "",
		suffix:  "k"
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bold",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<div id="chartContainer11" style="height: 380px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            