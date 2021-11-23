<?php 
session_start();
if(isset($_SESSION['uname'])){
	echo "**************welcome***********";
}
else{
	echo "**********UNAUTHORIZED***ACCESS**************";
}

 ?>
 
