<?php
namespace app\models;

use PDO;

class Invoice extends \app\core\Model
{
	public $invoice_id; //PK (manual)
	//TODO: I don't think we need this foreign key here
	public $folder_name; //FK
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
		$SQL = 'INSERT INTO invoice(invoice_id, folder_name, invoice_title,
			 invoice_project_num, store_name, phone_number, return_quantity, perfume_price, note_text) 
		VALUES (:invoice_id, :folder_name, :invoice_title,
		:invoice_project_num, :store_name, :phone_number, :return_quantity, :perfume_price, :note_text)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
				'folder_name' => $this->folder_name,
				'invoice_title' => $this->invoice_title,
				'invoice_project_num' => $this->invoice_project_num,
				'store_name' => $this->store_name,
				'phone_number' => $this->phone_number,
				'return_quantity' => $this->return_quantity,
				'perfume_price' => $this->perfume_price,
				'note_text' => $this->note_text
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
		$SQL = 'UPDATE invoice SET invoice_id=:invoice_id, folder_name=:folder_name, invoice_title=:invoice_title,
		invoice_project_num=:invoice_project_num, store_name=:store_name, phone_number=:phone_number,
		return_quantity=:return_quantity, perfume_price=:perfume_price, note_text=:note_text WHERE invoice_id = :invoice_id';

		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
				'folder_name' => $this->folder_name,
				'invoice_title' => $this->invoice_title,
				'invoice_date' => $this->invoice_date,
				'invoice_project_num' => $this->invoice_project_num,
				'store_name' => $this->store_name,
				'phone_number' => $this->phone_number,
				'return_quantity' => $this->return_quantity,
				'perfume_price' => $this->perfume_price,
				'note_text' => $this->note_text
			]
		);
	}

	//delete
	public function delete()
	{
		$SQL = 'DELETE FROM invoice WHERE invoice_id = :invoice_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['invoice_id' => $this->invoice_id]
		);
	}

	public function getById($invoice_id)
	{
		$SQL = 'SELECT * FROM invoice WHERE invoice_id = :invoice_id LIMIT 1';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['invoice_id' => $invoice_id]);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Invoice'); // Set the type of data returned by fetches
		return $STMT->fetch(); // Return the record
	}

	public function getByTitle($invoice_title)
	{
		$SQL = 'SELECT * FROM invoice WHERE $invoice_title = :invoice title ORDER BY invoice_date';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['invoice_title' => $invoice_title]);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Invoice');//set the type of data returned by fetches
		return $STMT->fetchAll();
	}
	public function searchInvoices($query)
	{
		$SQL = 'SELECT * FROM invoice WHERE invoice_title LIKE :query';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['query' => "%$query%"]);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Invoice');
		return $STMT->fetchAll();
	}
	
	public function copy() {
		$SQL = 'INSERT INTO invoice(invoice_id, folder_name, invoice_title,
			 invoice_project_num, store_name, phone_number, return_quantity, perfume_price) 
		VALUES (:invoice_id, :folder_name, :invoice_title,
		:invoice_project_num, :store_name, :phone_number, :return_quantity, :perfume_price)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
				'folder_name' => $this->folder_name,
				'invoice_title' => $this->invoice_title,
				'invoice_project_num' => $this->invoice_project_num,
				'store_name' => $this->store_name,
				'phone_number' => $this->phone_number,
				'return_quantity' => $this->return_quantity,
				'perfume_price' => $this->perfume_price
			]
		);
	}
}