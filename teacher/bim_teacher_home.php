<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "bim_teacher_link.php";
  echo ' <title>BIM TEACHER</title>

<br>

<div class="container-fluid" align="center" >
    <div class="row">
        <div class="col-md-6">
             <div class="card">
                <img class="card-img-top" src="../image/bim.png" alt="bim logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BIM</h5>
                </div>
                <div class="card-body">
                           <a href="../bim_attendance/view_bim_st.php" class="btn btn-primary btn-sm" type="button">Student Information</a> <a href="../bim_attendance/view_bim_attendance.php" class="btn btn-primary btn-sm" type="button">View Attendance</a>
                </div>
            </div>
        </div> 
        <div class="col-md-6">
             <div class="card">
                <img class="card-img-top" src="../image/st.png" alt="bim logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BIM</h5>
                </div>
                <div class="card-body">
                           <a href="../bim_attendance/bim_attendance.php" class="btn btn-primary btn-sm" type="button">Take Attendance</a> 
                </div>
            </div>
        </div> 

    </div>
</div><br><br><br>';

include "../admin/copyright.php";
}
else{
    header('location:../admin/invalid.php');
}

 ?>




 
