<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "../admin/admin_link.php";
    echo ' 


    <title>Teacher DATA</title>
      
 
<br>
<center><h3>TEACHER DATA</h3></center>
<br>

    <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover table-sm ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th> Teacher Name</th>
                        <th>Email</th>  
                        <th>Phone</th>   
                        <th>Location</th>
                        <th>Gender</th>
                        <th>Citizenship</th>
                        <th>Qualification</th>
                        <th>Faculty</th>
                        <th>User Name</th>
                        
                        <th colspan="2">Operation</th>
                     </tr>
                </thead>
                <tbody>';


                        include "../dbconnect/conn.php";


                            $sql="select * from teacher";
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
                                    echo "<td>".$row['citizenship']."</td>";
                                    echo "<td>".$row['qualification']."</td>";
                                    echo "<td>".$row['faculty']."</td>";
                                    echo "<td>".$row['username']."</td>";                                   
                                    echo "<td><button> <a href =\"teacher_edit.php?id=".$row['id']."\">Edit </a> </button></td>";

                                     echo "<td><button>  <a href =\" teacher_delete.php?id=".$row['id']."\">Delete </a></button>  </td>";
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
<br>
';
include "../admin/copyright.php";
}
else{
    header('location:../admin/invalid.php');
}

 ?>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>




