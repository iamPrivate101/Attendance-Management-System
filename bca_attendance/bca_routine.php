<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "../student/bca_student_link.php";
  echo ' <title>BCA ROUTINE STUDENTS</title>

<br>

<br>
<center><h3>BCA ROUTINE</h3></center>
<br>

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
         
        <table class="table table-bordered table-hover table-sm "  >
        <thead>
            <tr>
                <th>Day / Time</th>
                <th> 11:00 - 12:30</th>
                <th>12:30 - 2:00</th>  
                <th>2:00 - 2:30</th>   
                <th>2:30 - 4:00</th>                                     
             </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sunday</td>
                <td>Operating System</td>
                <td>Numerical Method</td>
                <td rowspan="6" align="center" style="padding-top:75px;"><b>BREAK</b></td>
                <td>Scripting Language</td>
            </tr>
            <tr>
                <td>Monday</td>
                <td>Operating System</td>
                <td>Numerical Method</td>                  
                <td>Scripting Language</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>Operating System</td>
                <td>Numerical Method</td>                
                <td>Scripting Language</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>DBMS</td>
                <td>Software Engineering</td>                  
                <td>Project I</td>
            </tr>
            <tr>
                <td>Thrusday</td>
                <td>DBMS</td>
                <td>Software Engineering</td>                  
                <td>Project I</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>DBMS</td>
                <td>Software Engineering</td>                  
                <td>Project I</td>
            </tr>
            <tr>
              <td>Saturday</td>
              <td colspan="4" align="center"><b>NO CLASS</b></td>
              
          </tr>            
        </tbody>
    </table>


        </div>
    </div>
</div>
<br>

</div><br> ';

include "../admin/copyright.php";
}
else{
    header('location:../admin/invalid.php');
}

 ?>




 
