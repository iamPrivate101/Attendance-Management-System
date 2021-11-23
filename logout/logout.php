<?php 
session_start();
session_unset($_SESSION['uname']);
session_destroy();
header('location:../admin/index.php');
header('location:../admin/index.php?logout=true');
 ?>