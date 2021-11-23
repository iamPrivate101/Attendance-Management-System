<?php 
session_start();
if( !isset($_SESSION['uname'])){
    echo "**********UNAUTHORIZED***ACCESS************** <br>";
}
else{
    header('location:admin home.php');
}
?>


