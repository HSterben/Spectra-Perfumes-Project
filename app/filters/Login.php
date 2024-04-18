<?php
namespace app\filters;

#[\Attribute]
class Login implements \app\core\AccessFilter{

	public function redirected(){
		//make sure that the user is logged in
		if(!isset($_SESSION['user_id'])){
			header('location:/User/login');
			return true;
		}
		return false;//not denied
	}

}