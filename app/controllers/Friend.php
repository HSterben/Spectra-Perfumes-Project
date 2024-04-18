<?php
namespace app\controllers;

class Friend extends \app\core\Controller {
	function add($id2, $id1){
		echo "Make $id1 friends with $id2";
	}
}