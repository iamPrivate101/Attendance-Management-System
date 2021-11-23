<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "bim_student_link.php";
  echo ' <title>BCA STUDENTS</title>

<br>

<div class="container-fluid" align="center" >
    <div class="row">
        <div class="col-md-12" >
             <div class="card" style="width: 50%;">
                <img class="card-img-top" src="../image/bim.png" alt="bim logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BIM</h5>
                </div>
                <div class="card-body">
                           <a href="../bim_attendance/bim_routine.php" class="btn btn-primary btn-sm" type="button">BIM Routine</a> <a href="../bim_attendance/view_my_attendance.php" class="btn btn-primary btn-sm" type="button"> My Attendance</a>
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




 
