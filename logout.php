<?php 
session_start();
if(!$_SESSION['name']){
	header("location: index.php");
}
else{
include('config.php');


$session = $_SESSION['name'];

$sel_user = mysqli_query($con, "select user_email, activity_id from users_activity where user_username = '$session' order by activity_id DESC LIMIT 1");
while($row = mysqli_fetch_array($sel_user)){

	$user = $row['user_email'];
	$act_id = $row['activity_id'];
}


$select_admin = mysqli_query($con, "select admin_id from admin where admin_email = '$user' AND admin_name = '$session'");
$row = mysqli_fetch_array($select_admin);
$id = $row['admin_id'];


	 $admin_email = "select admin_email from admin where admin_id = '$id'";
	 $run_admin = mysqli_query($con,$admin_email);
	 $row = mysqli_fetch_array($run_admin);
	 $check_admin = $row['admin_email'];

	 $search_user = mysqli_query($con, "select * from users where user_email='$check_admin'");
	 while($row = mysqli_fetch_array($search_user)){

		$user_fname = $row['user_fname'];
		$user_lname = $row['user_lname'];
		$user_email = $row['user_email'];
		$user_phone = $row['user_phone'];
		$user_username = $row['user_username'];
	 }
 
        $user_activity = mysqli_query($con, "insert into user_logout(user_fname, user_lname, user_email, user_phone, user_username, activity_id, register_date)
        values('$user_fname','$user_lname','$user_email','$user_phone', '$user_username', '$act_id', NOW())");
	
     if($user_activity){
     
$_SESSION = array();

session_destroy();
 
header("location: index.php");
exit;
	
	}
}
?>