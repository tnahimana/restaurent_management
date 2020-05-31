<!doctype html>
<html lang="en">
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
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register New User | UTB Resto</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Chart js -->
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://kit.fontawesome.com/fe28a1137f.js" crossorigin="anonymous"></script>
     -->
      <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
 
    <style>
        .footer_part_new{
            height: 6vh;
            width: 100%;
            text-align: center;
            background-color: black;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            
        }
        .footer_part_new p{
            color: white;
           
        }
        .head-color{
          background-color: aliceblue;
        }
        header{
          height: 8vh;
        }
        hr{
            color: rgb(13, 99, 175);
           
        }
        
        html,body {
        margin: 0;
        padding:0;
        height: 100%;
        }
        #container {
        min-height:100%;
        height: auto !important;
        height: 100%; /*for ie6*/
        position: relative;
        }
        #page {
        /* width: 960px; */
        margin: 0 auto;
        padding-bottom: 80px;/* equal to the footer's height*/
        }

        #footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;/*The footer' height*/
        /* background: #6cf; */
        clear:both;
        }
    </style>
</head>

<body style="background-color: white;">
<div id="container">
    <!--::header part start::-->
    <div class="head-color">
   <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="home.php"> <img src="img/logo3.png" width="92px" height="21px" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">
                                    <i class="fas fa-home"></i> Home</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="payment.php"><i class="fas fa-store-alt"></i> Sales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="users.php"><i class="fas fa-users"></i> Users</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-info"></i> Info
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="card-info.php"><i class="fas fa-id-card"></i> Card Info</a>
                                        <a class="dropdown-item" href="log.php"><i class="fas fa-users"></i> Users Activities</a>
                                        <a class="dropdown-item" href="trash.php"><i class="fas fa-trash-restore-alt"></i> Recyclebin</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-edit"></i> Register
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="register.php"><i class="fas fa-share-square"></i> Register User</a>
                                        <a class="dropdown-item" href="customer.php"><i class="fas fa-share-square"></i> Register Customer</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-tie"></i> <?php echo $_SESSION['name']; ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <hr>    
   </div>
   <div id="page" class="clearfix">
   <center>
    <div class="container">
      <h4><strong>Register New User</strong></h4>
        <form class="form-horizontal" action="register.php" method="post">
            <fieldset>
            
            <!-- Form Name -->
            <!-- <legend><strong>Register New User</strong></legend> -->
            
            <!-- Text input-->
            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i> </span>
                 </div>
                    <input name="fname" class="form-control" placeholder="First Name" type="text" required="required">
                </div> 
            
            <!-- Text input-->
            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i> </span>
                 </div>
                    <input name="lname" class="form-control" placeholder="Last Name" type="text" required="required">
                </div> 
            
            <!-- Text input-->
            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
               </div>
                  <input name="email" class="form-control" placeholder="Email address" type="email" required="required">
              </div>
            
            <!-- Text input-->
            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                    <input name="name" class="form-control" placeholder="Username" type="text" required="required">
                </div>

              <!-- Phone input -->
              <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
              </div>
              <select name="prefix" class="custom-select" style="max-width: 120px;">
                  <option  selected="" value="+250">+250</option>
              </select>
                <input name="phone" class="form-control" placeholder="Phone number" type="text" maxlength="9"  required="required">
              </div>
              <!-- DOB input -->

            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
              </div>
              <input style="text-transform: uppercase;" class="form-control" style="width: 300px;" name="date" placeholder="MM/DD/YYYY" type="date" required="required">
              </div>
            
            
            <!-- gender input -->
            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-venus"></i> </span>
              </div>
              <select name="gender" style="width:280px;" class="custom-select" required="required">
                  <option selected="">Select Gender</option>
                  <option  value="male">Male</option>
                  <option  value="female">Female</option>
              </select>
              </div>

              <!-- role input -->
            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-briefcase"></i> </span>
              </div>
              <select name="role" style="width:280px;" class="custom-select" required="required">
                  <option selected="">Select Role</option>
                  <option  value="admin">Admin</option>
                  <option  value="employee">Employee</option>
              </select>
              </div>
            
            <!-- Password input-->
            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
              </div>
                  <input name="psw" class="form-control" placeholder="Password" type="password" required="required">
              </div>
            
            <!-- Password input-->
            <div class="form-group input-group col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
              </div>
                  <input name="psw1" class="form-control" placeholder="Repeat password" type="password" required="required">
              </div>
            
            <!-- Button (Double) -->
            <div class="form-group">
              <div class="col-md-4">
                <button id="submit" type="submit" name="register" class="btn btn-primary btn-block">Create Account</button>
              </div>
            </div>
            
            </fieldset>
            </form>
    </div>
