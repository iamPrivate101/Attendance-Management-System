<?php 
session_start();
if(isset($_SESSION['uname'])){
	include "../teacher/bca_teacher_link.php";
  echo ' 
<title>VIEW BCA ATTENDANCE</title>
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
.style6 {font-size: 16px}
-->
</style>
<table width="90%" border="1" align="center">
      <tr>
        <td bordercolor="#330033" bgcolor="#CCCCFF"><h1 align="center"><strong><span class="style1">VIEW BCA ATTENDANCE</span></strong></h1>
        </td>
      </tr>
     
      <tr>
        <td><div align="center">
        <form action="" method="post" style="margin-top: 20px;">
          <table width="90%" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
          	<tr><td colspan="3" align="center"><h3>Search Registration No Wise Records Here</h3></td></tr>
            <tr>
              <td width="60%" bgcolor="#9999CC"><div align="center"><strong><span class="style2">Enter the Registration no</span></strong></div></td>
              <td width="20%" bgcolor="#9999CC"><span class="style6">
                <input type="text" name="eno" />
              </span></td>
              <td width="50%" bgcolor="#9999CC"><input type="submit" value="Search Attendance" name="btnsubmit"/></td>

              <td width="10%" bgcolor="#9999CC">
				<!-- print page -->
				<button onclick="myfun()" bgcolor="#9999CC">Print</button>
				<script type="text/javascript">
					function myfun(){
						window.print();
					}
				</script>
			  </td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr> '; 



		if(isset($_POST["btnsubmit"]))
		{
			include "../dbconnect/conn.php";
			extract($_POST);
			$query = "select * from `student` where faculty = 'BCA' and registration = ".$eno." limit 1";

			$result = mysqli_query($conn,$query)or die("select1 error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
				<tr>
				  <td width="160" bgcolor="#9999CC"><span class="style2">Registration</span></td>
				  <td width="160" bgcolor="#9999CC"><span class="style2">Name</span></td>';
				  $query1 = "select * from `bca_attendance` where `id` = ".$rec["id"]." order by date";
					$result1 = mysqli_query($conn,$query1)or die("select2 error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="#9999CC" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="style6">'.$rec["registration"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["name"].'</span></td>';
				  $query1 = "select *from `bca_attendance` where `id` = ".$rec["id"]." order by date";
					$result1 = mysqli_query($conn,$query1)or die("select3 error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		else
		{
			include "../dbconnect/conn.php";
			extract($_POST);
			$query = "select * from `student` where faculty = 'BCA' ";

			$result = mysqli_query($conn,$query)or die("select4 error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1" >
				<tr>
				  <td width="160" bgcolor="#9999CC"><span class="style2">Registration</span></td>
				  <td width="160" bgcolor="#9999CC"><span class="style2">Name</span></td>';
				  $query1 = "select * from `bca_attendance` where `id` = ".$rec["id"]." order by date";
					$result1 = mysqli_query($conn,$query1)or die("select5 error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="#9999CC" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="style6">'.$rec["registration"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["name"].'</span></td>';
				  $query1 = "select *from `bca_attendance` where `id` = ".$rec["id"]." order by date";
					$result1 = mysqli_query($conn,$query1)or die("select 6error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["attendance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
				<br>
								
			  </table></td></tr>';
			}
		}

    echo '	</table>';

include "../admin/copyright.php";
}
else{
    header('location:../admin/invalid.php');
}

 ?>







		



