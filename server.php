<?php
header("Content-type:text/html;charset=utf-8"); 
session_start();
$about_user = $_SESSION['username'];
require("connect_to_mysql.php");
mysqli_set_charset($conn,"utf8");
$sql = "SELECT * from comment where about_user = '$about_user'";
$que = mysqli_query( $conn, $sql );
$comments[];
while ( $row = mysqli_fetch_array( $que ) ) {
	$comments[] = $row;
}
echo json_encode( $comments );
?>