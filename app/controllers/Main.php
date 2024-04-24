<?php
namespace app\controllers;

class Invoice extends \app\core\Controller {

	public function index(){
		$invoice = new \app\models\Invoice();
		$invoice = $invoice->getAll();

		//redirect a user that has no profile to the profile creation URL
		$this->view('Main/index',$invoice);
	}
}