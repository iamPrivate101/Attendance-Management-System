<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "csit_teacher_link.php";
  echo ' <title>BSc.CSIT TEACHER</title>

<br>

<div class="container-fluid" align="center" >
    <div class="row">
        <div class="col-md-6">
             <div class="card">
                <img class="card-img-top" src="../image/csit.png" alt="csit logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BSc.CSIT</h5>
                </div>
                <div class="card-body">
                           <a href="../csit_attendance/view_csit_st.php" class="btn btn-primary btn-sm" type="button">Student Information</a> <a href="../csit_attendance/view_csit_attendance.php" class="btn btn-primary btn-sm" type="button">View Attendance</a>
                </div>
            </div>
        </div> 
        <div class="col-md-6">
             <div class="card">
                <img class="card-img-top" src="../image/st.png" alt="csit logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BSc.CSIT</h5>
                </div>
                <div class="card-body">
                           <a href="../csit_attendance/csit_attendance.php" class="btn btn-primary btn-sm" type="button">Take Attendance</a> 
                </div>
            </div>
        </div> 

    </div>
</div><br><br><br><br><br> ';

include "../admin/copyright.php";
}
else{
    header('location:../admin/invalid.php');
}

 ?>




 
