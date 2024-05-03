<?php
namespace app\models;

use PDO;

class Address extends \app\core\Model
{
	public $address_id;//PK
	public $invoice_id;//FK
	public $street_name;
	public $city;
	public $postal_code;
	public $country;

	//CRUD

	//Create
	public function create()
	{
		$SQL = 'INSERT INTO address(invoice_id, street_name, city, postal_code, country) VALUES (:invoice_id, :street_name, :city, :postal_code, :country)';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'invoice_id' => $this->invoice_id,
				'street_name' => $this->street_name,
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
		$SQL = 'UPDATE address SET street_name=:street_name, city=:city, postal_code=:postal_code, country=:country WHERE address_id = :address_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'street_name' => $this->street_name,
				'city' => $this->city,
				'postal_code' => $this->postal_code,
				'country' => $this->country,
				'address_id' => $this->address_id
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

	public function getById($invoice_id)
	{
		$SQL = 'SELECT * FROM address WHERE invoice_id = :invoice_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(['invoice_id' => $invoice_id]);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Address'); // Set the type of data returned by fetches
		return $STMT->fetch(); // Return the record
	}

// 	public function deleteByInvoiceId($invoice_id)
// {
//     $SQL = 'DELETE FROM address WHERE invoice_id = :invoice_id';
//     $STMT = self::$_conn->prepare($SQL);
//     $STMT->execute(['invoice_id' => $invoice_id]);
// }

public function deleteByInvoiceId()
{
    $SQL = 'DELETE FROM address WHERE invoice_id = :invoice_id';
    $STMT = self::$_conn->prepare($SQL);
    $STMT->execute(['invoice_id' => $this->invoice_id]);
}
}