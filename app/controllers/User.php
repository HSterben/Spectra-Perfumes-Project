<?php
namespace app\controllers;

use chillerlan\Authenticator\{Authenticator, AuthenticatorOptions};
use chillerlan\QRCode\QRCode;

class User extends \app\core\Controller
{

	function login()
	{
		//show the login form and log the user in
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			//log the user in... if the password is right
			//get the user from the database
			$username = $_POST['username'];
			$user = new \app\models\User();
			$user = $user->getbyUsername($username);
			//check the password against the hash
			$password = $_POST['password'];
			if ($user && password_verify($password, $user->password_hash)) {
				//remember that this is the user logging in...
				$_SESSION['user_id'] = $user->user_id;
				$_SESSION['secret'] = $user->secret;
				header('location:/Main/index');
			} else {
				header('location:/User/login');
			}
		} else {
			$this->view('User/login');
		}
	}

	function logout()
	{
		session_destroy();
		//$_SESSION['user_id'] = null;
		header('location:/User/login');
	}

	function securePlace()
	{
		if (!isset($_SESSION['user_id'])) {
			header('location:/User/login');
			return;
		}
		echo 'You are safe. You are in a secure location.';
	}

	function register()
	{
		//display the form and process the registration
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			//getting the user input and place it in an object
			//create the new User
			$user = new \app\models\User();
			//populate the User
			$user->username = $_POST['username'];
			$user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
			//insert the user
			$user->insert();
			//redirect to a good place
			header('location:/User/login');
		} else {
			$this->view('User/registration');
		}
	}

	function setup2fa(){
		$options = new AuthenticatorOptions();
		$authenticator = new Authenticator($options);

		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			if(isset($_SESSION['secret_setup'])){
				$authenticator->setSecret($_SESSION['secret_setup']);
			}else{
				header('location:/User/setup2fa');
			}
			//was submitted, check the TOTP
			$totp = $_POST['totp'];
			if($authenticator->verify($totp)){
				//record to the user record
				echo 'yay!';
				$user = new \app\models\User();
				$user = $user->getById($_SESSION['user_id']);
				$user->secret=$_SESSION['secret_setup'];
				$user->add2FA();
			}else{
				echo 'Nope!';
			}
		}else{
			$_SESSION['secret_setup'] = $authenticator->createSecret();
			//generate the URI with the secret for the user
			$uri = $authenticator->getUri('Superb application', 'localhost');
			$QRCode = (new QRCode)->render($uri);
			$this->view('User/setup2fa',['QRCode'=>$QRCode]);
		}
	}

	function check2fa(){
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$options = new AuthenticatorOptions();
			$authenticator = new Authenticator($options);
			$authenticator->setSecret($_SESSION['secret']);
			if($authenticator->verify($_POST['totp'])){
				unset($_SESSION['secret']);
				header('location:/Main/index');//the good place
			}else{
				session_destroy();
				header('location:/User/login');
			}
		}else{
			$this->view('User/check2fa');
		}
	}

	//update our own user record (only if I am logged in)
	function updateUser()
	{
		if (!isset($_SESSION['user_id'])) {
			header('location:/User/login');
			return;
		}

		$user = new \app\models\User();
		$user = $user->getById($_SESSION['user_id']);

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			//process the update
			$user->username = $_POST['username'];
			//change the password only if one is sent
			$password = $_POST['password'];
			if (!empty($password)) {//should be false if ''
				$user->password_hash = password_hash($password, PASSWORD_DEFAULT);
			}//otherwise remains as it was
			$user->updateUser();
			header('location:/User/update');
		} else {
			$this->view('User/update', $user);
		}
	}

	function updateSettings()
	{
		if (!isset($_SESSION['user_id'])) {
			header('location:/User/login');
			return;
		}

		$user = new \app\models\User();
		$user = $user->getById($_SESSION['user_id']);

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$user->current_currency = $_POST['current_currency'];
			$user->theme = $_POST['theme'];
			$user->font_size = $_POST['font_size'];
			$user->date_format = $_POST['date_format'];
			$user->updateSettings();
			header('location:/Main/settings');
		} else {
			$this->view('Main/settings');
		}
	}

	public function resetSettings()
	{
		if (!isset($_SESSION['user_id'])) {
			header('location:/User/login');
			return;
		}

		$user = new \app\models\User();
		$user = $user->getById($_SESSION['user_id']);

		$user->current_currency = 'CAD';
		$user->theme = 'Dark';
		$user->font_size = 12;
		$user->date_format = 'd/m/Y';
		$user->updateSettings();
		header('location:/Main/settings');
	}
}