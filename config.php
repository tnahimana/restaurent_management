<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '64.227.45.83');
define('DB_USERNAME', 'snvgussnmm');
define('DB_PASSWORD', 'Z9XRV8mbtU');
define('DB_NAME', 'snvgussnmm');
date_default_timezone_set('Africa/Kigali');

 
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
