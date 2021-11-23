<?php 
$id=$_GET['id'];
include "../dbconnect/conn.php";
$sql="delete from teacher where id= ".$id;
$res=mysqli_query($conn,$sql);
if (!$res) {
	die("ERROR DELETING ".mysqli_error($conn));
}else
{	

	
	header('location:teacher_display.php');

	

}
 ?>
 


