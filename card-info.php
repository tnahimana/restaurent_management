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
    <!-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Card Info | UTB Resto</title>
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
    <link rel="stylesheet" href="./charts/css/responsive.css">
 
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
				float: right;			}
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
        padding-bottom: 100px;/* equal to the footer's height*/
        }

        #footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px;/*The footer' height*/
        /* background: #6cf; */
        clear:both;
        }
        .flex{
            margin-left: 10%;
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
                                    <a class="nav-link" href="users.php"><i class="fas fa-users"></i> Users</a>
                                </li><?php } ?>
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
<div class="container col-sm-10 col-md-10 col-lg-10">
<div style="display: flex;">
    <span><h4 style="margin-top: 8px;"><strong>Customer Cards</strong></h4></span><span class="flex"><?php if($status == 'Admin'){ ?><button class="btn btn-outline-success" style="margin-bottom: 2px; "><a style="color: back; text-decoration:none;" href="all-cards.php">View Modified Cards</a></button><?php } ?></span>
</div>

        <div class="row">
        <div class="col-lg-12">
 <div class="form-group">
           <form>
           <input type="text" class="form-control pull-right" style="width:25%; height: 35px;" id="search" placeholder="Search">
          </form>
     </div>
 <table class="table-bordered table pull-right" id="mytable" cellspacing="0" style="width: 100%;">
  <thead class="table-hover">
  <tr class="bg-primary">
                <th>S.N</th>
				<th>Card Owner</th>
                <th>Register By</th>
                <th>Register Email</th>
				<th>RFID Card</th>
				<th>Registered On</th>
                <th>View Order</th>
				
			</tr>
  </thead>
  <?php
		
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 50;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $total_pages_sql = "SELECT COUNT(*) FROM rfid_card";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM rfid_card order by register_date DESC LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($con,$sql);
        if ($offset == 1) {
            $i = 0;
        } else {
            $i = $offset * $total_pages/2;
        }
		
        while($row = mysqli_fetch_array($res_data)){
			//here goes the data

                    $card = $row['card_id'];
                    $user_id = $row['user_id'];
                    $reg_name = $row['register_name'];
                    $reg_date = $row['register_date'];
                    $customer_id = $row['customer_id'];

					$sel_customer = mysqli_query($con,"select customer_fname, customer_lname from customers where customer_id = '$customer_id'");
					while($row = mysqli_fetch_array($sel_customer)){

					$customer_fname = $row['customer_fname'];
                    $customer_lname = $row['customer_lname'];
                    $owner = $customer_fname . " " . $customer_lname;

                    $sel_user = mysqli_query($con,"select user_email from users where user_id = '$user_id'");
					while($row = mysqli_fetch_array($sel_user)){

					$user_email = $row['user_email'];

                    
					$i++;
				
	?>
  <tbody>
  <tr style="text-align: right;">
                <td><?php echo $i; ?></td>
				<td style="text-transform: capitalize"><?php echo $owner; ?></td>
				<td style="text-transform: capitalize"><?php echo $reg_name; ?></td>
				<td><?php echo $user_email; ?></td>
				<td><?php echo $card; ?></td>
				<td><?php echo $reg_date; ?></td>
				<td><a href="single-customer.php?id=<?php echo $customer_id ?>"><i class="fas fa-eye"></i>View</a></td>
				
			</tr>
  </tbody>
  <?php } } }?>
</table>
<!-- </div>    -->
        
</div>

</div style="float: left;">
        <ul class="pagination" style="margin-top: 10px;">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
    </div>



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
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>
<script>
   // Write on keyup event of keyword input element
   $(document).ready(function(){
     $("#search").keyup(function(){
     _this = this;
    
     // Show only matching TR, hide rest of them
     $.each($("#mytable tbody tr"), function() {
       if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
       {  
           $(this).hide();
       }
       else
       {
          $(this).show();
       }
     });
  });
});
</script>
</html>
<?php include('auto_logout.php'); } ?>