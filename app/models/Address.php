<?php
namespace app\models;

use PDO;

class Address extends \app\core\Model{
	public $invoice_id;//FK
	public $country;
	public $region;
	public $city;
	public $street_name;
	public $postal_code;
	public $building_number;
	public $isApartment = 0;
	public $apartment_number;

	//CRUD

	public function create(){
		if($this->isApartment) {
			$SQL = 'INSERT INTO address(invoice_id,country,region,city,street_name,postal_code,building_number,isApartment,apartment_number) VALUE (:invoice_id,:country,:region,:city,:street_name,:postal_code,:building_number,:isApartment,:apartment_number)';
		} else {
			$SQL = 'INSERT INTO address(invoice_id,country,region,city,street_name,postal_code,building_number,isApartment,apartment_number) VALUE (:user_id,:first_name,:last_name)';
		}
		$STMT = self::$_conn->prepare($SQL);
		if($this->isApartment) {
			$STMT->execute(
				['invoice_ide'=>$this->invoice_id,
				'country'=>$this->country,
				'region'=>$this->region,
				'city'=>$this->city,
				'street_name'=>$this->street_name,
				'postal_code'=>$this->postal_code,
				'building_number'=>$this->building_number,
				'isApartment'=>$this->isApartment,
				'apartment_number'=>$this->apartment_number]
			);
		} else {
			$STMT->execute(
				['invoice_ide'=>$this->invoice_id,
				'country'=>$this->country,
				'region'=>$this->region,
				'city'=>$this->city,
				'street_name'=>$this->street_name,
				'postal_code'=>$this->postal_code,
				'building_number'=>$this->building_number,
				'isApartment'=>$this->isApartment]
			);
		}
	}

	public function getClientAddress($invoice_id){
		$SQL = 'SELECT * FROM address WHERE invoice_id = :invoice_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['invoice_id'=>$invoice_id]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\Address');//set the type of data returned by fetches
		return $STMT->fetch();//return (what should be) the only record
	}

	public function update(){
	//invoice_id,country,region,city,street_name,postal_code,building_number,isApartment,apartment_number
		if($this->isApartment) {
			$SQL = 'UPDATE address SET country=:country, region=:region, city=:city, street_name=:street_name, postal_code=:postal_code, building_number=:building_number, isApartment=:isApartment, apartment_number=:apartment_number WHERE address_id = :address_id';
		} else {

		}
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