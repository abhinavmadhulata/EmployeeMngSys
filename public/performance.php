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
<li><a href="http://localhost/EmpMngSyS/public/apply_leave.php">Apply Leave</a></li>
<li><a href="#">Apply Bonus</a></li>
<li><a href="#">Meet Abhijeet</a></li>
<li><a href="http://localhost/EmpMngSyS/public/database2.php"> Rating</a></li>
</ul>

</div>

<div class="performance">
<?php 
$k=0;

?>
 
 <table>
 <tr><td><?php echo "E_id:".$space.$_SESSION['id'][$k];str_repeat('&nbsp;', 5);?></td><td><?php echo "Name:".$space.$_SESSION['name'][$k]; str_repeat('&nbsp;', 5);?></td><td><?php echo "Designation:".$space.$_SESSION['designation'][$k]; str_repeat('&nbsp;', 5);?></td><td><?php if($k<$_SESSION['i']){ $K++; echo "<br/>";} ?></td></tr>
 <tr><td><?php echo "E_id:".'    '.$_SESSION['id'][$k]; ?></td><td><?php echo "Name:".'    '.$_SESSION['name'][$k]; ?></td><td><?php echo "Designation:".'  '.$_SESSION['designation'][$k]; ?></td><td><?php if($k<$_SESSION['i']){ $K++;echo "<br/>";} ?></td></tr>
 <tr><td><?php echo "E_id:".'    '.$_SESSION['id'][$k]; ?></td><td><?php echo "Name:".'    '.$_SESSION['name'][$k]; ?></td><td><?php echo "Designation:".'  '.$_SESSION['designation'][$k]; ?></td><td><?php if($k<$_SESSION['i']){ $K++;echo "<br/>";} ?></td></tr>
 <tr><td><?php echo "E_id:".'    '.$_SESSION['id'][$k]; ?></td><td><?php echo "Name:".'    '.$_SESSION['name'][$k]; ?></td><td><?php echo "Designation:".'  '.$_SESSION['designation'][$k]; ?></td><td><?php if($k<$_SESSION['i']){ $K++;echo "<br/>";} ?></td></tr>
<tr> <td><?php echo "E_id:".'    '.$_SESSION['id'][$k]; ?></td><td><?php echo "Name:".'    '.$_SESSION['name'][$k]; ?></td><td><?php echo "Designation:".'  '.$_SESSION['designation'][$k]; ?></td><td><?php if($k<$_SESSION['i']){ $K++;echo "<br/>";} ?></td></tr>
<tr> <td><?php echo "E_id:".'    '.$_SESSION['id'][$k]; ?></td><td><?php echo "Name:".'    '.$_SESSION['name'][$k]; ?></td><td><?php echo "Designation:".'  '.$_SESSION['designation'][$k]; ?></td><td><?php if($k<$_SESSION['i']){ $K++;echo "<br/>";} ?></td></tr>
<tr> <td><?php echo "E_id:".'    '.$_SESSION['id'][$k]; ?></td><td><?php echo "Name:".'    '.$_SESSION['name'][$k]; ?></td><td><?php echo "Designation:".'  '.$_SESSION['designation'][$k]; ?></td><td><?php if($k<$_SESSION['i']){ $K++;echo "<br/>";} ?></td></tr>
<tr> <td><?php echo "E_id:".'    '.$_SESSION['id'][$k]; ?></td><td><?php echo "Name:".'    '.$_SESSION['name'][$k]; ?></td><td><?php echo "Designation:".'  '.$_SESSION['designation'][$k]; ?></td><td><?php if($k<$_SESSION['i']){ $K++;echo "<br/>";} ?></td></tr>
  
 
 

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
