
<?php session_start(); ?>
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

<div class="addemployee">

<form method="POST" action="database.php">
<?php error_reporting(null); ?>
<center><table>

<tr><td>Name</td><td> <input type="text" name="name"></td></tr>
<tr><td>Designation</td> <td>
<select name="designation">
<option value="trainee">Trainee</option>
<option value="developer">Developer</option>
<option value="Designer">Designer</option>
<option value="engineer">Engineer</option><option>Experience</option>
</select></td></tr>
<tr><td>Date_of_birth:</td><td><input type="date" name="dob"  />
</td></tr>
<tr><td>Gender:</td><td> <select name="gender">
<option value="male">Male</option>
<option value="female">Female</option>
</select></td></tr>
<tr><td>Date_of_joining:</td><td> <input type="date" name="doj"></td></tr>
<tr><td>
Primary_phone:</td><td> <input type="text" name="phone"></td></tr>
<tr><td>Secondary_phone:</td><td> <input type="text" name="alt_phone"></td></tr>
<tr><td>
Official_email:</td><td> <input type="email" name="email"></td></tr>
<tr><td>Personal_email:</td><td> <input type="text" name="alt_email"></td></tr>
<tr><td>Temporary_address:</td><td> <input type="text" name="temp_address"></td></tr>
<tr><td>Permanent_address:</td><td> <input type="text" name="address"></td></tr>
<tr><td>Skype_id:</td><td> <input type="text" name="skypeid"></td></tr>
<tr><td>Due_month_for_appraisal:</td><td> <input type="date" name="month_appraisal"></td></tr>
<tr><td>Remarks:</td><td> <textarea name="remark" rows="5" cols="50"></textarea> </td></tr>
<!--Message <br><textarea rows="10" cols="50" maxlength="100" name="message"></textarea><br>-->
<tr><td><input type="submit" value="Add Employee" name="submit1"></td></tr>
<tr><td bgcolor="#FF66FF"> <?php echo $_SESSION['message'];?></td></tr>
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