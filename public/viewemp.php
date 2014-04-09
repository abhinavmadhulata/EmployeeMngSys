




<?php session_start(); 
 error_reporting(null);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMPLOYEE MANAGEMENT SYSTEM</title>
<link href="stylesheet/style1.css" rel="stylesheet" type="text/css">







</head>

<body>
<div id="main">
<div id="header">
<div class="logo">
<img src="images/logo-madhulata.png" />
</div>
<div class="nav">
<ul>
<li><a href="http://localhost/EmpMngSyS/public/index3.php">Home</a></li>
<li><a href="#">Employee</a>

<ul>
				<li><a href="http://localhost/EmpMngSyS/public/addemp.php">AddEmployee</a></li>
				<li><a href="http://localhost/EmpMngSyS/public/viewemp.php">ViewEmployee</a></li>
				<li><a href="http://localhost/EmpMngSyS/public/appraisal.php">Emp.Appraisal</a></li>
			</ul>

</li>
<li><a href="#">Leave</a>

<ul>
				<li><a href="http://localhost/EmpMngSyS/public/apply_leave.php">ApplyLeave</a></li>
				<li><a href="http://localhost/EmpMngSyS/public/viewleave.php">Viewleave</a></li>
				
			</ul>
</li>
<li><a href="#">EmployeeAttendence</a></li>
<li><a href="#">Calender</a></li>
</ul>

</div>


</div>

<div id="container">



<div class="qucklink">
<h4>Quick Links</h4>
<ul>

<li><a href="#">Profile</a></li>
<li><a href="#">Apply Leave</a></li>
<li><a href="#">Apply Bonus</a></li>
<li><a href="#">Meet Abhijeet</a></li>
<li><a href="http://localhost/EmpMngSyS/public/database2.php"> Rating</a></li>
</ul>

</div>

<div class="viewemp">




 <form action="database.php" method="post" >
 <center><table>

<tr><td>Enter Employee id:</td><td><input type="text" name="id"  /><input type="submit" value="GO" name="submit"  /></td></tr>

 
<!--//<tr><input id="field_1" type="hidden" name="field_1" value="<?php //echo  $_GET['t1']; ?>" /></tr>
//<tr><input id="field_2" type="hidden" name="field_2" value="<?php //echo  $_GET['t1'];?>" /></tr>
-->

<tr><td>Name:</td><td><?php echo $_SESSION['username']; ?> </td></tr>
<tr><td>Designation:</td><td><?php echo $_SESSION['designation']; ?> </td></tr>
<tr><td>Date of birth:</td><td><?php echo $_SESSION['dob'];?></td></tr>
<!--
<tr><td>Name:</td><td><?php //echo $_GET['t1']; ?> </td></tr>
<tr><td>Designation:</td><td><?php //echo $_GET['t2']; ?> </td></tr>-->


<tr><td>Gender:</td><td><?php echo $_SESSION['gender']; ?></td></tr>
<tr><td>Date of joining:</td><td><?php echo $_SESSION['doj']; ?></td></tr>
<tr><td>Primary phone:</td><td><?php echo $_SESSION['phone']; ?></td></tr>
<tr><td>Secondary phone:</td><td><?php echo $_SESSION['secondary_phone']; ?></td></tr>
<tr><td>Official email:</td><td><?php echo $_SESSION['email']; ?></td></tr>
<tr><td>Personal_email:</td><td><?php echo $_SESSION['personal_email']; ?></td></tr>
<tr><td>Temporary_address:</td><td><?php echo $_SESSION['temp_address']; ?></td></tr>
<tr><td>Permanent_address:</td><td><?php echo $_SESSION['permanent_address']; ?></td></tr>
<tr><td>Skype_id:</td><td><?php echo $_SESSION['skype_id']; ?></td></tr>
<tr><td>Due_month_for_appraisal:</td><td><?php echo $_SESSION['due_month_for_appraisal']; ?></td></tr>
<tr><td>Remarks:</td><td><?php echo $_SESSION['remark']; ?></td></tr>
<!--Message <br><textarea rows="10" cols="50" maxlength="100" name="message"></textarea><br>-->

</table>
</center>

</form>
</div>






</div>


<div id="footer">

<div class="social_site">
<img src="images/fbicon.jpg" />
</div>
</div>


</div>

</body>
</html>


<?php
session_destroy();
?>