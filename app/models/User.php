<?php
namespace app\models;

use PDO;

class User extends \app\core\Model{
	public $user_id; //PK
	public $username;
	public $email;
	public $password_hash;
	public $current_currency;
	public $theme;
	public $font_size;

	//implement CRUD
	
	//insert
	public function insert(){
		//define the SQL query
		$SQL = 'INSERT INTO user (username, password_hash) VALUES (:username, :password_hash)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = ['username' => $this->username,
				'password_hash' => $this->password_hash];
		$STMT->execute($data);
	}

	public function add2FA(){
		//change anything but the PK
		$SQL = 'UPDATE user SET secret = :secret WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['user_id'=>$this->user_id,
						'secret'=>$this->secret]);
	}

	//get
	public function getbyUsername($username){
		$SQL = 'SELECT * FROM user WHERE username = :username';//define the SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['username' => $username]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

	public function getById($user_id){
		$SQL = 'SELECT * FROM user WHERE user_id = :user_id';//define the SQL
		$STMT = self::$_conn->prepare($SQL);//prepare
		$STMT->execute(['user_id' => $user_id]);//run
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\User');//choose the type of return from fetch
		return $STMT->fetch();//fetch
	}

	//update
	public function updateUser(){
		//change anything but the PK 
		$SQL = 'UPDATE user SET username = :username, password_hash = :password_hash WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute((array)$this);
	}

	public function updateSettings() {
		$SQL = 'UPDATE user SET current_currency = :current_currency, theme = :theme, font_size = :font_size WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute([
			'user_id' => $this->user_id,
			'current_currency' => $this->current_currency,
			'theme' => $this->theme,
			'font_size' => $this->font_size
		]);
	}
}