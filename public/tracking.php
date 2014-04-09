<?php session_start(); 
  error_reporting(null);
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EMPLOYEE MANAGEMENT SYSTEM</title>
<link href="stylesheet/style1.css" rel="stylesheet" type="text/css">

<style type="text/css">
#container{
width:995px;
height:700px;
background:#FFFFFF;
padding-top:10px;
}


</style>

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

<div class="htitle">
<h1 align="center" >EMPLOYEE PERFORMANCE TRACKER<h1>

</div>
<div class="info">
<table>
<tr><td>Employee: </td><td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?></td><td><?php 
$data1 = $_GET['t1']; 
$data2 = $_GET['t2'];$data3=$_GET['t']; echo $data1;
?></td></tr>
<tr><td>Designation: </td><td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?></td><td><?php /*$k=$_SESSION['i'];*/ echo $data2; ?></td></tr>
<tr><td>Reviewer: </td><td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?></td><td></td></tr>
<tr><td>Date: </td><td><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?></td><td> <?php echo date("d/m/y"); ?></td></tr>

</table>
</div>



<hr noshade size=1 width="100%">
<div class="rating">
<form action="database.php" method="post" >
<table>

<tr><th></th><th>EXCELLENT<?php echo "&nbsp;&nbsp;";?> </th><th>GOOD<?php echo "&nbsp;&nbsp;";?> </th><th>FAIR <?php echo "&nbsp;&nbsp;";?></th><th>POOR <?php echo "&nbsp;&nbsp;";?></th><th>COMMENT </th>
</tr>
<tr><td>Honesty :</td><td><input type="checkbox" name="honesty" value="excelent" /></td>
       <td><input type="checkbox" name="honesty" value="good" /></td><td><input type="checkbox" name="honesty" value="fair" /></td><td><input type="checkbox" name="honesty" value="poor" /></td><td><input type="text" name="C_honesty" /></td>
</tr>
<tr><td>Productivity :</td><td><input type="checkbox" name="productivity" value="excelent" /></td>
       <td><input type="checkbox" name="productivity" value="good" /></td><td><input type="checkbox" name="productivity" value="fair" /></td><td><input type="checkbox" name="productivity" value="poor" /></td><td><input type="text" name="C_productivity" /></td>
</tr>
<tr><td>Work Quality :</td><td><input type="checkbox" name="workquality" value="excelent" /></td>
       <td><input type="checkbox" name="workquality" value="good" /></td><td><input type="checkbox" name="workquality" value="fair" /></td><td><input type="checkbox" name="workquality" value="poor" /></td><td><input type="text" name="C_workquality" /></td>
</tr>
<tr><td>Technical Skills :<?php echo "&nbsp;&nbsp;";?></td><td><input type="checkbox" name="technicalskills" value="excelent" /></td>
       <td><input type="checkbox" name="technicalskills" value="good" /></td><td><input type="checkbox" name="technicalskills" value="fair" /></td><td><input type="checkbox" name="technicalskills" value="poor" /></td><td><input type="text" name="C_technicalskills" /></td>
</tr>
<tr><td>Team Spirit :</td><td><input type="checkbox" name="teamspirit" value="excelent" /></td>
       <td><input type="checkbox" name="teamspirit" value="good" /></td><td><input type="checkbox" name="teamspirit" value="fair" /></td><td><input type="checkbox" name="teamspirit" value="poor" /></td><td><input type="text" name="C_teamspirit" /></td>
</tr>
<tr><td>Cooperation :</td><td><input type="checkbox" name="cooperation" value="excelent" /></td>
       <td><input type="checkbox" name="cooperation" value="good" /></td><td><input type="checkbox" name="cooperation" value="fair" /></td><td><input type="checkbox" name="cooperation" value="poor" /></td><td><input type="text" name="C_cooperation" /></td>
</tr>
<tr><td>Regularity :</td><td><input type="checkbox" name="regularity" value="excelent" /></td>
       <td><input type="checkbox" name="regularity" value="good" /></td><td><input type="checkbox" name="regularity" value="fair" /></td><td><input type="checkbox" name="regularity" value="poor" /></td><td><input type="text" name="C_regularity" /></td>
</tr>
<tr><td>Attendance :</td><td><input type="checkbox" name="attendance" value="excelent" /></td>
       <td><input type="checkbox" name="attendance" value="no" /></td><td><input type="checkbox" name="attendance" value="fair" /></td><td><input type="checkbox" name="attendance" value="poor" /></td><td><input type="text" name="C_attendance" /></td>
</tr>
<tr><td>Attitude :</td><td><input type="checkbox" name="attitude" value="excelent" /></td>
       <td><input type="checkbox" name="attitude" value="good" /></td><td><input type="checkbox" name="attitude" value="fair" /></td><td><input type="checkbox" name="attitude" value="poor" /></td><td><input type="text" name="C_attitude" /></td>
</tr>
<tr><td>Remark :</td><td><input type="checkbox" name="remark" value="excelent" /></td>
       <td><input type="checkbox" name="remark" value="good" /></td><td><input type="checkbox" name="remark" value="fair" /></td><td><input type="checkbox" name="remark" value="poor" /></td><td><input type="text" name="C_remark" /></td>
</tr>
</table>
<table><tr><td>Your Review :</td><td><textarea name="review" rows="4" cols="50"></textarea></td></tr>
<tr><input type="hidden" name="name" value='$data1'  /></tr>
<tr><input type="hidden" name="employee_id" value='$data3'  /></tr>
<tr><td><input type="submit" name="submit6" value="Submit"  /></td></tr>
<tr><td><?php echo $_SESSION['message']; ?></td></tr>

</table>


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