<?php
namespace app\controllers;

class Invoice extends \app\core\Controller
{

	public function index()
	{
		$invoice = new \app\models\Invoice();
		$invoice = $invoice->getAll();

		//redirect a user that has no profile to the profile creation URL
		$this->view('Invoice/invoiceList', $invoice);
	}

	public function create()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$invoice = new \app\models\Invoice(); //Instantiate invoice object
			$address = new \app\models\Address(); //Instantiate address object
			//populate object
			$id = $_POST['invoice_id'];
			$address->invoice_id = $id;
			$address->street = $_POST['street'];
			$address->city = $_POST['city'];
			$address->postal_code = $_POST['postal_code'];
			$address->country = $_POST['country'];
			$invoice->invoice_id = $id;
			$invoice->invoice_title = $_POST['invoice_title'];
			$invoice->invoice_date = $_POST['invoice_date'];
			$invoice->invoice_project_num = $_POST['invoice_project_num'];
			$invoice->store_name = $_POST['store_name'];
			$invoice->phone_number = $_POST['phone_number'];
			$invoice->return_quantity = $_POST['return_quantity'];
			$invoice->perfume_price = $_POST['perfume_price'];
			$invoice->phone_number = $_POST['phone_number'];
			$invoice->return_quantity = $_POST['return_quantity'];
			$address->create();
			$invoice->create();
			$perfumeNumber = $_POST['perfume_number'];
			$quantities = $_POST['quantity'];

			for ($i = 0; $i < count($perfumeNumber); $i++) {
				$perfumeOrder = new \app\models\PerfumeOrder();
				$perfumeOrder->invoice_id = $id;
				$perfumeOrder->perfume_number = $perfumeNumber[$i];;
				$perfumeOrder->quantity = $quantities[$i];
				$perfumeOrder->create();
			}

			//Add to db
			$invoice->create();
			$address->create();
			header('location:/Invoice/invoiceList');
		} else {
			$this->view('Invoice/createInvoice');
		}
	}

	public function update()
	{
		$invoice = new \app\models\Invoice();//Instantiate invoice object
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
		} else {
			$this->view('Invoice/updateInvoice', $invoice);
		}
	}
}