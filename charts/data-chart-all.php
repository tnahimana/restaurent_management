<?php
header('Content-Type: application/json');

// $conn = mysqli_connect("142.93.41.188","dqwawsnkgn","h95GKy8KWq","dqwawsnkgn");
$conn = mysqli_connect("64.227.45.83","snvgussnmm","Z9XRV8mbtU","snvgussnmm");

// $sqlQuery = "SELECT user_fname FROM users_activity ORDER BY register_date DESC LIMIT 10";
$sqlQuery = "SELECT count(*) as marks, user_username  FROM users_activity group by user_username  ASC";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
