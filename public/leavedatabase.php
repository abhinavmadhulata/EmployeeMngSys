<?php
class Apply_leave{
	private $connection;
	public $last_query;
	public $name,$types_of_leaves,$reason,$from,$official,$approval,$disapproval,$leave_balance,$remarks;
	
	function __construct(){
		/*if(isset($_POST['submit'])&& $_POST['submit']="submit"){
			$this->name=$_POST['name'];
			$this->types_of_leaves=$_POST['types_of_leaves'];
			$this->reason=$_POST['reason'];
			$this->from=$_POST['from'];
			$this->official=$_POST['official'];
			$this->approval=$_POST['approval'];
			$this->disapproval=$_POST['disapproval'];
			$this->leave_balance=$_POST['leave_balance'];
			$this->remarks=$_POST['remarks'];
		}*/
		$this->open_connection();
	}
	public function open_connection(){
		define('DB_NAME','employee');
		define('DB_HOST','localhost');
		define('DB_USER','root');
		define('DB_PASS','');
		$this->connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
		if(!$this->connection){
			die("Database connection Failed:" .mysql_error());
		}else{
			$db_select=mysql_select_db(DB_NAME,$this->connection);
			if(!$db_select){
				die("Database selection failed: " . mysql_error());
			}
		}
	}
	
	public function close_connection() {
		if(isset($this->connection)) {
			mysql_close($this->connection);
			unset($this->connection);
		}
	}
	
	public function query($sql) {
		$this->last_query = $sql;
		$result = mysql_query($sql, $this->connection);
		$this->confirm_query($result);
		return $result;
	}
	
	function insert_record(){
			$this->last_query="insert into leave(name,typeofleave,reason,fromdate,todate,officialapproval,approval,reasonofdisapproval,leavebalance,remark)values('abhinav','casual','illness','','','checked','approved','nothing','','')";
							   
			$result = mysql_query($this->last_query,$this->connection);
			if($result){
				echo("database updated successfully");
			}else{
				echo('Error:'.mysql_error());
			 }
			mysql_close($this->connection);
	}
			

}
 $apply= new Apply_leave();
 $db =& $apply;
 $db->insert_record();
?>