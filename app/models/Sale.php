<?php
namespace app\models;

use PDO;

class Sale extends \app\core\Model
{
	public $sale_id;//PK
	public $invoice_id;//FK
	public $sale_date;//FK
	public $return_value;
	public $purchase_value;
	public $total_value;

	//CRUD

	//Create
	public function create()
	{
		$SQL = 'INSERT INTO sale(invoice_id,sale_date,return_value,purchase_value,total_value) VALUE (:invoice_id,:sale_date,:return_value,:purchase_value,:total_value)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
                'sale_date' => $this->sale_date,
				'return_value' => $this->return_value,
				'purchase_value' => $this->purchase_value,
				'total_value' => $this->total_value,
			]
		);
	}

	//Read
    public function getAll()
	{
		$SQL = 'SELECT * FROM sale ORDER BY sale_date';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Sale');//set the type of data returned by fetches
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
		$SQL = 'UPDATE sale SET invoice_id=:invoice_id, sale_date=:sale_date, return_value=:return_value, purchase_value=:purchase_value, total_value=:total_value WHERE sale_id = :sale_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
                'sale_date' => $this->sale_date,
				'return_value' => $this->return_value,
				'purchase_value' => $this->purchase_value,
				'total_value' => $this->total_value,
			]
		);
	}

	//delete
	public function delete()
	{
		$SQL = 'DELETE FROM sale WHERE sale_id = :sale_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['sale_id' => $this->sale_id]
		);
	}


}