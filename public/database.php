<?php

session_start(); 
class EmpDatabase {
	
	
	public $select;
	

	private $connection;
	public $last_query, $show_query;
	public $name, $designation, $dob, $gender, $doj, $phone, $alt_phone, $email, $alt_email, $temp_address, $address, $skypeid, $month_appraisal, $remark, $typeofleave, $reason, $fdate, $tdate, $of_approval, $approval, $reason_disapproval, $leavebalance, $eid, $job_title, $functional, $willing, $problem_solving, $ability, $management, $ability_work, 
$honesty, $productivity, $workquality, $technicalskills, $teamspirit, $cooperation, $regularity, $attitude, $attendance, $employee_id, $hcoment;
	
	
  function __construct() {
  		
		if(isset($_POST['submit'])&& $_POST['submit']=="GO"){
		$this->select=$_POST['id'];
		}
		
		if(isset($_POST['submit2'])&& $_POST['submit2']=="Apply"){
		$this->name=$_POST['name'];
		$this->typeofleave=$_POST['leave_type'];
		$this->reason=$_POST['reason'];
		$this->fdate=$_POST['from_date'];
		$this->tdate=$_POST['to_date'];
		/*$this->of_approval=$_POST['status'];
		$this->approval=$_POST['approval'];
		$this->reason_disapproval=$_POST['reason_disapproval'];
		$this->leavebalance=$_POST['leave_balance'];
		$this->remark=$_POST['remark'];*/
		}
  
  	    if(isset($_POST['submit1'])&& $_POST['submit1']=="Add Employee"){
		
		//$this->selectindex=$_POST['selectindex'];
		$this->name = $_POST['name']; 
		$this->designation = $_POST['designation'];
		$this->dob = $_POST['dob'];
		$this->gender = $_POST['gender'];
		$this->doj = $_POST['doj'];
		$this->phone= $_POST['phone'];
		$this->alt_phone =$_POST['alt_phone'];
		$this->email = $_POST['email'];
		$this->alt_email = $_POST['alt_email']; 
		$this->temp_address = $_POST['temp_address'];
		$this->address = $_POST['address'];
		$this->skypeid = $_POST['skypeid'];
		$this->month_appraisal = $_POST['month_appraisal'];
		$this->remark = $_POST['remark'];
  }
  
  		if(isset($_POST['submit3'])&& $_POST['submit3']=="Submit"){
		$this->name=$_POST['name'];
		}
		
		if(isset($_POST['submit4'])&& $_POST['submit4']=="submit"){
			$this->eid=$_POST['eid'];
			
			$this->job_title=$_POST['job_title'];
			$this->functional=$_POST['functional'];
			$this->willing=$_POST['willing'];
			$this->problem_solving=$_POST['problem_solving'];
			$this->ability=$_POST['ability'];
			$this->management=$_POST['management'];
			$this->ability_work=$_POST['ability_work'];
		}
		
		if(isset($_POST['submit6'])&& $_POST['submit6']=="Submit"){
		$this->honesty=$_POST['honesty']; 
		$this->productivity=$_POST['productivity'];
		$this->workquality=$_POST['workquality'];
		$this->technicalskills=$_POST['technicalskills'];
		$this->teamspirit=$_POST['teamspirit'];
		$this->cooperation=$_POST['cooperation'];
		$this->regularity=$_POST['regularity'];
		$this->attitude=$_POST['attitude'];
		$this->attendance=$_POST['attendance'];
		$this->remark = $_POST['remark'];
		$this->review= $_POST['review'];
		$this->name = $_POST['name'];
		$this->employee_id=$_POST['employee_id'];
		$this->hcoment=$_POST['C_honesty'];
		$this->honesty=$this->honesty.$this->hcoment;
		}
  		
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

	

	
	
	
	public function insert_record(){
		
		$this->last_query = "INSERT INTO add_emp(name,designation,dob,gender,doj,phone,secondary_phone,email,personal_email,temp_address,permanent_address,skype_id,due_month_for_appraisal,remark)VALUES('$this->name','$this->designation','$this->dob','$this->gender','$this->doj','$this->phone','$this->alt_phone','$this->email','$this->alt_email','$this->temp_address','$this->address','$this->skypeid','$this->month_appraisal','$this->remark')";
		
		
		
		
		
		$result = mysql_query($this->last_query, $this->connection);
		if($result)
			{
				
				//echo "Successfully updated database";
				$_SESSION['message']="Record Added Succesfully";
			}
			else
			{
			 //die('Error: '.mysql_error());
			 $_SESSION['message']=mysql_error();
			}
			mysql_close($this->connection);
			header('Location: http://localhost/EmpMngSyS/public/addemp.php?');
 			
}


public function show_record(){

		$this->show_query = "SELECT * FROM add_emp WHERE employee_id='$this->select'";
		$retval = mysql_query( $this->show_query, $this->connection);
		if(! $retval )
		{
		  die('Could not get data: ' . mysql_error());
		}
		//$row = mysql_fetch_assoc($retval)
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
			/*echo "EMP ID :{$row['employee_id']}  <br> ".
				 "EMP NAME : {$row['name']} <br> ".
				 "EMP DESIGNATION : {$row['designation']} <br> ".
				 "EMP DATE OF BIRTH: {$row['dob']}<br>".
				 "GENDER: {$row['gender']}<br>";
				// "--------------------------------<br>";
				 $name1=$row['employee_id'];
				 echo $name1;
				 $t1=$row['name'];				 
				 $t2=$row['designation'];*/
				 
				 
					$_SESSION['username'] = $row['name'];
					$_SESSION['designation'] = $row['designation'];
					$_SESSION['dob'] = $row['dob'];
					$_SESSION['gender'] = $row['gender'];
					$_SESSION['doj'] = $row['doj'];
					$_SESSION['phone'] = $row['phone'];
					$_SESSION['secondary_phone'] = $row['secondary_phone'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['personal_email'] = $row['personal_email'];
					$_SESSION['temp_address'] = $row['temp_address'];
				 	$_SESSION['permanent_address'] = $row['permanent_address'];
					$_SESSION['skype_id'] = $row['skype_id'];
					$_SESSION['due_month_for_appraisal'] = $row['due_month_for_appraisal'];
					$_SESSION['remark'] = $row['remark'];
					echo "its tracking form";
		} 
		mysql_free_result($retval);
		//echo "Fetched data successfully\n";
		mysql_close($this->connection);
		header('Location: http://localhost/EmpMngSyS/public/viewemp.php?');
		//header('Location: http://localhost/EmpMngSyS/public/viewemp.php?t1='.$t1.'&t2='.$t2);
		
}
	
	
	
	public function apply_leave(){
		
		
		
		
		$this->last_query = "INSERT INTO `emp_leave`(`name`,`typeofleave`,`reason`,`fdate`,`Tdate`)VALUES('$this->name','$this->typeofleave','$this->reason','$this->fdate','$this->tdate')";
		
		
		
		$result = mysql_query($this->last_query, $this->connection);
		if($result)
			{
				//echo "helloooooooooo";
				//echo "Successfully updated database";
				$_SESSION['message']="Apply leave Succesfully";
			}
			else
			{
			 //die('Error: '.mysql_error());
			 $_SESSION['message']=mysql_error();
			 //$_SESSION['message']="failed";
			
			}
			mysql_close($this->connection);
			
			header('Location: http://localhost/EmpMngSyS/public/apply_leave.php?');
 			
}

public function view_leave(){

		$this->show_query = "SELECT * FROM emp_leave WHERE name='$this->name'";
		$retval = mysql_query( $this->show_query, $this->connection);
		if(! $retval )
		{
		  die('Could not get data: ' . mysql_error());
		}
		//$row = mysql_fetch_assoc($retval)
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{
							 
					
					$_SESSION['name'] = $row['name'];
					$_SESSION['typeofleave'] = $row['typeofleave'];
					$_SESSION['reason'] = $row['reason'];
					$_SESSION['fdate'] = $row['fdate'];
					$_SESSION['tdate'] = $row['Tdate'];
					$_SESSION['status'] = $row['status'];
					$_SESSION['approval'] = $row['approval'];
					$_SESSION['reason_disapproval'] = $row['reason_disapproval'];
					$_SESSION['leavebalance'] = $row['leavebalabce'];
					
					$_SESSION['remark'] = $row['remark'];
		} 
		mysql_free_result($retval);
		mysql_close($this->connection);
		header('Location: http://localhost/EmpMngSyS/public/viewleave.php?');

} 

public function add_appraisal(){
		$this->last_query = "insert into
			appraisal(eid,job_tital,functional_know,willing,problem_solving,ability,management,ability_work)
			values('$this->eid','$this->job_title','$this->functional','$this->willing','$this->problem_solving',
			'$this->ability','$this->management','$this->ability_work')";
		
		
		
		
		
		$result = mysql_query($this->last_query, $this->connection);
		if($result)
			{
				
				//echo "Successfully updated database";
				$_SESSION['message']="Appraisal Added Succesfully";
			}
			else
			{
			 //die('Error: '.mysql_error());
			 $_SESSION['message']=mysql_error();
			}
			mysql_close($this->connection);
			header('Location: http://localhost/EmpMngSyS/public/appraisal.php?');

}

public function add_performance(){
		
		$this->last_query = "INSERT INTO `performance`(`employee_id`, `name`, `honesty`, `productivity`, `workquality`, `technicalskills`, `teamspirit`, `cooperation`, `regularity`, `attendance`, `attitude`, `remark`, `review`) VALUES ('$this->name', '$this->employee_id','$this->honesty','$this->productivity','$this->workquality','$this->technicalskills','$this->teamspirit','$this->cooperation','$this->regularity','$this->attitude','$this->attendance','$this->remark','$this->review')";
		
		
		
		
		
		$result = mysql_query($this->last_query, $this->connection);
		if($result)
			{
				
				//echo "Successfully updated database";
				$_SESSION['message']="Your Review Added Succesfully";
			}
			else
			{
			 //die('Error: '.mysql_error());
			 $_SESSION['message']=mysql_error();
			}
			mysql_close($this->connection);
			header('Location: http://localhost/EmpMngSyS/public/tracking.php?');
 			
}

		
}

$database = new EmpDatabase();
$db =& $database;


if(isset($_POST['submit1'])&& $_POST['submit1']="Add Employee"){
$db->insert_record();}


if(isset($_POST['submit'])&& $_POST['submit']="GO"){
$db->show_record();}

if(isset($_POST['submit2'])&& $_POST['submit2']="Apply"){
$db->apply_leave();}

if(isset($_POST['submit3'])&& $_POST['submit3']="Submit"){
$db->view_leave();}

if(isset($_POST['submit4'])&& $_POST['submit4']="submit"){
$db->add_appraisal();}

if(isset($_POST['submit6'])&& $_POST['submit6']="Submit"){
$db->add_performance();}
?>     