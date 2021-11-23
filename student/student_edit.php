<?php 
include "../dbconnect/conn.php";
$name= $email= $number=  $location= $gender= $registration= $faculty= $username= $password= '';
$id = $_GET['id'];
$sql = "Select * from student where id='".$id."'";
$res = mysqli_query($conn,$sql);
if($res){
  while($row = mysqli_fetch_assoc($res)){
    $name = $row['name'];
    $email = $row['email'];
    $number = $row['phone'];
    $location = $row['location'];
    $gender = $row['gender'];
    $registration = $row['registration'];
    $faculty = $row['faculty'];
    $username = $row['username'];
    $password = $row['password'];
  }
}

include "../admin/admin_link.php";

?>

    <title>UPDATE STUDENT</title>
     <style >
           
         input{
            margin-left: 10px;
            margin-right: 10px;

        }
        .a{
            margin-left: 10px;
        }
        
    
    </style>

<br>
<center><h3>UPDATE STUDENT</h3></center>
<br>

    
<!-- form -->
<form method="POST">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="name" placeholder="Name" required="required"  value=" <?php echo $name; ?> ">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="email" placeholder="Email" required="required" value=" <?php echo $email; ?> ">
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="number" placeholder="Contact Number" maxlength="10" required="required"  value=" <?php echo $number; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" name="location" placeholder="Address" required="required" value=" <?php echo $location; ?> ">
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
       <select class="form-control , a" name="gender" required="required" value=" <?php echo $gender; ?>">
                <option value = "PLZ UPDATE">SELECT GENDER</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select>
    </div>
    <div class="col">
      <input type="text" class="form-control" name="registration" placeholder="Registration" required="required"  value=" <?php echo $registration; ?>">
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="username" placeholder="User Name" required="required" value=" <?php echo $username; ?>">
    </div>
    <div class="col">
     
      <select class="form-control , a" name="faculty"  required="required" value=" <?php echo $faculty; ?>">
                <option value = "PLZ UPDATE">SELECT FACULTY</option>
                <option value="BIM">BIM</option>
                <option value="BCA">BCA</option>
                <option value="BSc.CSIT">BSc.CSIT</option>
            </select>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
      <input type="password" class="form-control" name="password" placeholder="Password" required="required" value=" <?php echo $password; ?>">
    </div>
    <div class="col">
      
    </div>
  </div>
  <br>
  <center><input type="submit" name="submit"></center>
</form>

</body>
</html>


<?php 
   include "../admin/copyright.php";                                 


 ?>
 




<?php 

include "../dbconnect/conn.php";
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
    $name = trim($name);
    $name = ucwords($name);
    $email = $_POST['email'];
    $email = trim($email);
    $phone = $_POST['number'];
    $phone = trim($phone);
    $location = $_POST['location'];
    $location = trim($location);
    $location = ucwords($location);
    $gender = $_POST['gender'];
    $registration = $_POST['registration'];
    $registration = trim($registration);
    $faculty = $_POST['faculty'];
    $username = $_POST['username'];
    $username = trim($username);
    $password = $_POST['password'];
    $password = trim($password);
    

   $check_name = preg_match('/^[A-Za-z ]*$/', $name);

    $check_phone = preg_match('/^[0-9]*$/', $phone);
    $phone_length = strlen($phone);
    $check_username = preg_match('/^[A-Za-z 0-9]*$/',$username );
    $length = strlen($password);

      //checking registration already exists or not
     $sql = "SELECT registration FROM student WHERE registration = '$registration' AND id !='".$id."' ";
      $req = mysqli_query($conn,$sql) or die("cannot Select registration".mysqli_query($conn));
      

     //checking username already exist or not
       $sql = "SELECT username FROM student WHERE username = '$username' AND id !='".$id."' ";
      $res = mysqli_query($conn,$sql) or die("cannot Select user name".mysqli_query($conn));
        if (mysqli_num_rows($res) > 0) {
        echo '<script type="text/javascript"> alert("User Name Already Taken")              
              </script>';
        }



        if (!$check_name ) {
            echo '<script type="text/javascript"> alert("NOT A VALID NAME")              
              </script>';

        } else if (!$check_phone ) {
            echo '<script type="text/javascript"> alert("NOT A VALID PHONE NUMBER")              
              </script>';
         } else if ($phone_length < 10 ) {
            echo '<script type="text/javascript"> alert("PHONE NUMBER MUST HAVE 10 DIGITS")              
              </script>';
        }        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            echo '<script type="text/javascript"> alert("NOT A VALID EMAIL")              
              </script>';
        } else if (!$check_username) {
            echo '<script type="text/javascript"> alert("NOT A VALID USER NAME")              
              </script>';
        } else if ($length < 8){
            echo '<script type="text/javascript"> alert("NOT A VALID PASSWORD (AT LEAST 8 CHARACTER)")              
              </script>';
        }else if (mysqli_num_rows($req) > 0) {      //checking registration number if exists
        echo '<script type="text/javascript"> alert("Registration Number Already Used")              
              </script>';
        }





    else {

        $sql = "UPDATE student SET name= '$name', email = '$email', phone = '$number', location = '$location', gender = '$gender', faculty = '$faculty', registration = '$registration',username = '$username',password = '$password' where id='$_GET[id]'";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            die("failed to Update");
        } else {
            echo '<script type="text/javascript">
              alert("UPDATED SUCESSFULLY");
              window.location = "student_display.php";                
              </script>';

        }
    }
}

 ?>