<?php
	class Model {
		
		public $table;
		public $id;
		
		public function read($fields=null){
			if($fields==null){		$fields="*";	}
				$sql = "SELECT $fields 
						FROM ".$this->table." 
						WHERE id=".$this->id;
				$req = mysql_query($sql) or die(mysql_error()."<br/> => ".mysql_query());
				$data = mysql_fetch_assoc($req);
				foreach($data as $k=>$v){
					$this->$k=$v;
				}
			}
		
		public function save($data){
			if(isset($data["id"]) && !empty($data["id"])){
				$sql="UPDATE ".$this->table." SET ";
				//$fields='';
				foreach ($data as $k=>$v){
					//$fields .= "$k=:$k";
					if($k!="id"){
						$v2 = mysql_real_escape_string($v);
						$sql.="$k='$v2',";
					}
				}
				$sql = substr($sql,0,-1);
				$sql .= "WHERE id=".$data["id"];
			}
			else {
		$sql = "INSERT INTO ".$this->table."(";
				unset($data["id"]);
				foreach($data as $k=>$v){
				$sql .= "$k,";
			}
			$sql = substr($sql,0,-1);
			$sql .= ") VALUE (";
				foreach($data as $v){
					$v2 = mysql_real_escape_string($v);
					$sql .= "'$v2',";
			}
			$sql = substr($sql,0,-1);
			$sql .= ")";
		}
		mysql_query($sql) or die(mysql_error()."<br/> => ".mysql_query());
	
		if (!isset($data["id"])){
		$this->id=mysql_insert_id();
		}
		else {
			$this->id=$data["id"];
		}
	}
	
	public function find($data=array()){
		$condition = "1=1";
		$fields= "*";
		$limit="";
		$order="id ASC";
		if(isset($data["condition"])){
			$condition=$data["condition"];
		}
		
		if(isset($data["fields"])){
			$fields=$data["fields"];
		}
		
		if(isset($data["limit"])){
			$limit="LIMIT ".$data["limit"];
		}
		
		if(isset($data["order"])){
			$order=$data["order"];
		}
		
		$sql ="SELECT $fields
		FROM ".$this->table."
		WHERE $condition
		ORDER BY $order $limit";
		$req = mysql_query($sql) or die(mysql_error()."<br/> => ".mysql_query());
		$d = array();
		while($data=mysql_fetch_assoc($req)){
			$d[]=$data;
		}
		return $d;
		
	}
	
	
	public function del($id=null){
	if($id==null){$id=$this->id;}
	$sql="DELETE FROM ".$this->table."
		WHERE id=$id";
	mysql_query($sql) or die(mysql_error()."<br/> => ".mysql_query());
	}

		static function load($name){
			require("$name.php");
			return new $name();
		}
		
}
?>