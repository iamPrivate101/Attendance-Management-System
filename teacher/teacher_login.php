<?php 
session_start();
include "../dbconnect/conn.php";
$uname = $_POST['name'];
$pwd = $_POST['password'];
$faculty = $_POST['faculty'];
$sql = "SELECT username FROM teacher WHERE username= '" . $uname ."' and password = '".$pwd."' and faculty = '".$faculty."' ";
$res = mysqli_query($conn, $sql);

	if(mysqli_num_rows($res) == 1) {
	$_SESSION['uname'] = $uname;
		if($faculty == 'BCA'){
			header('location: bca_teacher_home.php');
		}
		elseif ($faculty == 'BIM') {
			header('location: bim_teacher_home.php');
		}else{
			header('location: csit_teacher_home.php');
		}
	
}
else{
	 header('location:../admin/invalid.php');
}
 ?>