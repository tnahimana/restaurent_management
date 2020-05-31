<?php
include('config.php');
error_reporting(0);
	 $id = $_GET['id'];
	 
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
		 $user_id = $row['user_id'];
	 }
     if($user_fname == "" AND $user_lname == "" AND $user_email == "" AND $user_phone == "" AND $user_username == ""){

		echo "<script>window.open('home.php', '_self')</script>";

     }
     else{
        $user_activity = mysqli_query($con, "insert into users_activity(user_fname, user_lname, user_email, user_phone, user_username,user_id, register_date)
        values('$user_fname','$user_lname','$user_email','$user_phone', '$user_username','$user_id', NOW())");
     }
	
     if($user_activity){
        echo "<script>window.open('home.php', '_self')</script>";
     }
     
	 ?>