</center>
    </div>
  
<?php

if(isset($_POST['register'])){

// getting text information and save then in local variables
$fname = mysqli_real_escape_string($con,$_POST['fname']);
$lname = mysqli_real_escape_string($con,$_POST['lname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$prefix = mysqli_real_escape_string($con,$_POST['prefix']);
$pass = md5(mysqli_real_escape_string($con,$_POST['psw']));
$pass1 = md5(mysqli_real_escape_string($con,$_POST['psw1']));
$phone_number = mysqli_real_escape_string($con,$_POST['phone']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);
$role = mysqli_real_escape_string($con,$_POST['role']);
$dob = mysqli_real_escape_string($con,$_POST['date']);
$username = mysqli_real_escape_string($con,$_POST['name']);
$max_date = '2012-01-02';
if($role == "admin"){
    $role_id = 1;
}
else if($role == "employee"){
    $role_id = 2;
}

$phone = $prefix . $phone_number;
$pass_enc = mysqli_real_escape_string($con,$_POST['psw']);
$pass_enc1 = mysqli_real_escape_string($con,$_POST['psw1']);

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "<script>alert('your email is not valid!')</script>";
    echo "<script>window.open('register.php','_self')</script>";
}
if(strlen($pass_enc)< 8){
    echo "<script>alert('Password must have 8 minimum letters!')</script>";
    echo "<script>window.open('register.php','_self')</script>";
    
}
if($dob > $max_date){
  echo "<script>alert('Sorry you must be above 18years old to register an account!')</script>"; 
  echo "<script>window.open('register.php','_self')</script>"; 
}
if(strlen($pass_enc) != strlen($pass_enc1)){
  echo "<script>alert('Password doesn't match!')</script>";
  echo "<script>window.open('register.php','_self')</script>"; 
}
else{
$admin_email = "select * from admin where admin_email = '$email'";
$run_admin = mysqli_query($con,$admin_email);
$check_admin = mysqli_num_rows($run_admin);

$user_select = "select * from users";
while($row = mysqli_fetch_array($user_select)){
    $user_name = $row['user_username'];
    $user_phone = $row['user_phone'];
    $user_email = $row['user_email'];
}
$status = "Active";

if(!$check_admin == 0){
    echo "<script>alert('This email is already registered,Try another one!')</script>";
    echo "<script>window.open('register.php','_self')</script>";
}
else if($user_name == $username){
    echo "<script>alert('This username is already taken,Try another one!')</script>";
    echo "<script>window.open('register.php','_self')</script>";
}
else if($user_phone == $phone){
    echo "<script>alert('This phone number is already taken,Try another one!')</script>";
    echo "<script>window.open('register.php','_self')</script>";
}
else if($pass == $pass1){
        $_SESSION['name']= $username;

        $user_insert = mysqli_query($con, "insert into users(user_fname, user_lname, user_email, user_password, user_phone, user_gender, user_dob, user_username, role_id,register_date)
         values('$fname','$lname','$email','$pass','$phone','$gender','$dob','$username', '$role_id',NOW())");

        $select_user_id = "select user_id from users where user_email = '$email'"; 
        $run_user_id = mysqli_query($con,$select_user_id);
        $row = mysqli_fetch_array($run_user_id);
        $user_id = $row['user_id'];

        $insert = "insert into admin (admin_name,admin_email,admin_pass,user_id,user_type,role_id,status,register_date) 
        values('$username','$email','$pass','$user_id','$role','$role_id','$status',NOW())";

        $run_insert = mysqli_query($con,$insert);

        $admin_email = "select admin_id from admin where admin_email = '$email'";
         $run_admin = mysqli_query($con,$admin_email);
         $row = mysqli_fetch_array($run_admin);
         $check_admin = $row['admin_id'];
         $link = "landing.php?id=" . $check_admin;
         
        if($run_insert AND $user_insert){
            echo "<script>alert('Registration sucessful, Welcome!')</script>";
            echo "<script>window.open('$link', '_self')</script>";
        }   
    }
 }
}
?>
<br>

    <!--::footer_part start::-->
    <footer id="footer" class="footer_part_new">
        <div  class="container">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                             All rights reserved UTB Resto
                        </P>
              </div>
        </div>
    </footer>
</div>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	
</html>
<?php include('auto_logout.php'); } ?>