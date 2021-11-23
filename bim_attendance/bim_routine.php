<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "../student/bim_student_link.php";
  echo ' <title>BIM ROUTINE STUDENTS</title>

<br>

<br>
<center><h3>BIM ROUTINE</h3></center>
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
                <td>Cost & Management Accounting</td>
                <td>Microeconomics</td>
                <td rowspan="6" align="center" style="padding-top:75px;"><b>BREAK</b></td>
                <td>Web Technology-II</td>
            </tr>
            <tr>
                <td>Monday</td>
                <td>Cost & Management Accounting</td>
                <td>Microeconomics</td>                  
                <td>Web Technology-II</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>Cost & Management Accounting</td>
                <td>Microeconomics</td>                
                <td>Web Technology-II</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>Data Structure & Algorithm with Java</td>
                <td>DBMS</td>                  
                <td></td>
            </tr>
            <tr>
                <td>Thrusday</td>
                <td>Data Structure & Algorithm with Java</td>
                <td>DBMS</td>                  
                <td></td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>Data Structure & Algorithm with Java</td>
                <td>DBMS</td>                  
                <td></td>
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




 
