<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "../admin/admin_link.php";
    echo '

    <title>ADD STUDENT</title>
   
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
<center><h3>REGISTER STUDENT</h3></center>
<br>

<!-- form -->
<form method="POST">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="name" placeholder="Name" required="required" value = "'; if(isset($_POST['name'])) echo $_POST['name'];
      echo '" >
    </div>
    <div class="col">
      <input type="text" class="form-control" name="email" placeholder="Email" required="required" value = "'; if(isset($_POST['email'])) echo $_POST['email'];
      echo '" >
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="number" placeholder="Contact Number" maxlength="10" required="required" value = "'; if(isset($_POST['number'])) echo $_POST['number'];
      echo '" >
    </div>
    <div class="col">
      <input type="text" class="form-control" name="location" placeholder="Address" required="required" value = "'; if(isset($_POST['location'])) echo $_POST['location'];
      echo '" >
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col , a">
       <select class="form-control" name="gender" required="required">
                <option value="PLZ UPDATE">SELECT GENDER</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
            </select>
    </div>
    <div class="col">
      <input type="text" class="form-control" name="registration" placeholder="Registration" maxlength="3" required="required" value = "'; if(isset($_POST['registration'])) echo $_POST['registration'];
      echo '" >
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="username" placeholder="User Name" required="required" value = "'; if(isset($_POST['username'])) echo $_POST['username'];
      echo '" >
    </div>
    <div class="col">
     
      <select class="form-control , a" name="faculty"  required="required">
                <option value="PLZ UPDATE">SELECT FACULTY</option>
                <option value="BIM">BIM</option>
                <option value="BCA">BCA</option>
                <option value="BSc.CSIT">BSc.CSIT</option>
            </select>
    </div>
  </div>
  <br>
   <div class="row">
    <div class="col">
      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
    </div>
    <div class="col">
      
    </div>
  </div>
  <br>
  <center><input type="submit" name="submit"></center>
</form>




 ';
 include "../admin/copyright.php";
}
else{
    header('location:../admin/invalid.php');
}

 ?>




<!-- insert and validate student -->


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
     $sql = "SELECT registration FROM student WHERE registration = '$registration' ";
      $req = mysqli_query($conn,$sql) or die("cannot Select registration".mysqli_query($conn));
      

     //checking username already exist or not
       $sql = "SELECT username FROM student WHERE username = '$username' ";
      $res = mysqli_query($conn,$sql) or die("cannot Select user name".mysqli_query($conn));
        if (mysqli_num_rows($res) > 0) {
        echo '<script type="text/javascript"> alert("User Name Already Taken")              
              </script>';
        }

       else if (!$check_name ) {
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
        } else if (mysqli_num_rows($req) > 0) {      //checking registration number if exists
        echo '<script type="text/javascript"> alert("Registration Number Already Used")              
              </script>';
        }



    else {

        $sql = "insert into student(name, email, phone, location, gender, faculty, registration,username,password) values('$name', '$email', '$phone', '$location', '$gender', '$faculty', '$registration','$username','$password')";
        $res = mysqli_query($conn, $sql);
        if (!$res) {
            die("failed to insert");
        } else {
             echo '<script type="text/javascript">
              alert("Inserted Sucessfully");
              window.location = "student_display.php";                
              </script>';
        }
    }
}
?>






