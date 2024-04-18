<?php
namespace app\core;

use PDO;

class Model{
	protected static $_conn = null;
	//self is the keyword to access the class definition and
	//$this is the reference of an object
	public function __construct(){
		$host = 'localhost';
		$dbname = 'ecommerce';
		$user = 'root';
		$pass = '';
		try { # MySQL with PDO_MYSQL
			if(self::$_conn == null){
				self::$_conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
				//for development purposes, we cause exceptions on all problems instead of only warnings
				self::$_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}//otherwise the connection exists
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
}