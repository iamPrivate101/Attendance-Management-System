
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <title>Teacher DATA</title>
     <style >
            body{
            background:#c0c0c0;
        }
        h2{
            margin-top: 10px;
        }
    
        
    
    </style>    
    
  </head>
  <body>
    <!-- Header -->
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">
                    ATTENDANCE MANAGEMENT SYSTEM
                </h2>
            </div>
            
        </div>
     </div>

     <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="http://localhost/project%20I/admin/admin%20home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../teacher/teacher_form.php">Add Teacher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../student/student_form.php">Add Student</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link " href="../teacher/teacher_display.php">View All Teachers</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link " href="../student/student_display.php">View All Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<br>
<center><h3>Add STUDENT</h3></center>
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
                        <th>Password</th>
                        <th colspan="2">Operation</th>
                     </tr>
                </thead>
                <tbody>
                    <?php
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
                                    echo "<td>".$row['password']."</td>";
                                    echo "<td><button> <a href =\"teacher_edit.php?id=".$row['id']."\">Edit </a> </button></td>";

                                     echo "<td><button>  <a href =\" teacher_delete.php?id=".$row['id']."\">Delete </a></button>  </td>";
                                    echo "</tr>";
                                }
                            }
                            else{
                                die("No data found");
                            }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br>

<hr>




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


<!-- copyright -->
        <div class="container-fluid" align="center">
            <div class="row">
                <div class="col-md-12">
                    <i class="far fa-copyright">Sameer Maharjan & Surendra Kathariya</i>
                </div>
            </div>
        </div>




