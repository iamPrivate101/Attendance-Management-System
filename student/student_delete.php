<?php 
$id=$_GET['id'];
include "../dbconnect/conn.php";
$sql="delete from student where id= ".$id;
$res=mysqli_query($conn,$sql);
if (!$res) {
	die("ERROR DELETING ".mysqli_error($conn));
}else
{
	header('location:student_display.php');

}
 ?>
 


