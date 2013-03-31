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


		function selectFromTable ( $_tableName , $arrayofcolumn="",$arrayofcolumnwhere ="",$arrayofcolumnorderby="" ,$arrayofcolumngroupby="" )
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
				return $row[$arrayofcolumn]; 
			}
			else
			{
				return  'offline sorry !!';

			}
				
		//	var_dump($this->query->fetch());
		}







		function totalComment ($_tableName , $arrayofcolumn="",$arrayofcolumnwhere =""  ,$join)
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
			if ($row=$this->query->fetch()) {
				return $row[$arrayofcolumn]; 
			}
			else
			{
				return  "select $arrayofcolumn from $this->_tableName $join $str $groupby $orderby ";

			}}



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
		

				function closeConnection(){


					$this->con=null;
				}

				function loadme($user_id){
					$comment="";
				$query = $this->con->prepare("select comment_data,bc.comment_id from blog_comments bc join blog_info bf on bf.blog_id=bc.blog_id where bf.user_id=$user_id");
				$query->execute();
				$row=$query->fetch();
				$comment.= "<table>";
				$comment.= "<tr><td style=background-color:white;color:black;>";
				$comment.= $row['comment_data'] ."<a class=a1 onclick='deleteblog($row[comment_id],$user_id)' ><img src='../../ud-images/delete.gif'/></a>"  . "<br>";
				$comment.= "</tr></td>";
				while ($row=$query->fetch()) {
				$comment.= "<tr><td style=color:black;>";
				$comment.= $row['comment_data'] ."<a class=a1 onclick='deleteblog($row[comment_id],$user_id)' ><img src='../../ud-images/delete.gif'/></a>" . "<br>";
				$comment.= "</tr></td>";
				}
				$comment.= "<tr><td style=color:black;>";
				$comment.= "<textarea class=ta>
				comment
				</textarea>";
				$comment.= "<input type=button onclick='insert($user_id)' value='insert' style=color:black>";
				$comment.= "</tr></td>";
				$comment.= "</table>";
				$comment.="select comment_data,bc.comment_id from blog_comments bc join blog_info bf on bf.blog_id=bc.blog_id where bf.user_id=$user_id";
				return $comment;

					
				}


	}

 ?>