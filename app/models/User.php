<?php
namespace app\models;

use PDO;

class User extends \app\core\Model{
	public $user_id;
	public $username;
	public $password_hash;

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

	//get
	public function get($username){
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
	public function update(){
		//change anything but the PK
		$SQL = 'UPDATE user SET username = :username, password_hash = :password_hash WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute((array)$this);
	}


	//delete - this is a special delete to deactivate accounts
	function delete(){
		//change anything but the PK
		$SQL = 'UPDATE user SET active = :active WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$data = ['user_id'=>$this->user_id, 'active'=>0];
		$STMT->execute($data);
	}
}