<?php
namespace app\models;

use PDO;

class Folder extends \app\core\Model{
    public $folder_name; //PK
    public $invoice_id; //FK
    public $parent_folder_name;

    //CRUD

    //create
    public function create($parent_folder_name){
		//define the SQL query
    	if(!$parent_folder_name) {
	    	//if at the root, there is no parent folder
			$SQL = 'INSERT INTO folder (folder_name, invoice_id) VALUES (:folder_name, :invoice_id)';
			//prepare the statement
			$STMT = self::$_conn->prepare($SQL);
			//execute
			$data = [
				'folder_name' => $this->folder_name,
				'invoice_id' => $this->invoice_id
			];
    	} else {
    		//if not at root, then there is a parent folder
    		$SQL = 'INSERT INTO folder (folder_name, invoice_id, parent_folder_name) VALUES (:folder_name, :invoice_id, :parent_folder_name)';
			//prepare the statement
			$STMT = self::$_conn->prepare($SQL);
			//execute
			$data = [
				'folder_name' => $this->folder_name,
				'invoice_id' => $this->invoice_id,
				'parent_folder_name' => $parent_folder_name
			];
    	}
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

    public function getAllRoot() {
		$SQL = 'SELECT * FROM folder WHERE parent_folder_name = :parent_folder_name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['parent_folder_name' => 0]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Folder');//set the type of data returned by fetches
		return $STMT->fetchAll();
    }

    public function getByFolderName($folder_name){
    	$SQL = 'SELECT * FROM folder WHERE folder_name = :folder_name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['folder_name' => $folder_name]
		);
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\Folder');//set the type of data returned by fetches
		return $STMT->fetch();
    }

    //TODO: search

    //update 1.0
    public function rename($folder_name) {
    	$SQL = 'UPDATE folder SET folder_name = :folder_name WHERE folder_name = :folder_name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			[
				'folder_name' => $this->folder_name
			]
		);
    }

    //update 2.0 TODO
    public function update() {
    	$SQL = 'UPDATE folder SET folder_name=:folder_name WHERE invoice_id = :invoice_id';

		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['folder_name' => $this->folder_name]
		);
    }

    //delete
    public function delete() {
    	$SQL = 'DELETE FROM folder WHERE folder_name = :folder_name';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute(
			['folder_name' => $this->folder_name]
		);
    }
}