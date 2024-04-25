<?php
namespace app\models;

use PDO;

class Folder extends \app\core\Model{
    //TODO: make folder_name the PK
    //ALSO TODO: change update route to rename
    public $folder_id; //PK
    public $invoice_id; //FK
    public $folder_name;

    //CRUD

    //create
    public function create(){
		//define the SQL query
		$SQL = 'INSERT INTO folder (folder_name, invoice_id) VALUES (:folder_name, :invoice_id)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = [
			'folder_name' => $this->folder_name,
			'invoice_id' => $this->invoice_id
		];
		$STMT->execute($data);
	}

	//read
	public function getAll() {
		$SQL = 'SELECT * FROM folder';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Folder');//set the type of data returned by fetches
		return $STMT->fetchAll();
    }

    //TODO: search

    //update
    public function rename() {
    	$SQL = 'UPDATE folder SET folder_name=:folder_name WHERE invoice_id = :invoice_id';

		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['folder_name' => $this->folder_name]
		);
    }

    //delete
    public function delete() {
    	$SQL = 'DELETE FROM folder WHERE folder_id = :folder_id';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['folder_id' => $this->folder_id]
		);
    }
}