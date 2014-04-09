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

<div class="appraisal">

<form action="database.php" method="post">
    <table align="center">
    <tr><td>EMPLOYEE ID</td><td><input type="text" name="eid" /></td></tr>
    <tr><td>JOB TITLE:</td><td><input type="text" name="job_title" /></td></tr>
    <tr><td>FUNCTIONAL KNOWLEDGE LEVEL:</td><td><select name="functional"><option value="no">-----------</option>
    																	<option value="Expert">EXPERT</option>
                                                                        <option value="Good">GOOD</option>
                                                                        <option value="Satifactory">SATISFACTORY</option>
                                                                        </select></td></tr>
     <tr><td>WILLING AND ENTHUSIAMS DURING WORK:</td><td><select name="willing"><option value="no">------</option>
     													 <option value="Dedicated">FULL DEDICATION</option>	
                                                         <option value="PARTIAL">PARTIAL DEDICATION</option>
                                                         <option value="SLOW">SLOW WORKING</option>
                                                          </select></td></tr>
     <tr><td>PROBLEM SOLVING CAPABILITIES:</td><td><select name="problem_solving"><option value="no">-------</option>
     											                                  <option value="Excel">EXECELLENT</option>
                                                   								  <option value="Good">GOOD</option>
                                                   								  <option  value="not">NOT SATISFACTORY
                                                                                  </option>
                                                  								 </select></td></tr>
       <tr><td>ABILITY TO TAKE INITIATIVE:</td><td><input type="text" name="ability" /></td></tr>
       <tr><td>MANAGEMENT/LEADERSHIP SKILLS:</td><td><input type="checkbox" name="management" value="yes" />Yes
       <input type="checkbox" name="management" value="no" />No</td></tr>
       <tr><td>ABILITY TO WORK UNDER PRESSURE</td><td><input type="checkbox" name="ability_work" value="yes" />Yes
       <input type="checkbox" name="ability" value="no" />no</td></tr>
      <tr><td><td><input type="submit"  name="submit4" value="submit" /></td></td></tr>
      
     <tr><td bgcolor="#FF66FF"> <?php echo $_SESSION['message'];?></td></tr>
    </table>
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