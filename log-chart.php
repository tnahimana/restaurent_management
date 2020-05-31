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
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Users Activities Chart | Welcome to UTB Resto</title>
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
    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
    <!-- <script src="https://kit.fontawesome.com/fe28a1137f.js" crossorigin="anonymous"></script> -->

   <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
 
  <!-- CSS Files -->
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />

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
   <div class="container">
   <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">User Activities</h5>
                <p class="card-category">24/7 Activities</p>
              </div>
              <div class="card-body ">
                <!-- <canvas id=chartHours width="400" height="100"></canvas> -->
                <?php include('all-users-chart.php'); ?>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i>Updated an Hour ago
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   </div>   

    <!--::footer_part start::-->
    <!-- <footer class="footer_part_new">
        <div class="container">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                             All rights reserved UTB Resto
                        </P>
              </div>
        </div>
    </footer> -->
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
<?php include('auto_logout.php'); } ?>