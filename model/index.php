<?php 
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
?>
<?php session_start();
	include_once('../model/connnection-class.php');
 ?>

<?php
$dbconnection = new DbConnection();

$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);
if (isset($_REQUEST['codetorun'])){


if ( $_REQUEST['codetorun'] == "0" ){

if (isset($_REQUEST['user_name']) && isset($_REQUEST['password']))
{

$user_name		 = $_REQUEST['user_name'];
$password  		 = md5($_REQUEST['password']);
$user_name	     = "'".$user_name."'";
$password	     = "'".$password."'";
}
$arrayofcolumn = array('user_name');

$arrayofcolumnwhere = array('user_name' =>$user_name,'password'=>$password);
$result = $dbconnection -> selectFromTable("user_login",$arrayofcolumn,$arrayofcolumnwhere);

if ($result == 'You are not logged in'){
	echo $result;
} else {
	echo "welcome,   ".$_SESSION['username']  = $result;

		$arrayofregcolumn = array('user_id');
		$arrayofregcolumnwhere = array('user_name'=>"'".$result."'");
		$user_id = $dbconnection->selectFromTable1("user_login",$arrayofregcolumn,$arrayofregcolumnwhere);
		$_SESSION['userid'] = $user_id;
		$arrayofregcolumn = array('blog_id');
		$arrayofregcolumnwhere = array('user_id'=>"'".$_SESSION['userid']."'");
		$blog_id = $dbconnection->selectFromTable1("blog_info",$arrayofregcolumn,$arrayofregcolumnwhere);
		$_SESSION['blogid'] =$blog_id;
}

}else if ( $_REQUEST['codetorun'] == "registerme" ){

if (isset($_REQUEST['reg_user_name']) && isset($_REQUEST['reg_password']) &&
isset($_REQUEST['reg_first_name']) && isset($_REQUEST['reg_last_name']) && 
isset($_REQUEST['reg_email']) && isset($_REQUEST['reg_dob'])&&
isset($_REQUEST['reg_age']) && isset($_REQUEST['t1'])) {


		$t1 = $_REQUEST['t1'];

		if (isset($_SESSION['match'])){
			$cap = $_SESSION['match'];
		}
		if ($t1==$cap){
			
		}
		else{
			echo "3";
			exit();
		}


		$reg_user_name = "'" .strip_tags($_REQUEST['reg_user_name']). "'";
		$reg_password = md5(strip_tags($_REQUEST['reg_password']));
		$reg_password = "'".strip_tags($reg_password). "'";
		$reg_first_name = "'".strip_tags($_REQUEST['reg_first_name']). "'";
		$reg_last_name = "'".strip_tags($_REQUEST['reg_last_name']). "'";
		$reg_email= "'" .strip_tags($_REQUEST['reg_email'])."'";
		$reg_address= "'" .strip_tags($_REQUEST['reg_address'])."'";
		$reg_phone= "'".strip_tags($_REQUEST['reg_phone']). "'";
		$reg_dob= "'".strip_tags($_REQUEST['reg_dob']). "'";
		$reg_age= "'" .strip_tags($_REQUEST['reg_age'])."'";
		$reg_gender = "'" .strip_tags($_REQUEST['reg_gender'])."'";	
		$reg_country = "'" .strip_tags($_REQUEST['reg_country'])."'";	

		/*
		$arrayofregcolumn = array('email_id');
		$result4 = $dbconnection->regSelect("users",$arrayofregcolumn);
		if($result4 == '1'){
			echo 'Email-ID already registered with us';
		} */
		$arrayofregcolumn = array('user_id');
		$arrayofregcolumnwhere = array('user_name'=>$reg_user_name);
		$result = $dbconnection->regSelect("users",$arrayofregcolumn,$arrayofregcolumnwhere);
		
		if($result == '1'){
			echo 'user already exists';
		}
		else if ($result == "f"){
		
			$arrayofcolumninsert = array('user_name' =>$reg_user_name, 'password' => $reg_password
			, 'first_name' => $reg_first_name, 'last_name' => $reg_last_name,
			'date_of_birth' => $reg_dob, 'phone' => $reg_phone
			, 'address' => $reg_address, 'country' => $reg_country,'gender' => $reg_gender,
			 'date_of_deletion' => '""', 'email_id' => $reg_email,'age' =>$reg_age);
			
			$result1 = $dbconnection -> insertIntoTable("users",$arrayofcolumninsert);
			
			$arrayofregcolumn1 = array('user_id');
			$arrayofregcolumnwhere1 = array('user_name' =>$reg_user_name);
			$id = $dbconnection->selectFromTable1("users",$arrayofregcolumn1,$arrayofregcolumnwhere1);
			$arrayofcolumninsert1 = array('user_name' =>$reg_user_name, 'password' => $reg_password,'user_id'=>$id);
			 $result2 = $dbconnection -> insertIntoTable("user_login",$arrayofcolumninsert1); 
			if($result1 == "registered" && $result2 == "registered")
				{
				    echo "1";
				}
			else
				{
				    echo "2";
				}
		}

}
}
}

$dbconnection ->closeConnection();
 ?>