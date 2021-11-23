
<?php
    if(isset($_POST["btnsubmit"]))
    {
        include "../dbconnect/conn.php";
        
        $date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
                    
        $query = "select *from `student` where faculty = 'BIM' ";
        $result = mysqli_query($conn,$query)or die("select error");
        while($rec = mysqli_fetch_array($result))
        {
            $mno = $rec["id"];
            if(isset($_POST[$mno]))
            {
                $query1 = "INSERT INTO  `bim_attendance`(`id` ,  `date` ,  `attendance`) VALUES('$mno','$date','1')";
            }
            else
            {
                $query1 = "INSERT INTO  `bim_attendance`(`id` ,  `date` ,  `attendance`) VALUES('$mno','$date','0')";
            }
            mysqli_query($conn,$query1)or die("insert error".$mno);
            print "<script>";
            print "alert('Attendance get successfully....');";
            print "self.location='bim_attendance.php';";
            print "</script>";
        }
        
        
            
        
    }
    else
    {
        header('location:../admin/invalid.php');
    }
?>

