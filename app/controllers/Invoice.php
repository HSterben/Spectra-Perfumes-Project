<?php
namespace app\controllers;

class Invoice extends \app\core\Controller {

    public function create(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$invoice = new \app\models\Invoice();

			$invoice->create();
            
			header('location:/Profile/index');
		}else{
			$this->view('Profile/create');
		}
	}
}