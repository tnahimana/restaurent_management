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
     <title>Update Customer card | UTB Resto</title>
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
        height: 80px;/*The footer' height*/
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
      <?php
    $id = $_GET['id'];
   

   if($id > 0){
       $sel_customer = mysqli_query($con, "select * from customers where customer_id = '$id'");
       while($row = mysqli_fetch_array($sel_customer)){
            $fname = $row['customer_fname'];
            $lname = $row['customer_lname'];
            $customer_id = $row['customer_id'];
       }
       $sel_card = mysqli_query($con, "select card_id from rfid_card where customer_id = '$id'");
        while($row= mysqli_fetch_array($sel_card)){
           $card = $row['card_id']; 
        }
   }
   
   ?> 
   <br>
   <div id="page" class="clearfix">
        <!-- Registraion form -->
    <div class="container" style="margin-bottom: 40px;">
    <div class="col-md-6 col-md-offset-3">
    <h4><strong>Customer Cards</strong></h4>    
    <div class="panel panel-default">
    <div class="panel-body">
    <form role="form" method="post" action="customer-card.php?id=<?php echo $id ?>">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>First Name</label>
                        <input style="text-transform: capitalize;" type="text" name="fname" class="form-control "value="<?php echo $fname ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input style="text-transform: capitalize;" type="text" name="lname" class="form-control " value="<?php echo $lname ?>" readonly>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                <label>Customer Card</label>
                    <div class="form-group">
                        <input type="text" name="card" class="form-control " value="<?php echo $card; ?>" required="required">
                    </div>
                </div>
            </div>
                                                             
            <button type="submit" name="submit" class="btn btn-success">Update</button>
            <button type="reset" name="reset" class="btn btn-danger">Reset</button>

            </form>
            </div>
            </div>
            </div>
            </div>
    </div>
   
    <?php
     
     if(isset($_POST['submit'])){
 
          $card_id = $_POST['card'];
          $customer_id1 = $customer_id;
          $session = $_SESSION['name'];
 
          $sel_recent = mysqli_query($con, "select * from users_activity where user_username = '$session' order by activity_id DESC LIMIT 1");
          while($row = mysqli_fetch_array($sel_recent)){
               $user = $row['user_username'];
               $mail = $row['user_email'];
          }
  
          $mod_insert = mysqli_query($con, "insert into card_modification(user_username, user_email, previous_card, recent_card, customer_id, register_date)
          values('$user','$mail','$card','$card_id', '$customer_id1', NOW())");
 
          $modify_card = mysqli_query($con, "UPDATE rfid_card SET card_id = '$card_id', customer_id = '$customer_id', register_date = NOW() WHERE customer_id = '$id'");
        
 
          if($modify_card){
            $link = "single-customer.php?id=" . $id;
           echo "<script>alert('Update Successfull!')</script>";
           echo "<script>window.open('$link', '_self')</script>";
      
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