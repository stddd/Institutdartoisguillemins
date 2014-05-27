<?php
	class Auth {
	
	static function islogged(){
		
		if(isset($_SESSION['Auth']) && isset($_SESSION['Auth']['login']) && isset($_SESSION['Auth']['password']) ){
		extract($_SESSION['Auth']);
		$sql="SELECT id FROM users WHERE login='$login' AND password =SHA1('$password')";
		$req=mysql_query($sql) or die(mysql_error());
		if(mysql_num_rows($req)>0){
			$_SESSION['Auth']['password']=$_SESSION['Auth']['password'];
			return true;
		} 
		else {
			return false;
		}

		}
	}
}
?>
