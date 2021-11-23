<!-- bca_attendance.php -->
<?php 
session_start();
if(isset($_SESSION['uname'])){
    include "../teacher/bca_teacher_link.php";
  echo ' 
 <title>BCA ATTENDANCE</title>

<br>
<br>
  

 <style type="text/css">
<!--
.style1 {
    font-family: "Courier New", Courier, monospace;
    font-size: 60px;
    color: #FFFFFF;
    font-style: italic;
}
.style2 {
    font-size: 24px;
    color: #0000FF;
}
.style7 {color: #FFCCFF}
-->
</style>
<script type="text/javascript">
    function getatt(value)
    {
        if(value == true)
        {
            document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
            document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
        }
        else
        {
            document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
            document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
        }
    }
</script>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <table width="80%" border="1" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="#CCCCFF"><h1 align="center"><strong><span class="style1">BCA ATTENDANCE</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#999966"><div align="center">
                           
                        </div>       </td>
      </tr>
      <tr>
        <td>
        <form action="bca_attendance_submit.php" method="post">
        <table width="180px" align="left" style="">
                <tr>
                    <td> Select date : <br />';
                 
                            $dt = getdate();
                            $day = $dt["mday"];
                            $month = date("m");
                            $year = $dt["year"];
                            
                            echo "<select name='cdate'>";
                            for($a=1;$a<=31;$a++)
                            {
                                if($day == $a)
                                    echo "<option value='$a' selected='selected'>$a</option>";
                                else
                                    echo "<option value='$a' >$a</option>";
                            }
                            echo "</select><select name='cmonth'>";
                            for($a=1;$a<=12;$a++)
                            {
                                if($month == $a)
                                    echo "<option value='$a' selected='selected'>$a</option>";
                                else
                                    echo "<option value='$a' >$a</option>";
                            }
                            echo "</select><select name='cyear'>";
                            for($a=2010;$a<=$year;$a++)
                            {
                                if($year == $a)
                                    echo "<option value='$a' selected='selected'>$a</option>";
                                else
                                    echo "<option value='$a' >$a</option>";
                            }
                            echo "</select>";
                        
                    echo '                       
                    </td>
                </tr>
             </table>   
        
          <table width="50%" border="2" align="left" bordercolor="#9966FF" bgcolor="#C7B6B1" style="margin-left:20px;">
            <tr>
              <td colspan="3" bgcolor="#9999CC"><div align="center"><strong><span class="style2">Get Attendance</span></strong></div></td>
            </tr>
            <tr bgcolor="#999966">
              <td width="114"><span class="style7">Registation No.</span></td>
              <td width="152"><span class="style7">Name</span></td>
              <td width="110"><span class="style7">Attend</span></td>
            </tr>';


            include "../dbconnect/conn.php";
                extract($_POST);
                $query = "select *from student where faculty = 'BCA' order by id";
                $s = 0;
                $result = mysqli_query($conn,$query)or die("select error");
                while($rec = mysqli_fetch_array($result))
                {
                    $s = $s + 1;
                    echo ' <tr>
                              <td width="114">'.$rec["registration"].'</td>
                              <td width="152">'.$rec["name"].'</td>
                              <td width="110"><input type=checkbox name='.$rec["id"].' onclick="getatt(this.checked);"/></td>
                            </tr>';
                }
                ?>
                  <tr>
              <td colspan="3"><div align="center">
                <input type="submit" value="Get Attendance" name="btnsubmit"/>
                &nbsp;&nbsp;</div></td>
            </tr>
          </table>
          </form>
         
            <table width="100px" align="right" style="margin-left:35px">
                <tr>
                    <td> Total Absent : <input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr>
                    <td> Total Present : <input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr>
                    <td> Total Student : <input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>
         
         </td>
      </tr>
    </table>

        </div>
    </div>
</div><br><br><br><br>

<?php 
include "../admin/copyright.php";
}
else{
    header('location:../admin/invalid.php');
}

 ?>




                
                
           


