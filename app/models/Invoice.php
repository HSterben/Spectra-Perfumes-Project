<?php
namespace app\models;

class Invoice extends \app\core\Model
{
	public $invoice_id; //PK
	public $folder_id; //FK
	public $address_id; //FK
	public $invoice_title;
	public $invoice_date;
	public $invoice_project_num;
	public $store_name;
	public $phone_number;
	public $return_quantity;
	public $perfume_price;
	public $note_text;
	public $bookmark;

	//create
	public function create()
	{
		$SQL = 'INSERT INTO invoice(folder_id, address_id, invoice_title,
		invoice_date, invoice_project_num, store_name, phone_number, return_quantity, perfume_price, note_text, bookmark ) 
		VALUES (:folder_id, :address_id, :invoice_title,
		:invoice_date, :invoice_project_num, :store_name, :phone_number, :return_quantity, :perfume_price, :note_text, :bookmark)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'folder_id' => $this->folder_id,
				'address_id' => $this->address_id,
				'invoice_title' => $this->invoice_title,
				'invoice_date' => $this->invoice_date,
				'invoice_project_num' => $this->invoice_project_num,
				'store_name' => $this->store_name,
				'phone_number' => $this->phone_number,
				'return_quantity' => $this->return_quantity,
				'perfume_price' => $this->perfume_price,
				'note_text' => $this->note_text,
				'bookmark' => $this->bookmark
			]
		);
	}

	//read
	public function getAll()
	{
		$SQL = 'SELECT * FROM invoice ORDER BY invoice_date';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Invoice');//set the type of data returned by fetches
		return $STMT->fetchAll();
	}

	//We don't know search functions yet

	// public function getForUser($user_id)
	// {
	// 	$SQL = 'SELECT * FROM profile WHERE user_id = :user_id';
	// 	$STMT = self::$_conn->prepare($SQL);
	// 	$STMT->execute(
	// 		['user_id' => $user_id]
	// 	);
	// 	//there is a mistake in the next line
	// 	$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\profile');//set the type of data returned by fetches
	// 	return $STMT->fetch();//return (what should be) the only record
	// }

	// public function getByName($name)
	// {
	// 	$SQL = 'SELECT * FROM profile WHERE CONCAT(first_name,\' \',last_name) = :name';
	// 	$STMT = self::$_conn->prepare($SQL);
	// 	$STMT->execute(
	// 		['name' => $name]
	// 	);
	// 	$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Profile');//set the type of data returned by fetches
	// 	return $STMT->fetchAll();//return all records
	// }


	//update
	public function update()
	{
		$SQL = 'UPDATE invoice SET folder_id=:folder_id,address_id=:address_id,invoice_title=:invoice_title,invoice_date=:invoice_date,invoice_project_num=:invoice_project_num,store_name=:store_name,phone_number=:phone_number,return_quantity=:return_quantity,perfume_price=:perfume_price,note_text=:note_text,bookmark=:bookmark, WHERE invoice_id = :invoice_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'folder_id' => $this->folder_id,
				'address_id' => $this->address_id,
				'invoice_title' => $this->invoice_title,
				'invoice_date' => $this->invoice_date,
				'invoice_project_num' => $this->invoice_project_num,
				'store_name' => $this->store_name,
				'phone_number' => $this->phone_number,
				'return_quantity' => $this->return_quantity,
				'perfume_price' => $this->perfume_price,
				'note_text' => $this->note_text,
				'bookmark' => $this->bookmark
			]
		);
	}

	//delete
	public function delete()
	{
		$SQL = 'DELETE FROM profile WHERE invoice_id = :invoice_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['invoice_id' => $this->invoice_id]
		);
	}
}