 <?php session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/vision/trunk/library/common.inc.php');
	include_once('../admin-model/connnection-class.php');
	
$dbconnection = new DbConnection();
$dbconnection -> connectToDatabse(HOST,DB_NAME,UNAME,DB_PASSWORD);

$name="";
if (isset($_GET["name"])){

$name="like "."'".$_GET["name"]."%'"  ;

}

$arrayofcolumn = array('user_name');

$arrayofcolumnwhere = array('user_name' =>$name );

$user_name = $dbconnection -> selectFromTable1("user_login",$arrayofcolumn,$arrayofcolumnwhere );


// Set output to "no suggestion" if no hint were found
// or to the correct values

//output the response
echo $user_name;
?>
