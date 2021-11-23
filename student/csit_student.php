<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "../admin/admin_link.php";
    echo '

    <title>BSc.CSIT STUDENT</title>
    
 
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
                        <th>User Name</th>                     
                        <th colspan="2">Operation</th>
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
                                    echo "<td>".$row['username']."</td>";                                  
                                    echo "<td><button> <a href =\" student_edit.php?id=".$row['id']."\">Edit </a> </button></td>";

                                     echo "<td><button>  <a href =\" student_delete.php?id=".$row['id']."\">Delete </a></button>  </td>";
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
</div>

';

   include "../admin/copyright.php";                                 
}
else{
     header('location:../admin/invalid.php');
}

 ?>
 




