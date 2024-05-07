<?php
namespace app\models;

use PDO;

class ActivityLog extends \app\core\Model
{
	public $activity_id;
	public $date;
	public $message;
	public $user_id;

	//insert
	public function insert()
	{
		//define the SQL query
		$SQL = 'INSERT INTO activity_log (message, user_id) VALUES (:message, :user_id)';
		//prepare the statement
		$STMT = self::$_conn->prepare($SQL);
		//execute
		$data = [
			'message' => $this->message,
			'user_id' => $this->user_id
		];
		$STMT->execute($data);
	}

	public function getAll()
	{
		$SQL = 'SELECT * FROM activity_log';
		$STMT = self::$_conn->prepare($SQL);
		$STMT->execute();
		$STMT->setFetchMode(PDO::FETCH_CLASS, 'app\models\ActivityLog');
		return $STMT->fetchAll();
	}
}
