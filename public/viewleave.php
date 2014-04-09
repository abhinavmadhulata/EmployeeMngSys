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

<div class="viewleave">


<form method="POST" action="database.php">

<center><table>
<tr><td>Enter Employee name:</td><td><input type="text" name="name"  /><input type="submit" value="Submit" name="submit3"  /></td></tr>
<tr><td>Name:</td><td><?php echo $_SESSION['name']; ?></td></tr>
<tr><td>Type of leave:</td><td><?php echo $_SESSION['typeofleave']; ?></td></tr>
<tr><td>Define the reason:</td><td><?php echo $_SESSION['reason']; ?></td></tr>
<tr><td>From Date:</td><td><?php echo $_SESSION['fdate']; ?></td><td>TO Date:<?php echo $_SESSION['tdate']; ?></td></tr>
<tr><td>Status of official action:<?php echo $_SESSION['status']; ?></td></tr>
<tr><td>Approved or disapproved:</td><td><?php echo $_SESSION['approval']; ?></td></tr>
<tr><td>Reason if disapproved:</td><td><?php echo $_SESSION['reason_disapproval']; ?></td></tr>
<tr><td>Leave balance:</td><td><?php echo $_SESSION['leavebalance']; ?></td></tr>

<tr><td>Remarks of the reporting manager:</td><td> <?php echo $_SESSION['remark']; ?></td></tr>







</table></center>


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


