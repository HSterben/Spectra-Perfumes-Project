<?php
namespace app\models;

use PDO;

class Folder extends \app\core\Model{
    public $folder_id;
    public $invoice_id;
    public $folder_name;

    public function createFolder(){
		//define the SQL query
		$SQL = 'INSERT INTO folder (folder_name) VALUES (:folder_name)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = ['folder_name' => $this->folder_name,
				];
		$STMT->execute($data);
	}

    public function renameFolder() {

    }
}