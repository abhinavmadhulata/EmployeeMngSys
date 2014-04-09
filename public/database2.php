<?php

session_start(); 
class PerformanceDatabase {
	
	
	

	private $connection;
	public $last_query, $show_query;
	/*public $name, $designation, $dob, $gender, $doj, $phone, $alt_phone, $email, $alt_email, $temp_address, $address, $skypeid, $month_appraisal, $remark, $typeofleave, $reason, $fdate, $tdate, $of_approval, $approval, $reason_disapproval, $leavebalance, $eid, $job_title, $functional, $willing, $problem_solving, $ability, $management, $ability_work;
	*/
	
  function __construct() {
  		
		
  		
    $this->open_connection();
		  }

	public function open_connection() {
		/*define('DB_NAME', 'employee');
		define('DB_HOST', 'localhost');
		define('DB_USER','root');
		define('DB_PASS','');*/
		//$this->connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
		$this->connection = mysql_connect('localhost', 'root', '');
		if (!$this->connection) {
			die("Database connection failed: " . mysql_error());
		} else {
			$db_select = mysql_select_db('employee', $this->connection);
			if (!$db_select) {
				die("Database selection failed: " . mysql_error());
			}
		}
	}

	

	
	

public function performance(){
		$this->show_query = "SELECT `employee_id`, `name`, `designation` FROM `add_emp`";
	
		$retval = mysql_query( $this->show_query, $this->connection);
		if(! $retval )
		{
		  die('Could not get data: ' . mysql_error());
		}
		//$row = mysql_fetch_assoc($retval)
		$i=0;
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
					/*$_SESSION['id'][$i] = $row['employee_id'];	 
					$_SESSION['name'][$i] = $row['name'];
					$_SESSION['designation'][$i] = $row['designation'];*/
					$t=$row['employee_id'];
					$t1=$row['name'];
					$t2=$row['designation'];
					/*$i++;	*/echo "<br/>";
					echo $row['employee_id'];
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo $row['name'];echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo $row['designation'];echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "<a href='http://localhost/EmpMngSyS/public/tracking.php?t1=$t1&t2=$t2 '>GO</a>";
					echo "<br/>";echo "<br/>";
					
					//<a href="webpage.php?variable1=value1&variable2=value2">Link To</a> 
					
					
					
						
		} 
		
		mysql_free_result($retval);
		//echo "Fetched data successfully\n";
		mysql_close($this->connection);
		//header('Location: http://localhost/EmpMngSyS/public/performance.php?');
		}
		}
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
<!--<li><a href="#">Rating</a></li>-->
<li><a href="http://localhost/EmpMngSyS/public/database2.php"> Rating</a></li>
</ul>

</div>


<div id="performance">
<h4>EMPLOYEE PERFORMANCE TRACKER</h4>
<table><tr><td>E_id</td><td>Name</td><td>Designation</td></tr></table>
 <?php 
//function __autoload($class_name) {
function __autoload($class_name) {
  require_once $class_name.'PerformanceDatabase';
}
error_reporting(null);



$db = new PerformanceDatabase();	



$db->performance();

?>
    

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




