<?php 
$server = "localhost";
$user = "root";
$pwd = "";
$db ="project";
$conn = mysqli_connect($server, $user, $pwd, $db);
if( ! $conn){
	die("Connection Failed" .mysql_connect_error());
}
 ?>