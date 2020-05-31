<?php 
include('config.php');
session_start();
$session = $_SESSION['name'];   
$sel_admin = mysqli_query($con, "select user_type,status from admin where admin_name = '$session'");
while($row = mysqli_fetch_array($sel_admin)){
   $user_type = $row['user_type'];
    $status = $row['status'];
}
if(!$_SESSION['name']){
header("location: index.php");
}
else if($user_type != 'admin'){
header("location: no-access.php");

}
else if( $status != 'Active'){
    header("location: access-revoked.php");
    
}
else{
     $session = $_SESSION['name'];

     $sel_user = mysqli_query($con, "select user_email from users_activity where user_username = '$session' order by activity_id DESC LIMIT 1");
     $row = mysqli_fetch_array($sel_user);
     $user = $row['user_email'];
     
     $sel_userid = mysqli_query($con, "select user_id from users where user_email = '$user'");
     $row = mysqli_fetch_array($sel_userid);
     $user_id = $row['user_id'];
     

$id = $_GET['id'];
$breakfast = mysqli_query($con, "select customer_fname, customer_lname from customers where customer_id = '$id'");
while($row = mysqli_fetch_array($breakfast)){

     $customer_fname = $row['customer_fname'];
     $customer_lname = $row['customer_lname']; echo "<br>";   
     $customer_name = $customer_fname ." ". $customer_lname;
}

$money_payed = mysqli_query($con, "select * from money_to_pay where customer_id = '$id'");
while($row = mysqli_fetch_array($money_payed)){
    $break_cost = $row['breakfast_cost'];
    $dinner_cost = $row['dinner_cost'];
    $lunch_cost = $row['lunch_cost'];
    $total_cost = $row['total_cost']; 
}

$break_cost = $break_cost/1000;
$dinner_cost = $dinner_cost/2000;
$lunch_cost = $lunch_cost/2000;


$br_count = mysqli_query($con, "select remain_breakfast from counter_breakfast where customer_id = '$id' order by remain_breakfast ASC LIMIT 1");
$row = mysqli_fetch_array($br_count);
$remain_breakfast = $row['remain_breakfast'];

$dinner_count = mysqli_query($con, "select remain_dinner from counter_dinner where customer_id = '$id' order by remain_dinner ASC LIMIT 1");
$row = mysqli_fetch_array($dinner_count);
$remain_dinner = $row['remain_dinner'];


$lunch_count = mysqli_query($con, "select remain_lunch from counter_lunch where customer_id = '$id' order by remain_lunch ASC LIMIT 1");
$row = mysqli_fetch_array($lunch_count);
$remain_lunch = $row['remain_lunch'];

$recyclebin = mysqli_query($con, "insert into recyclebin(customer_name, payed_breakfast, payed_dinner, payed_lunch,
remain_breakfast, remain_dinner, remain_lunch, money_payed, customer_id, user_id, register_date)
values('$customer_name','$break_cost','$dinner_cost','$lunch_cost','$remain_breakfast','$remain_dinner','$remain_lunch',
'$total_cost', '$id', '$user_id', NOW())");

$delete_money = mysqli_query($con, "delete from money_to_pay where customer_id = '$id'");
$delete_money = mysqli_query($con, "delete from food where customer_id = '$id'");
$delete_breakfast = mysqli_query($con, "delete from breakfast where customer_id = '$id'");
$delete_card = mysqli_query($con, "delete from rfid_card where customer_id = '$id'");
$delete_dinner = mysqli_query($con, "delete from dinner where customer_id = '$id'");
$delete_lunch = mysqli_query($con, "delete from lunch where customer_id = '$id'");
$delete_br = mysqli_query($con, "delete from counter_breakfast where customer_id = '$id'");
$delete_lun = mysqli_query($con, "delete from counter_lunch where customer_id = '$id'");
$delete_din = mysqli_query($con, "delete from counter_dinner where customer_id = '$id'");
$delete_customer = mysqli_query($con, "delete from customers where customer_id = '$id'");

echo "<script>window.open('payment.php','_self')</script>";

} ?>