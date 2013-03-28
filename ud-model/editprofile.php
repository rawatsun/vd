<?php session_start();
	include_once('../ud-model/connnection-class.php');
 ?>

<?php 
if (isset($_REQUEST['element_1'])){
$firstname =  $_REQUEST['element_1'];
}

if (isset($_REQUEST['element_2'])){
$lastname =  $_REQUEST['element_2'];
}

if (isset($_REQUEST['element_3'])){
$dob =  $_REQUEST['element_3'];
}

if (isset($_REQUEST['element_4'])){
$address =  $_REQUEST['element_4'];
}

if (isset($_REQUEST['element_5'])){
$phone =  $_REQUEST['element_5'];
}

if (isset($_REQUEST['element_6'])){
$country =  $_REQUEST['element_6'];
}
if (isset($_REQUEST['element_7'])){
$email =  $_REQUEST['element_7'];
}

?>
<?php
$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse("localhost","visiondart","root","root");
$username = "";
if(isset($_SESSION['username']))
{
$username = $_SESSION['username'];
}
$username	    = "'".$username."'";

	$firstname = "'".$firstname."'";
$lastname = "'".$lastname. "'";
$email= "'" .$email."'";
$address= "'" .$address."'";
$phone= "'".$phone. "'";
$dob= "'".$dob. "'";
$country = "'" .$country."'";



$arrayofcolumnupdate = array('first_name' =>$firstname , 'last_name' =>$lastname ,
 'phone' =>$phone, 'address' =>$address, 'date_of_birth' =>$dob, 'country' =>$country, 'email_id' =>$email);
$arrayofcolumnupdatewhere = array('user_name' =>$username);
$result = $dbconnection->updateToTable("users",$arrayofcolumnupdate,$arrayofcolumnupdatewhere);

if ($result == "1"){
echo "1";
}
else{
echo "2";
}

 
  ?>

