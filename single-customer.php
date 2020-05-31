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
    
    $id = $_GET['id'];

    $sel_customer = mysqli_query($con,"select customer_fname, customer_lname from customers where customer_id = '$id'");
        while($row = mysqli_fetch_array($sel_customer)){

                    $customer_fname = $row['customer_fname'];
                    $customer_lname = $row['customer_lname'];
    }
    $session  = $_SESSION['name'];
    $sel_user_type = mysqli_query($con, "select user_type from admin where admin_name = '$session'");
    $row = mysqli_fetch_array($sel_user_type);
    $user_type = $row['user_type'];
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $customer_fname." ". $customer_lname;?></title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
 
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./charts/css/single1.css">
 
   <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">


    <style>
        .footer_part_new{
            height: 8vh;
            width: 100%;
            text-align: center;
            background-color: black;
            /* position: fixed; */
            
        }
        .footer_part_new p{
            color: white;
           
        }
        td, th {
                padding: 10px;
            }
            td {
                color: #636363;
                border: 1px solid #dddfe1;
            }
            td:hover{color: blue;}
            tr {
                background-color: #f9fafb;
            }
            tr:nth-child(odd) {
                background-color: #ffffff;
            }
            .pagination {
                list-style-type: none;
                display: inline-flex;
                justify-content: space-between;
                box-sizing: border-box;
                float: right;   
                margin-top: 15px;
                
            }
            .pagination li {
                box-sizing: border-box;
                padding-right: 10px;
            }
            .pagination li a {
                box-sizing: border-box;
                background-color: #e2e6e6;
                padding: 8px;
                text-decoration: none;
                font-size: 12px;
                font-weight: bold;
                color: #616872;
                border-radius: 4px;
            }
            .pagination li a:hover {
                background-color: #d4dada;
            }
            .pagination .next a, .pagination .prev a {
                text-transform: uppercase;
                font-size: 12px;
            }
            .pagination .currentpage a {
                background-color: #518acb;
                color: #fff;
            }
            .pagination .currentpage a:hover {
                background-color: #518acb;
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
                            <ul class="navbar-nav">
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
    error_reporting(0);
    
    $breakfast = mysqli_query($con, "select breakfast_counter from breakfast where customer_id = '$id'");
    $row=mysqli_fetch_array($breakfast);
    $breakfast_count = $row['breakfast_counter'];

    $lunch = mysqli_query($con, "select lunch_counter from lunch where customer_id = '$id'");
    $row=mysqli_fetch_array($lunch);
    $lunch_count = $row['lunch_counter'];

    $dinner = mysqli_query($con, "select dinner_counter from dinner where customer_id = '$id'");
    $row=mysqli_fetch_array($dinner);
    $dinner_count = $row['dinner_counter'];

    $remain_break1 = mysqli_query($con, "select remain_breakfast from counter_breakfast where customer_id = '$id' order by remain_breakfast ASC LIMIT 1");
    $row=mysqli_fetch_array($remain_break1);
    $remain_break = $row['remain_breakfast'];

    $remain_dinner1 = mysqli_query($con, "select remain_dinner from counter_dinner where customer_id = '$id' order by remain_dinner ASC LIMIT 1");
    $row=mysqli_fetch_array($remain_dinner1);
    $remain_dinner = $row['remain_dinner'];

    $remain_lunch1 = mysqli_query($con, "select remain_lunch from counter_lunch where customer_id = '$id' order by remain_lunch ASC LIMIT 1");
    $row=mysqli_fetch_array($remain_lunch1);
    $remain_lunch = $row['remain_lunch'];

    $customer_card = mysqli_query($con, "select card_id from rfid_card where customer_id = '$id'");
    $row=mysqli_fetch_array($customer_card);
    $card_id = $row['card_id'];

    ?>
    <br>
    <br>
    <br>
<div id="page" class="clearfix">
<div class="container col-sm-10 col-md-10 col-lg-10">
<h4><strong>Customer Order</strong></h4>
        <div class="row">                
        <div class="col-lg-12">
<!-- <div class="table-responsive">  -->
<table class="table table-bordered"> 
  <thead class="table-hover">
  <tr class="bg-primary">
                <th>Customer Fname</th>
                <th>Customer Lname</th>
                <th>Breakfast Payed</th>
                <th>Remain Breakfast</th>
                <th>Lunch Payed</th>
                <th>Remain Lunch</th>
                <th>Dinner Payed</th>
                <th>Remain Dinner</th>
                <th>Customer card</th>
                
            </tr>
  </thead>
  <tbody>
  <tr style="text-align: right;">
                 <td><?php  echo $customer_fname;?></td>
        <td><?php  echo $customer_lname;?></td>
        <td><?php echo $breakfast_count; ?></td>
        <td><?php  echo $remain_break; ?></td>
        <td><?php echo $lunch_count; ?></td>
        <td><?php echo $remain_lunch; ?></td>
        <td><?php  echo $dinner_count?></td>
        <td><?php echo $remain_dinner; ?></td>
        <td><?php  echo $card_id; ?></td>
                
            </tr>
  </tbody>
</table>
</div>  
         <?php $link = "?id=" . $id; ?>
        <?php if($user_type == 'admin'){ ?>
    <script type="text/javascript">
          var baseUrl='customer-delete-card.php';
          function ConfirmDelete()
          {
                if (confirm("Are you sure you want to delete this customer?"))
                     location.href=baseUrl+'<?php echo $link; ?>';
          }
      </script>
    <?php } ?>


      <br>
       <div class="container col-sm-12 col-md-12 col-lg-12" style="margin-top: 1%;">
          <botton class="btn btn-dark col-xs-6"><a style="color:white; text-decoration:none" href="payment.php">Back</a></botton>
          <botton class="btn btn-primary col-xs-6"><a style="color:white; text-decoration:none" href="order-update.php?id=<?php echo $id; ?>">Update Order</a></botton>
          <botton class="btn btn-success col-xs-6"><a style="color:white; text-decoration:none" href="customer-card.php?id= <?php echo $id; ?>">Change card</a></botton>
          <?php if($user_type == 'admin'){ ?><botton name="user" class="btn btn-danger col-xs-6"><a style="color:white; text-decoration:none" type="button" onclick="ConfirmDelete()">Delete Customer</a></botton><?php } ?>
      </div>
</div>  

    </div>
<br>



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
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>

    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>
</html>
<?php include('auto_logout.php'); } ?>