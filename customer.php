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
else if( $status != 'Active'){
    header("location: access-revoked.php");
    
}
else{
    $select_card = mysqli_query($con, "SELECT pre_cardnumber FROM pre_registration_card order by pre_id DESC LIMIT 1");
    $row = mysqli_fetch_array($select_card);
    $card_id = $row['pre_cardnumber'];
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register New Customer | UTB Resto</title>
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
  
    <!-- register customer -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

      <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .footer_part_new{
            height: 8vh;
            width: 100%;
            text-align: center;
            background-color: black;
            
        }
        .footer_part_new p{
            color: white;
           
        }
        body{
            background-color: white;
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

<body>
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
                            <ul style="margin-left: 40px;" class="navbar-nav align-items-center justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">
                                    <i class="fas fa-home"></i> Home</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="payment.php"><i class="fas fa-store-alt"></i> Sales</a>
                                </li>
                                <?php if($user_type == 'admin'){ ?><li class="nav-item">
                                    <a class="nav-link" href="users.php"><i class="fas fa-users"></i> Users</a><?php } ?>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-info"></i> Info
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="card-info.php"><i class="fas fa-id-card"></i> Card Info</a>
                                        <?php if($user_type == 'admin'){ ?><a class="dropdown-item" href="log.php"><i class="fas fa-users"></i> Users Activities</a>
                                        <a class="dropdown-item" href="trash.php"><i class="fas fa-trash-restore-alt"></i> Recyclebin</a><?php } ?>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-edit"></i> Register
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <?php if($user_type == 'admin'){ ?><a class="dropdown-item" href="register.php"><i class="fas fa-share-square"></i> Register User</a><?php } ?>
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
        <!-- Registraion form -->
    <div class="container" style="margin-bottom: 40px;">
    <div class="col-md-6 col-md-offset-3">
    <center><h4><strong>Register New Customer</strong></h4></center>
    <div class="panel panel-default">
    <div class="panel-body">
    <form role="form" action="customer.php" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="fname"  class="form-control " placeholder="First name" required="required">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lname" class="form-control " placeholder="Last Name" required="required">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Breakfast Payed</label>
						<input type="text" name="breakfast" class="form-control " placeholder="Breakfast" required="required">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Breakfast Cost</label>
						<input type="text" name="breakfast_cost" class="form-control " placeholder="Breakfast cost" required="required">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Lunch Payed</label>
						<input type="text" name="lunch" class="form-control " placeholder="Lunch Payed" required="required">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Lunch Cost</label>
						<input type="twxt" name="lunch_cost" class="form-control " placeholder="Lunch Cost" required="required">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Dinner</label>
						<input type="text" name="dinner" class="form-control " placeholder="Dinner Payed" required="required">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Dinner Cost</label>
						<input type="text" name="dinner_cost" class="form-control " placeholder="Dinner Cost" required="required">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Gender</label>
						<select name="gender"  style="width: 100%; height: 5vh; border-radius: 3%; color:gray; font-size: 12px;" class="custom-select" required="required">
							<option selected="">Select Gender</option>
							<option  value="male">Male</option>
							<option  value="female">Female</option>
						</select>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Date of Birth</label>
						<input style="text-transform: uppercase;" class="form-control" type="date" / name="date" placeholder="MM/DD/YYYY" required="required">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Customer Card</label>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <?php if($card_id != ""){ ?> 
						    <input type="text" name="card" class="form-control " id="introducerid" value="<?php echo $card_id; ?>" readonly>
                        <?php } 
                        else{ ?>                     
						<input type="text" name="card" class="form-control " placeholder="Card Number">
                        <?php } ?>
					</div>
				</div>
			</div>
                                                             
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
            <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            <a style="float: right;" href="<?php $_SERVER['PHP_SELF']; ?>" class="btn btn-primary">Get Card ID</a>

            </form>
            </div>
            </div>
            </div>
            </div>
    </div>
   

            <?php
 
    if(isset($_POST['submit'])){

        $customer_fname = mysqli_real_escape_string($con,$_POST['fname']);
        $customer_lname = mysqli_real_escape_string($con,$_POST['lname']);
        $breakfast = mysqli_real_escape_string($con,$_POST['breakfast']);
        $lunch = mysqli_real_escape_string($con,$_POST['lunch']);
        $dinner = mysqli_real_escape_string($con,$_POST['dinner']);
        $br_cost = mysqli_real_escape_string($con,$_POST['breakfast_cost']);
        $lunch_cost = mysqli_real_escape_string($con,$_POST['lunch_cost']);
        $dinner_cost = mysqli_real_escape_string($con,$_POST['dinner_cost']);
        $card_id = mysqli_real_escape_string($con,$_POST['card']);
        $gender = mysqli_real_escape_string($con,$_POST['gender']);
        $dob = mysqli_real_escape_string($con,$_POST['date']);
        $session = $_SESSION['name'];


        $sel_user = mysqli_query($con, "select user_id, user_fname,user_lname from users where user_username = '$session'");
        while($row = mysqli_fetch_array($sel_user)){
        $user_id = $row['user_id'];
        $fname = $row['user_fname'];
        $lname = $row['user_lname'];
        $name = $fname . " " .$lname;

        }   
        $customer_insert = mysqli_query($con,"insert into customers(customer_fname, customer_lname, gender, dob, register_date) 
        values('$customer_fname', '$customer_lname', '$gender', '$dob', NOW())");
   
        $customer_id = mysqli_query($con,"select customer_id from customers where customer_fname = '$customer_fname' AND customer_lname = '$customer_lname' order by register_date DESC");
        $row=mysqli_fetch_array($customer_id);
        $return_id = $row['customer_id'];

        $sel_card = mysqli_query($con, "select card_id from rfid_card where card_id = '$card_id'");
        $row = mysqli_fetch_array($sel_card);
        $rfid_card = $row['card_id'];

        if($rfid_card == $card_id){
            echo "<script>alert('This card is Already Taken!')</script>";
            echo "<script>window.open('customer.php', '_self')</script>";
        }

        if($return_id != 0 AND $rfid_card != $card_id){


            $food_insert = mysqli_query($con,"insert into food(breakfast_cost,lunch_cost,dinner_cost,customer_id) 
            values('$br_cost', '$lunch_cost', '$dinner_cost', '$return_id')");
            $breakfast_insert = mysqli_query($con,"insert into breakfast(breakfast_counter, customer_id) 
            values('$breakfast', '$return_id')");
            $dinner_insert = mysqli_query($con,"insert into dinner(dinner_counter, customer_id) 
            values('$dinner', '$return_id')");
            $lunch_insert = mysqli_query($con,"insert into lunch(lunch_counter, customer_id) 
            values('$lunch', '$return_id')");
            $card_insert = mysqli_query($con,"insert into rfid_card(card_id, register_date, customer_id, user_id,register_name) 
            values('$card_id', NOW(), '$return_id', '$user_id','$name')");

            $breakfast_cost = $breakfast*$br_cost;
            $dinner_cost =  $dinner*$dinner_cost;
            $lunch_cost = $lunch*$lunch_cost;

            $total_cost = $breakfast_cost + $dinner_cost + $lunch_cost;

            $cost_insert = mysqli_query($con,"insert into money_to_pay(breakfast_cost, lunch_cost, dinner_cost, total_cost, customer_id, register_date) 
            values('$breakfast_cost', '$lunch_cost', '$dinner_cost', '$total_cost', '$return_id', NOW())");

            $counter_breakfast_insert = mysqli_query($con, "insert into counter_breakfast(remain_breakfast, customer_id)
             values('$breakfast', '$return_id')");

             $counter_lunch_insert = mysqli_query($con, "insert into counter_lunch(remain_lunch, customer_id)
             values('$lunch', '$return_id')");

             $counter_dinner_insert = mysqli_query($con, "insert into counter_dinner(remain_dinner, customer_id)
             values('$dinner', '$return_id')");

             if($return_id > 0)
             {
                 $delete_pre_card = mysqli_query($con, "DELETE FROM pre_registration_card");
                 echo "<script>alert('Registration Successfull!')</script>";
                 echo "<script>window.open('customer.php', '_self')</script>";
             }

        }
    }
?>

    <!--::footer_part start::-->
    <footer id="footer" class="footer_part_new">
        <div class="container">
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