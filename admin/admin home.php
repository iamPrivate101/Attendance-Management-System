<?php 
session_start();
if(isset($_SESSION['uname'])){

    include "admin_link.php";
    echo '
    <title> Admin Home </title>

    <script>
        .third-btn{
            margin-top : 10px;
        }
    </script>
<br>
<br>


<div class="container-fluid" align="center" >
    <div class="row">
        <div class="col-md-4">
             <div class="card">
                <img class="card-img-top" src="../image/bca.png" alt="bca logo" height="200px">
                <div class="card-body">
                  <h5 class="card-header">BCA</h5>
                </div>
                <div class="card-body">
                           <a href="../teacher/bca_teacher.php" class="btn btn-primary btn-sm" type="button">View Teacher</a> <a href="../student/bca_student.php" class="btn btn-primary btn-sm" type="button">View Student</a>

                           <a href="../bca_attendance/admin_view_bca_attendance.php" class="btn btn-primary btn-sm , third-btn" type="button" > Attendance</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
    <img class="card-img-top" src="../image/bim.png" alt="bim logo" height="200px">
    <div class="card-body">
      <h5 class="card-header">BIM</h5>
    </div>
    <div class="card-body">
                      <a href="../teacher/bim_teacher.php" class="btn btn-primary btn-sm" type="button">View Teacher</a> <a href="../student/bim_student.php" class="btn btn-primary btn-sm" type="button">View Student</a>
                      <a href="../bim_attendance/admin_view_bim_attendance.php" class="btn btn-primary btn-sm , third-btn" type="button" > Attendance</a>
                </div>
  </div>
        </div>
        <div class="col-md-4">
            <div class="card">
    <img class="card-img-top" src="../image/csit.png" alt="csit logo" height="200px">
    <div class="card-body">
      <h5 class="card-header">BSc.CSIT</h5>
     </div>
     <div class="card-body">
                      <a href="../teacher/csit_teacher.php" class="btn btn-primary btn-sm" type="button">View Teacher</a> <a href="../student/csit_student.php" class="btn btn-primary btn-sm" type="button">View Student</a>
                      <a href="../csit_attendance/admin_view_csit_attendance.php" class="btn btn-primary btn-sm , third-btn" type="button" > Attendance</a>
                </div>
  </div>    
        </div>
    </div>
</div>
<br>
<br>
   
  </body>
</html>
  ';
  include "copyright.php";
}

else{
    header('location:../admin/invalid.php');
}

 ?>











