<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '178.62.67.45');
define('DB_USERNAME', 'zsqknnyqqh');
define('DB_PASSWORD', '6Ruxt64Z4G');
define('DB_NAME', 'zsqknnyqqh');
date_default_timezone_set('Africa/Kigali');

 
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
