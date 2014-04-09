<?php
		echo "hello...";
		define('DB_NAME', 'employee');
		define('DB_HOST', 'localhost');
		define('DB_USER','root');
		define('DB_PASSWORD','');
		 $name; $designation; $dob; //$gender, $doj, $phone, $alt_phone, $email, $alt_email, $temp_address, $address, $skypeid, $month_appraisal, $remark, $selectindex;
		echo $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
		
		$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
		//echo $name=$_POST['name'];
		//$name=$_POST['name']; 
		if(isset($_POST['submit'])&& $_POST['submit']="Add Employee"){
		
		if(isset($_POST['name'])){ $name = $_POST['name']; }
		if(isset($_POST['designation'])){$designation = $_POST['designation'];}
		if(isset($_POST['dob'])){$dob = $_POST['dob'];}
		if(isset($_POST['gender'])){$gender = $_POST['gender'];}
		if(isset($_POST['doj'])){$doj = $_POST['doj'];}
		if(isset($_POST['phone'])){$phone= $_POST['phone'];}
		if(isset($_POST['alt_phone'])){$alt_phone =$_POST['alt_phone'];}
		if(isset($_POST['email'])){$email = $_POST['email'];}
		if(isset($_POST['alt_email'])){$alt_email = $_POST['alt_email']; }
		if(isset($_POST['temp_address'])){$temp_address = $_POST['temp_address'];}echo "hello..mishra ji"; 
		$address = $_POST['address'];
		$skypeid = $_POST['skypeid'];
		$month_appraisal = $_POST['month_appraisal'];
		$remark = $_POST['remark'];
		
		
		
		}
		echo "hello..mishra ji";
		 $query = "INSERT INTO add_emp(name,designation,dob,gender,doj,phone,secondary_phone,email,personal_email,temp_address,permanent_address,skype_id,due_month_for_appraisal,remark)VALUES('$name', '$designation', '$dob', '$gender', '$doj', '$phone', '$alt_phone', '$email', '$alt_email', '$temp_address', '$address', '$skypeid', '$month_appraisal', '$remark')";
		$result = mysql_query($query);
		if($result)
			{
				
				echo "Successfully updated database";
			}
			else
			{
			 die('Error: '.mysql_error($con));
			}
			mysql_close($con);
 




/*//connecting to the database
define('DB_NAME', 'employee');
dedefine('DB_HOST', 'localhost');
fine('DB_USER','root');
define('DB_PASSWORD','');
 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database
$name = $_POST['name'];
$email = $_POST['email'];
$message =  $_POST['message'];
 
$query = "INSERT INTO contact(contactName,contactEmail,message)VALUES('$name','$email','$message')";
$result = mysql_query($query);
if($result)
    {
        echo "Successfully updated database";
    }
    else
    {
     die('Error: '.mysql_error($con));
    }
    mysql_close($con);
*/





?>


