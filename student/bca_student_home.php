<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "bca_student_link.php";
  echo ' <title>BCA STUDENTS</title>

<br>

<div class="container-fluid" align="center" >
    <div class="row">
        <div class="col-md-12" >
             <div class="card" style="width: 50%;">
                <img class="card-img-top" src="../image/bca.png" alt="bca logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BCA</h5>
                </div>
                <div class="card-body">
                           <a href="../bca_attendance/bca_routine.php" class="btn btn-primary btn-sm" type="button">BCA Routine</a> <a href="../bca_attendance/view_my_attendance.php" class="btn btn-primary btn-sm" type="button"> My Attendance</a>
                </div>
            </div>
        </div> 
        

    </div>
</div><br><br><br> ';

include "../admin/copyright.php";
}
else{
    header('location:../admin/invalid.php');
}

 ?>




 
