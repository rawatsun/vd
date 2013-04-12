<?php 
	class DbConnection 
	{
		private $_hostName , $_dbname, $_userName , $_password ,$con ,$query ;


		function connectToDatabse($_hostName , $_dbname ,  $_userName , $_password)
		{
			$this->_hostName = $_hostName;
			$this->_userName = $_userName;
			$this->_password = $_password;

			$this->_dbname   = $_dbname;
			$this->con = new PDO("mysql:host=$this->_hostName;dbname=$this->_dbname","$this->_userName",
								 "$this->_password") or
			die("cant connect");
		}


	function insertIntoTable($_tableName,$arrayofcolumninsert) 
		{
			$this->_tableName=$_tableName;
			$str="";
			$str2="";
			$keys="";
			$values="";
			if (empty($arrayofcolumninsert)){
			$str = "" ;
			$str2 = "" ;
			}
			else {
			foreach ($arrayofcolumninsert as $key => $value) {
			$str .=  $key . ",";
			$str2 .=  $value . ",";
			}
			$str = substr($str, 0,-1);
			$str2 = substr($str2, 0,-1);
			//echo 'insert  into  $this->_tableName($str) values($str2)';
			$this->query=$this->con -> prepare("insert  into  $this->_tableName($str) values($str2)");
			$this->query->execute();
			if ($this->query->rowCount()>0){
				return "1";
			}
			else{
				return "2";
			}

			}
		}

function regSelect( $_tableName , $arrayofcolumn="",$arrayofcolumnwhere ="",$arrayofcolumnorderby="" ,$arrayofcolumngroupby="" )
		{

			$and="and";
			$str="";
			$orderby="";
			$i=0;
			 $arrayofcolumn1= $arrayofcolumn;
			$groupby="";

			if (empty($arrayofcolumn)){
				$arrayofcolumn = "*" ;

			}
			else {
			$arrayofcolumn = implode(",", $arrayofcolumn);
			$i=count($arrayofcolumn);
			}
			if (empty($arrayofcolumnorderby)){
			$orderby = "" ;
			}
			else {

			$orderby = " order by ".implode(",", $arrayofcolumnorderby);
			$index  = count($arrayofcolumnorderby);
			$orderby = substr($orderby, 0,-4) ." ". $arrayofcolumnorderby[$index-1] ;
			
			}
			if (empty($arrayofcolumngroupby)){
			$groupby = "" ;
			}
			else {

			$groupby = " group by ".implode(",", $arrayofcolumngroupby);
			}
			if (empty($arrayofcolumnwhere)){
				$str = "" ;
			}
			else {
			foreach ($arrayofcolumnwhere as $key => $value) {
			$str .=  $key . "=" .  $value . " and ";
			}
			$str = " where " . $str ;
			$str = substr($str, 0,-4);
			}
			$this->_tableName= $_tableName;
			$this->query=$this->con -> prepare("select $arrayofcolumn from $this->_tableName $str $groupby $orderby ");
			$this->query->execute();
			//echo "select $arrayofcolumn from $this->_tableName $str $groupby $orderby ";
			if ($row=$this->query->fetch()) {

				return  "user already exists";

			}
			else
			{
			return "f";
							
			}
				
		//	var_dump($this->query->fetch());
		}


		function selectColumn( $_tableName , $arrayofcolumn="",$arrayofcolumnwhere ="",$arrayofcolumnorderby="" ,$arrayofcolumngroupby="" )
		{

			$and="and";
			$str="";
			$orderby="";
			$i=0;
			 $arrayofcolumn1= $arrayofcolumn;
			$groupby="";

			if (empty($arrayofcolumn)){
				$arrayofcolumn = "*" ;

			}
			else {
			$arrayofcolumn = implode(",", $arrayofcolumn);
			$i=count($arrayofcolumn);
			}
			if (empty($arrayofcolumnorderby)){
			$orderby = "" ;
			}
			else {

			$orderby = " order by ".implode(",", $arrayofcolumnorderby);
			$index  = count($arrayofcolumnorderby);
			$orderby = substr($orderby, 0,-4) ." ". $arrayofcolumnorderby[$index-1] ;
			
			}
			if (empty($arrayofcolumngroupby)){
			$groupby = "" ;
			}
			else {

			$groupby = " group by ".implode(",", $arrayofcolumngroupby);
			}
			if (empty($arrayofcolumnwhere)){
				$str = "" ;
			}
			else {
			foreach ($arrayofcolumnwhere as $key => $value) {
			$str .=  $key . "=" .  $value . " and ";
			}
			$str = " where " . $str ;
			$str = substr($str, 0,-4);
			}
			$this->_tableName= $_tableName;
			$this->query=$this->con -> prepare("select $arrayofcolumn from $this->_tableName $str $groupby $orderby ");
			$this->query->execute();
			//echo "select $arrayofcolumn from $this->_tableName $str $groupby $orderby ";
			if ($row=$this->query->fetch()) {

				return  "1";

			}
			else
			{
			return "2";
							
			}
				
		//	var_dump($this->query->fetch());
		}
		
		
		
		
		
		function selectFromTable ( $_tableName , $arrayofcolumn="",$arrayofcolumnwhere ="",$arrayofcolumnorderby="" ,$arrayofcolumngroupby="" )
		{
			$this->_tableName = $_tableName;
			$and="and";
			$str="";
			$orderby="";
			$i=0;
			 $arrayofcolumn1= $arrayofcolumn;
			$groupby="";

			if (empty($arrayofcolumn)){
				$arrayofcolumn = "*" ;

			}
			else {
			$arrayofcolumn = implode(",", $arrayofcolumn);
			$i=count($arrayofcolumn);
			}
			if (empty($arrayofcolumnorderby)){
			$orderby = "" ;
			}
			else {

			$orderby = " order by ".implode(",", $arrayofcolumnorderby);
			$index  = count($arrayofcolumnorderby);
			$orderby = substr($orderby, 0,-4) ." ". $arrayofcolumnorderby[$index-1] ;
			
			}
			if (empty($arrayofcolumngroupby)){
			$groupby = "" ;
			}
			else {

			$groupby = " group by ".implode(",", $arrayofcolumngroupby);
			}
			if (empty($arrayofcolumnwhere)){
				$str = "" ;
			}
			else {
			foreach ($arrayofcolumnwhere as $key => $value) {
			$str .=  $key . "=" .  $value . " and ";
			}
			$str = " where " . $str ;
			$str = substr($str, 0,-4);
			}
			$tempvar="";
			$this->_tableName= $_tableName;
			$this->query=$this->con -> prepare("select $arrayofcolumn from $this->_tableName $str $groupby $orderby ");
			$this->query->execute();
			if(trim($this->_tableName)=="login_details") {
				
				
				
				while($row=$this->query->fetch())
				{
					$tempvar .=  $row['login_time'] . ",";
				}
				return  $tempvar; 
			}
			//echo "select $arrayofcolumn from $this->_tableName $str $groupby $orderby ";
			if ($row=$this->query->fetch()) {
				return $row[$arrayofcolumn]; 
			}
			else
			{
				return  "0";

			}
				
		//	var_dump($this->query->fetch());
		}







		function jointable ($_tableName , $arrayofcolumn="",$arrayofcolumnwhere =""  ,$arrayofcolumngroupby="",$join)
		{
			$and="and";
			$str="";
			$orderby="";
			$i=0;
			 $arrayofcolumn1= $arrayofcolumn;
			$groupby="";

			if (empty($arrayofcolumn)){
				$arrayofcolumn = "*" ;

			}
			else {
			$arrayofcolumn = implode(",", $arrayofcolumn);
			$i=count($arrayofcolumn);
			}
			if (empty($arrayofcolumnorderby)){
			$orderby = "" ;
			}
			else {

			$orderby = " order by ".implode(",", $arrayofcolumnorderby);
			$index  = count($arrayofcolumnorderby);
			$orderby = substr($orderby, 0,-4) ." ". $arrayofcolumnorderby[$index-1] ;
			
			}
			if (empty($arrayofcolumngroupby)){
			$groupby = "" ;
			}
			else {

			$groupby = " group by ".implode(",", $arrayofcolumngroupby);
			}
			if (empty($arrayofcolumnwhere)){
				$str = "" ;
			}
			else {
			foreach ($arrayofcolumnwhere as $key => $value) {
			$str .=  $key . "=" .  $value . " and ";
			}
			$str = " where " . $str ;
			$str = substr($str, 0,-4);
			}
			$this->_tableName= $_tableName;
			$this->query=$this->con -> prepare("select $arrayofcolumn from $this->_tableName $join $str $groupby $orderby ");
			$this->query->execute();
			//echo "select $arrayofcolumn from $this->_tableName $str $groupby $orderby ";
			
			
			if (trim($this->_tableName) ==  "blog_comments bc" ){
	
				if ($row=$this->query->fetch()) {
					
					return $row["blog_id"];
				}	
			}
			else{
				
			
			if ($row=$this->query->fetch()) {
				return $row[$arrayofcolumn]; 
			}
			else
			{
				return  "offline sorry";

			}
			}
		}



			function profileSelect( $_tableName , $arrayofcolumn="",$arrayofcolumnwhere ="",$arrayofcolumnorderby="" ,$arrayofcolumngroupby="" )
		{

			$and="and";
			$str="";
			$orderby="";
			$i=0;
			 $arrayofcolumn1= $arrayofcolumn;
			$groupby="";

			if (empty($arrayofcolumn)){
				$arrayofcolumn = "*" ;

			}
			else {
			$arrayofcolumn = implode(",", $arrayofcolumn);
			$i=count($arrayofcolumn);
			}
			if (empty($arrayofcolumnorderby)){
			$orderby = "" ;
			}
			else {

			$orderby = " order by ".implode(",", $arrayofcolumnorderby);
			$index  = count($arrayofcolumnorderby);
			$orderby = substr($orderby, 0,-4) ." ". $arrayofcolumnorderby[$index-1] ;
			
			}
			if (empty($arrayofcolumngroupby)){
			$groupby = "" ;
			}
			else {

			$groupby = " group by ".implode(",", $arrayofcolumngroupby);
			}
			if (empty($arrayofcolumnwhere)){
				$str = "" ;
			}
			else {
			foreach ($arrayofcolumnwhere as $key => $value) {
			$str .=  $key . "=" .  $value . " and ";
			}
			$str = " where " . $str ;
			$str = substr($str, 0,-4);
			}
			$this->_tableName= $_tableName;
			$this->query=$this->con -> prepare("select $arrayofcolumn from $this->_tableName $str $groupby $orderby ");
			$this->query->execute();
			$newstr = '';
			while($row=$this->query->fetch())
			    {   
			        $newstr.="<br/><br/>";
			        $newstr.=$row['user_name']."<br/><br/>"; 
			        $newstr.=$row['first_name']."<br/><br/>";
			        $newstr.=$row['last_name']."<br/><br/>";
			        $newstr.=$row['date_of_birth']."<br/><br/>";
			        $newstr.=$row['phone']."<br/><br/>";
			        $newstr.=$row['address']."<br/><br/>";
			        $newstr.=$row['country']."<br/><br/>";
			        $newstr.=$row['email_id'];
			    }
			return $newstr;
		}

		
				function updateToTable($_tableName,$arrayofcolumntoupdate,$arrayofcolumntoupdatewhere) 
				{
					$this->_tableName = $_tableName; 
					$str="";
					$str2="";
					if (empty($arrayofcolumntoupdate ) && empty($arrayofcolumntoupdatewhere )){
					$str = "" ;
					$str2 = "";
					}
					else {
					foreach ($arrayofcolumntoupdate as $key => $value) {
					$str .=  $key . "=" .  $value . " , ";
					}
					$str = substr($str, 0,-2);

					foreach ($arrayofcolumntoupdatewhere as $key => $value) {

					$str2 .=  $key . "=" .  $value . " and ";
					}
					 $str2 = substr($str2, 0,-4);
					$this->query=$this->con -> prepare("update $this->_tableName set $str where $str2");
					$this->query->execute();
					//
					if($this->query->rowCount()>0){
						return  "1";
					}
					else{

						return "2";
					}
					//echo "update $this->_tableName set $str where $str2";
					
					}
				}
		


				function deleteFromTable($_tableName,$arrayofcolumntodelete) 
				{
					$str="";
					$str2="";
					$keys="";
					$values="";
					if (empty($arrayofcolumntodelete)){
					$str = "" ;
					
					}
					else {
					foreach ($arrayofcolumntodelete as $key => $value) {
					$str .=  $key . "=" .  $value . " and ";
					}
					$str = " where " . $str ;
					$str = substr($str, 0,-4);
					$this->query=$this->con -> prepare("delete from  $this->_tableName $str");
					$this->query->execute();
					//echo " delete from  $this->_tableName $str";
					if($this->query->rowCount()>0){
						return  "1";
					}
					else{

						return "2";
					}
					}
				}


				function closeConnection(){


					$this->con=null;
				}

			


	}

 ?>
