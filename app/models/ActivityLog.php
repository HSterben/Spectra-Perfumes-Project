<?php
namespace app\models;

use PDO;

class ActivityLog extends \app\core\Model{
    public $activity_id;
    public $date;
    public $message;

    //insert
	public function insert(){
		//define the SQL query
		$SQL = 'INSERT INTO activity_log (message) VALUES (:message)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = ['message' => $this->message,
				];
		$STMT->execute($data);
	}

    public function getAll(){
		$SQL = 'SELECT * FROM activity_log';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS,'app\models\ActivityLog');
		return $STMT->fetchAll();
	}
}
