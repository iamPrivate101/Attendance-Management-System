<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "bca_teacher_link.php";
  echo ' <title>BCA TEACHER</title>

<br>

<div class="container-fluid" align="center" >
    <div class="row">
        <div class="col-md-6">
             <div class="card">
                <img class="card-img-top" src="../image/bca.png" alt="bca logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BCA</h5>
                </div>
                <div class="card-body">
                           <a href="../bca_attendance/view_bca_st.php" class="btn btn-primary btn-sm" type="button">Student Information</a> <a href="../bca_attendance/view_bca_attendance.php" class="btn btn-primary btn-sm" type="button">View Attendance</a>
                </div>
            </div>
        </div> 
        <div class="col-md-6">
             <div class="card">
                <img class="card-img-top" src="../image/st.png" alt="bca logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BCA</h5>
                </div>
                <div class="card-body">
                           <a href="../bca_attendance/bca_attendance.php" class="btn btn-primary btn-sm" type="button">Take Attendance</a> 
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




 
