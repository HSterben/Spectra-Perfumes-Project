<?php
namespace app\controllers;

class Example extends \app\core\Controller{

	function index(){
		$this->view('Example/clock');
	}

	function clock(){
		$date = new \DateTime();
		echo json_encode($date);
	}

	function count(){
		$count = new \stdClass();
/*simulating a file */
		if(!isset($_SESSION['count'])){
			$_SESSION['count']=0;
		}
		$_SESSION['count'] = $_SESSION['count'] + 1;
		$count->count = $_SESSION['count'];
		/*resuming what you did*/
		echo json_encode($count);
	}

	function passingData(){
		$date = new \DateTime();
		$date = (array)$date;
		$this->view('Example/passingData', $date);
	}

}

