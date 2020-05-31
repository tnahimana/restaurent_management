<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
$con = mysqli_connect("64.227.45.83","snvgussnmm","Z9XRV8mbtU","snvgussnmm");
session_start();
$_SESSION['timestamp']=time();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login | UTB Resto</title>
   <!--Made with love by Mutiullah Samim -->
   <link rel="icon" href="img/favicon.png">
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="./css/index.css">
	<style>
	html,body{
		background-image: url('./img/544750.jpg');
		}

	</style>
</head>
<body>
<div class="container col-xs-8 col-sm-8">
	<div class="d-flex justify-content-center mt-5 px-0 h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="index.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="name" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="psw" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<!-- <div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div> -->
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
error_reporting(0);
if(isset($_POST['login'])){

// getting text information and save then in local variables
  $user_name = mysqli_real_escape_string($con,$_POST['name']);
  $user_pass = md5(mysqli_real_escape_string($con,$_POST['psw']));


$sel = "select * from admin where admin_name = '$user_name' AND admin_pass = '$user_pass'";
$run = mysqli_query($con,$sel);

$admin = mysqli_query($con, "select admin_id from admin where admin_name= '$user_name' AND admin_pass= '$user_pass'");
while($row = mysqli_fetch_array($admin)){
 $admin_id = $row['admin_id'];
}
$link = "landing.php?id=" . $admin_id;
$check = mysqli_num_rows($run);

if($check == 0){
    echo "<script>alert('Password or Email is not correct,Try again!')</script>";
    exit();
}
else{

    $_SESSION['name'] = $user_name;
    $session = $_SESSION['name'];
       $sel_admin = mysqli_query($con, "select status from admin where admin_name = '$session'");
     $row = mysqli_fetch_array($sel_admin);
            $status = $row['status'];
     if($status == 'Active'){       
    echo "<script>window.open('$link','_self')</script>"; 
    	}else{
    		header('location: access-revoked.php');
    	}
	}
}
?>
</body>
</html>
