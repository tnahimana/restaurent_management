<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","kigali@kigali","restaurent_management");


// $sqlQuery = "SELECT user_fname FROM users_activity ORDER BY register_date DESC LIMIT 10";
$sqlQuery = "SELECT count(*) as marks, user_username FROM users_activity group by user_username,user_id  ASC LIMIT 10";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>