<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "../teacher/csit_teacher_link.php";
    echo ' 

<br>
<center><h3>BSc.CSIT STUDENTS</h3></center>
<br>
    

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover table-sm ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th> Student Name</th>
                        <th>Email</th>  
                        <th>Phone</th>   
                        <th>Location</th>
                        <th>Gender</th>
                        <th>Registration</th>
                        <th>Faculty</th>
                        
                        
                     </tr>
                </thead>
                <tbody>';

             include "../dbconnect/conn.php";


                             $sql="SELECT * FROM student WHERE faculty ='BSc.CSIT' ";
                            $res=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($res)>0){
                                while($row=mysqli_fetch_assoc($res)){
                                    echo "<tr>";
                                    echo "<td>".$row['id']."</td>";
                                    echo "<td>".$row['name']."</td>";
                                    echo "<td>".$row['email']."</td>";
                                    echo "<td>".$row['phone']."</td>";
                                    echo "<td>".$row['location']."</td>";
                                    echo "<td>".$row['gender']."</td>";
                                    echo "<td>".$row['registration']."</td>";
                                    echo "<td>".$row['faculty']."</td>";
                                   
                                    
                                    echo "</tr>";
                                }
                            }
                            else{
                                die("No data found");
                            }   
                    echo '    
                </tbody>
            </table>
        </div>
    </div>
</div><br><br><br><br><br><br>


';   
include "../admin/copyright.php";     
}
else{
    header('location:../admin/invalid.php');
}

 ?>
 


                 





