<?php
namespace app\models;

use PDO;

class PerfumeOrder extends \app\core\Model
{
	public $perfume_order_id;//PK
	public $invoice_id;//FK
	public $perfume_number;//FK
	public $quantity;

	//CRUD
	//Create
	public function create()
	{
		$SQL = 'INSERT INTO perfume_order(invoice_id,perfume_number,quantity) VALUE (:invoice_id,:perfume_number,:quantity)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
				'perfume_number' => $this->perfume_number,
				'quantity' => $this->quantity
			]
		);
	}

	//Read
	public function getAll()
	{
		$SQL = 'SELECT * FROM perfume_order ORDER BY perfume_number';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\PerfumeOrder');//set the type of data returned by fetches
		return $STMT->fetchAll();
	}

	public function getById($invoice_id)
	{
		$SQL = 'SELECT * FROM perfume_order WHERE invoice_id = :invoice_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['invoice_id' => $invoice_id]);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\PerfumeOrder'); // Set the type of data returned by fetches
		return $STMT->fetchAll();
	}

	//We don't know search functions yet

	// public function getInvoiceSale($invoice_id)
	// {
	// 	$SQL = 'SELECT * FROM sale WHERE invoice_id = :invoice_id';
	// 	$STMT = self::$_conn->prepare($SQL);
	// 	$STMT->execute(
	// 		['invoice_id' => $invoice_id]
	// 	);
	// 	$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Address');
	// 	return $STMT->fetch();
	// }


	public function update()
	{
		$SQL = 'UPDATE perfume_order SET perfume_number=:perfume_number, quantity=:quantity WHERE perfume_order_id = :perfume_order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'perfume_number' => $this->perfume_number,
				'quantity' => $this->quantity,
				'perfume_order_id' => $this->perfume_order_id
			]
		);
	}

	//delete
	public function delete()
	{
		$SQL = 'DELETE FROM perfume_order WHERE perfume_order_id = :perfume_order_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['perfume_order_id' => $this->perfume_order_id]
		);
	}

	// public function deleteByInvoiceId($invoice_id)
	// {
	// 	$SQL = 'DELETE FROM perfume_order WHERE invoice_id = :invoice_id';
	// 	$STMT = self::$_conn->prepare($SQL);
	// 	$STMT->execute(['invoice_id' => $invoice_id]);
	// }

	public function deleteByInvoiceId()
	{
		$SQL = 'DELETE FROM perfume_order WHERE invoice_id = :invoice_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['invoice_id' => $this->invoice_id]);
	}
}