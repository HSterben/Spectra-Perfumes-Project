<?php
namespace app\models;

class Invoice{
    public $invoice_id; //PK
	public $folder_id; //FK
	public $address_id; //FK
	public $bookmark;
	public $invoice_date;
	public $invoice_business_name;
	public $invoice_project_num;
	public $invoice_title;
	public $phone_number;
	public $return_quantity;
	public $perfume_code;
	public $perfume_format;
	public $perfume_price;
	public $note_text;
	public $note_date;

    //create
	public function create(){
		$SQL = 'INSERT INTO invoice(address_id, bookmark, invoice_date, invoice_business_name,
		invoice_project_num, invoice_title, phone_number, return_quantity, perfume_code, perfume_format, perfume_price, note_text, note_date ) 
		VALUES (:invoice_id, :address_id, :bookmark, :invoice_date, :invoice_business_name, :invoice_project_num, :invoice_title, :phone_number, 
		:return_quantity, :perfume_code, :perfume_format, :perfume_price, :note_text, :note_date)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['address_id'=>$this->address_id,
			'bookmark'=> $this->bookmark,
			'invoice_date'=>$this->invoice_date,
			'invoice_business_name'=>$this->invoice_business_name,
			'invoice_project_num'=>$this->invoice_project_num,
			'invoice_title'=>$this->invoice_title,
			'phone_number'=>$this->phone_number,
			'return_quantity'=>$this->return_quantity,
			'perfume_code'=>$this->perfume_code,
			'perfume_format'=>$this->perfume_format,
			'perfume_price'=>$this->perfume_price,
			'note_text'=>$this->note_text,
			'note_date'=>$this->note_date]);
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