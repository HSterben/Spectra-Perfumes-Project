<?php
namespace app\models;

class Invoice{
    public $invoice_id;
	public $invoice_title;
	public $project_id;
	public $business_name;
	public $address;
	public $phone_number;
	public $perfume_price;
	public $return_quantity;
	public $perfume_code;
    public $comment;


    //create
	public function insert(){
		$SQL = 'INSERT INTO profile(invoice_id,invoice_title,project_id,business_name,address,phone_number,perfume_price,return_quantity) VALUE (:user_id,:first_name,:last_name)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$this->user_id,
			'first_name'=>$this->first_name,
			'last_name'=>$this->last_name]
		);
	}

	//read
	public function getForUser($user_id){
		$SQL = 'SELECT * FROM profile WHERE user_id = :user_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['user_id'=>$user_id]
		);
		//there is a mistake in the next line
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\profile');//set the type of data returned by fetches
		return $STMT->fetch();//return (what should be) the only record
	}

	public function getAll(){
		$SQL = 'SELECT * FROM profile';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}

	public function getByName($name){//search
		$SQL = 'SELECT * FROM profile WHERE CONCAT(first_name,\' \',last_name) = :name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['name'=>$name]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Profile');//set the type of data returned by fetches
		return $STMT->fetchAll();//return all records
	}


	//update
	//you can't change the user_id that's a business logic choice that gets implemented in the model
	public function update(){
		$SQL = 'UPDATE profile SET first_name=:first_name,last_name=:last_name WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id,
			'first_name'=>$this->first_name,
			'last_name'=>$this->last_name]
		);
	}

	//delete
	public function delete(){
		$SQL = 'DELETE FROM profile WHERE profile_id = :profile_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['profile_id'=>$this->profile_id]
		);
	}
}