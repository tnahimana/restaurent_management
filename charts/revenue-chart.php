<?php
require_once('config.php');

$sel_break = mysqli_query($con, "SELECT total_cost FROM money_to_pay WHERE register_date >= DATE(NOW()) - INTERVAL 7 DAY");	
$sum = 0;
while($row = mysqli_fetch_array($sel_break)){
 $sum += $row['total_cost']; 
} 
if ($sum/1000 >= 1 AND $sum/1000 <= 1000){
    $revenues = $sum/1000;
    echo $revenues . "K";
}
else{
   $revenues = $sum/10000000;
   echo $revenues . "M";
}

 
?>
