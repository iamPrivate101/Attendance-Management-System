<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "csit_student_link.php";
  echo ' <title>BSc.CSIT STUDENTS</title>

<br>

<div class="container-fluid" align="center" >
    <div class="row">
        <div class="col-md-12" >
             <div class="card" style="width: 50%;">
                <img class="card-img-top" src="../image/csit.png" alt="csit logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BSc.CSIT</h5>
                </div>
                <div class="card-body">
                           <a href="../csit_attendance/csit_routine.php" class="btn btn-primary btn-sm" type="button">BSc.CSIT Routine</a> <a href="../csit_attendance/view_my_attendance.php" class="btn btn-primary btn-sm" type="button"> My Attendance</a>
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




 
