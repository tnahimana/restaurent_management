<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '142.93.41.188');
define('DB_USERNAME', 'dqwawsnkgn');
define('DB_PASSWORD', 'h95GKy8KWq');
define('DB_NAME', 'dqwawsnkgn');
date_default_timezone_set('Africa/Kigali');

 
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
