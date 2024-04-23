<?php
namespace app\controllers;

class Invoice extends \app\core\Controller {

	public function index(){
		$invoice = new \app\models\Invoice();
		$invoice = $invoice->getAll();

		//redirect a user that has no profile to the profile creation URL
		$this->view('Invoice/invoiceList',$invoice);
	}

    public function create(){
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$invoice = new \app\models\Invoice(); //Instantiate invoice object
            //populate object
            $invoice->invoice_id;
			$invoice->address_id;
			$invoice->bookmark;
			$invoice->invoice_date;
			$invoice->store_name = $_POST['store_name'];
			$invoice->invoice_project_num;
			$invoice->invoice_title = $_POST['invoice_title'];
			$invoice->phone_number = $_POST['phone_number'];
			$invoice->return_quantity = $_POST['return_quantity'];
			$invoice->perfume_code = $_POST['perfume_code'];
			$invoice->perfume_price = $_POST['perfume_price'];
			$invoice->note_text;
			$invoice->note_date;
            //Add to db
			$invoice->create();
			header('location:/Invoice/invoiceList');
		}else{
			$this->view('Invoice/createInvoice');
		}
	}

    public function update(){
		$invoice = new \app\models\Invoice();//Instantiate invoice object
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //populate object
			$invoice->address_id = $_POST['address_id'];
			$invoice->bookmark = $_POST['bookmark'];
			$invoice->invoice_date = $_POST['invoice_date'];
			$invoice->invoice_business_name = $_POST['invoice_business_name'];
			$invoice->invoice_project_num = $_POST['invoice_project_num'];
			$invoice->invoice_title = $_POST['invoice_title'];
			$invoice->phone_number = $_POST['phone_number'];
			$invoice->return_quantity = $_POST['return_quantity'];
			$invoice->perfume_code = $_POST['perfume_code'];
			$invoice->perfume_price = $_POST['perfume_price'];
			$invoice->note_text = $_POST['note_text'];
			$invoice->note_date = $_POST['note_date'];
            //Add to db
			$invoice->update();
			header('location:/Invoice/invoiceList');
		}else{
			$this->view('Invoice/updateInvoice', $invoice);
		}
	}
}  