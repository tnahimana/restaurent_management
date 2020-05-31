<?php
error_reporting(0);
date_default_timezone_set("Africa/Kigali");
include('config.php');
$card_id = $_GET['id'];

$sel_card = mysqli_query($con, "select * from rfid_card where card_id = '$card_id' LIMIT 1");
$card = mysqli_num_rows($sel_card);

if($card == 0){
    $insert_card = mysqli_query($con, "insert into pre_registration_card(pre_cardnumber,created_at) VALUES('$card_id',NOW())");
    $link = "customer-auto.php?id=" . $card_id;
    echo "<script>window.open('$link', '_self')</script>";
    echo "Register this user";
    return "1";
}
else{
$current_time = date("h:i:s A");

if(strtotime($current_time)>= strtotime('11:00:00 AM') && strtotime($current_time)<= strtotime('05:30:00 PM')){
    include('counter_lunch.php');
}
else if(strtotime($current_time)>= strtotime('05:31:00 PM') && strtotime($current_time)<= strtotime('11:59:00 PM')){
    include('counter_dinner.php');
}
else if(strtotime($current_time)>= strtotime('06:00:00 AM') && strtotime($current_time)<= strtotime('10:59:00 PM')){
    include('counter_breakfast');
}
}
?>