<?php
namespace app\models;

use PDO;

class Address extends \app\core\Model
{
	public $address_id;//PK
	public $invoice_id;//FK
	public $street;
	public $city;
	public $postal_code;
	public $country;

	//CRUD

	//Create
	public function create()
	{
		$SQL = 'INSERT INTO address(invoice_id,street,city,postal_code,country) VALUE (:invoice_id,:street,city,:postal_code,:country)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
				'street' => $this->street,
				'city' => $this->city,
				'postal_code' => $this->postal_code,
				'country' => $this->country
			]
		);
	}

	//Read
	public function getInvoiceAddress($invoice_id)
	{
		$SQL = 'SELECT * FROM address WHERE invoice_id = :invoice_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['invoice_id' => $invoice_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Address');
		return $STMT->fetch();
	}

	//Update
	public function update()
	{
		$SQL = 'UPDATE address SET invoice_id=:invoice_id, street=:street, city=:city, postal_code=:postal_code, country=:country WHERE address_id = :address_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
				'street' => $this->street,
				'city' => $this->city,
				'postal_code' => $this->postal_code,
				'country' => $this->country
			]
		);
	}

	//Delete
	public function delete()
	{
		$SQL = 'DELETE FROM address WHERE address_id = :address_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['address_id' => $this->address_id]
		);
	}


}