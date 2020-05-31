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
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Order | UTB Resto</title>
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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

      <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
 
    <style>
        .footer_part_new{
            height: 8vh;
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
        body{
            background-color: white
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

    </style>
</head>

<body>
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
                            <ul style="margin-left: 40px;" class="navbar-nav">
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
   <br>
    <?php
 error_reporting(0);
 $id = $_GET['id'];
   

if($id > 0){
 
    $sel_pr_break = mysqli_query($con, "select * from breakfast where customer_id = '$id'");
    while($row = mysqli_fetch_array($sel_pr_break)){
         $br_count = $row['breakfast_counter'];
         $customer_id = $row['customer_id'];
        
    }
    $sel_pr_din = mysqli_query($con, "select * from dinner where customer_id = '$customer_id'");
    while($row = mysqli_fetch_array($sel_pr_din)){
         $din_count = $row['dinner_counter'];
    
    }
    $sel_pr_lun = mysqli_query($con, "select * from lunch where customer_id = '$customer_id'");
    while($row = mysqli_fetch_array($sel_pr_lun)){
        $lun_count = $row['lunch_counter'];
       
    }

    $sel_total_cost = mysqli_query($con, "select * from money_to_pay where customer_id = '$customer_id'");
    while($row = mysqli_fetch_array($sel_total_cost)){
       $cost_din = $row['dinner_cost'];
       $cost_lun = $row['lunch_cost'];
       $cost_br = $row['breakfast_cost'];
       $cost_total = $row['total_cost'];
    }

    $sel_food = mysqli_query($con, "select * from food where customer_id= '$customer_id'");
    while($row = mysqli_fetch_array($sel_food)){
       $lunch_cost = $row['lunch_cost'];
       $dinner_cost = $row['dinner_cost'];
       $breakfast_cost = $row['breakfast_cost'];
    }
   
    $sel_customer = mysqli_query($con, "select * from customers where customer_id= '$customer_id'");
    while($row = mysqli_fetch_array($sel_customer)){
       $fname = $row['customer_fname'];
       $lname = $row['customer_lname'];
    }
        
    $break = mysqli_query($con, "select * from counter_breakfast where customer_id = '$customer_id' order by remain_breakfast ASC LIMIT 1");
    while($row = mysqli_fetch_array($break)){
         $remain_br = $row['remain_breakfast'];
        
         
    }
    $dinner = mysqli_query($con, "select remain_dinner from counter_dinner where customer_id = '$customer_id' order by remain_dinner ASC LIMIT 1");
     while($row= mysqli_fetch_array($dinner)){
         $remain_din = $row['remain_dinner']; 
        
     }
     $lunch = mysqli_query($con, "select remain_lunch from counter_lunch where customer_id = '$customer_id' order by remain_lunch ASC LIMIT 1");
     while($row= mysqli_fetch_array($lunch)){
        $remain_lun = $row['remain_lunch']; 
      
     }
}

?>        

    <!-- Registraion form -->
    <div class="container">
    <div class="col-md-6 col-md-offset-3">
    <h4><strong>Update Order</strong></h4>

    <div class="panel panel-default">
    <div class="panel-body">
    <form role="form" action="order-update.php?id=<?php echo $id; ?>" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="fname"  class="form-control " placeholder="<?php echo $fname; ?>" readonly>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lname" class="form-control " placeholder="<?php echo $lname; ?>" readonly>
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
			                                         
            <button type="submit" name="update" class="btn btn-success">Submit</button>
            <button type="reset" name="reset" class="btn btn-danger">Reset</button>

            </form>
            </div>
            </div>
            </div>
            </div>

            <?php
    if(isset($_POST['update'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $break = $_POST['breakfast'];
        $dinner = $_POST['dinner'];
        $lunch = $_POST['lunch'];
        $br_cost = $_POST['breakfast_cost'];
        $lunch_cost = $_POST['lunch_cost'];
        $dinner_cost = $_POST['dinner_cost'];

        $break_update = $break + $br_count;
        $lunch_update = $lunch + $lun_count;
        $dinner_update = $dinner + $din_count ;

        $remain_br1 = $break + $remain_br;
        $remain_lun1 = $lunch + $remain_lun;
        $remain_din1 = $dinner + $remain_din;
        
        $br_cost_update = $break * $br_cost;
        $din_cost_update = $dinner * $dinner_cost;
        $lun_cost_update = $lunch * $lunch_cost;
        $total_cost_update = $br_cost_update + $din_cost_update + $lun_cost_update;

         $modify_lunch = mysqli_query($con, "UPDATE lunch SET lunch_counter = '$lunch_update', customer_id = '$customer_id' WHERE customer_id = '$customer_id'");
         $modify_dinner = mysqli_query($con, "UPDATE dinner SET dinner_counter = '$dinner_update', customer_id = '$customer_id' WHERE customer_id = '$customer_id'");
         $modify_lunch = mysqli_query($con, "UPDATE breakfast SET breakfast_counter = '$break_update', customer_id = '$customer_id' WHERE customer_id = '$customer_id'");

        $total_payed_cost = $cost_total + $total_cost_update;
        $total_cost_br = $br_cost_update + $cost_br;
        $total_cost_din = $din_cost_update + $cost_din;
        $total_cost_lun = $lun_cost_update + $cost_lun;

        $modify_money_to_pay =  mysqli_query($con, "UPDATE money_to_pay SET breakfast_cost = '$total_cost_br', lunch_cost = '$total_cost_lun', 
        dinner_cost = '$total_cost_din', total_cost = '$total_payed_cost', customer_id = '$customer_id' WHERE customer_id = '$customer_id'");

        // $delete_remain_break = mysqli_query($con, "delete from counter_breakfast where customer_id = '$id'");
        // $delete_remain_lunch = mysqli_query($con, "delete from counter_lunch where customer_id = '$id'");
        // $delete_remain_dinner = mysqli_query($con, "delete from counter_dinner where customer_id = '$id'");

        $sel_max = mysqli_query($con, "SELECT count(counter_id) as max from counter_lunch where customer_id = '$customer_id'");
        $row = mysqli_fetch_array($sel_max);
        $max_lunch = $row['max']; 
         echo "<br>";
        $max = $max_lunch-1;
        $delete = mysqli_query($con,"delete from counter_lunch where customer_id = '$customer_id' order by counter_id ASC Limit $max ");


        $sel_max1 = mysqli_query($con, "SELECT count(counter_id) as max from counter_breakfast where customer_id = '$customer_id'");
        $row = mysqli_fetch_array($sel_max1);
        $max_lunch1 = $row['max']; 
         echo "<br>";
        $max1 = $max_lunch1-1;
        $delete1 = mysqli_query($con,"delete from counter_breakfast where customer_id = '$customer_id' order by counter_id ASC Limit $max1 ");
        
        $sel_max2 = mysqli_query($con, "SELECT count(counter_id) as max from counter_dinner where customer_id = '$customer_id'");
        $row = mysqli_fetch_array($sel_max2);
        $max_lunch2 = $row['max']; 
         echo "<br>";
        $max2 = $max_lunch2-1;
        $delete2 = mysqli_query($con,"delete from counter_dinner where customer_id = '$customer_id' order by counter_id ASC Limit $max2 ");


        $modify_remain_break = mysqli_query($con, "UPDATE counter_breakfast SET remain_breakfast = '$remain_br1', customer_id = '$customer_id' WHERE customer_id = '$customer_id'");
        $modify_remain_dinner = mysqli_query($con, "UPDATE counter_dinner SET remain_dinner = '$remain_din1', customer_id = '$customer_id' WHERE customer_id = '$customer_id'");
        $modify_remain_lunch = mysqli_query($con, "UPDATE counter_lunch SET remain_lunch = '$remain_lun1', customer_id = '$customer_id' WHERE customer_id = '$customer_id'");

        $link = "single-customer.php?id=" . $customer_id;
         echo "<script>alert('Update Successfull!')</script>";
         echo "<script>window.open('$link', '_self')</script>";
    
    }
?>
<br>
<br>
<br>
           
    <!--::footer_part start::-->
    <footer class="footer_part_new">
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
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
	<script src="js/bootstrap.min.js"></script>
	
</html>
<?php include('auto_logout.php'); } ?>