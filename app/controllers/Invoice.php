<?php
namespace app\controllers;

class Invoice extends \app\core\Controller
{

	public function index()
	{
		$invoice = new \app\models\Invoice();
		$invoice = $invoice->getAll();

		//redirect a user that has no profile to the profile creation URL
		$this->view('Invoice/list', $invoice);
	}

	public function create()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Instantiate and populate objects
        $invoice = new \app\models\Invoice();
        $invoice->invoice_title = $_POST['invoice_title'];
        $invoice->invoice_project_num = $_POST['invoice_project_num'];
        $invoice->store_name = $_POST['store_name'];
        $invoice->phone_number = $_POST['phone_number'];
        $invoice->return_quantity = $_POST['return_quantity'];
        $invoice->perfume_price = $_POST['perfume_price'];
        
        $address = new \app\models\Address();
        $address->street_name = $_POST['street_name'];
        $address->city = $_POST['city'];
        $address->postal_code = $_POST['postal_code'];
        $address->country = $_POST['country'];
        
        // Create the invoice record first
        $invoiceId = $invoice->create();
        
        if ($invoiceId) {
            // Set the invoice_id for the address
            $address->invoice_id = $invoiceId;
            
            // Create the address record
            $address->create();
            
            // Create PerfumeOrder records
            $perfumeNumber = $_POST['perfume_number'];
            $quantities = $_POST['quantity'];

            for ($i = 0; $i < count($perfumeNumber); $i++) {
                $perfumeOrder = new \app\models\PerfumeOrder();
                $perfumeOrder->invoice_id = $invoiceId;
                $perfumeOrder->perfume_number = $perfumeNumber[$i];
                $perfumeOrder->quantity = $quantities[$i];
                $perfumeOrder->create();
            }
        }
        
        // Redirect after successful creation
        header('location:/Invoice/list');
    } else {
        $this->view('Invoice/create');
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
			header('location:/Invoice/list');
		} else {
			$this->view('Invoice/update', $invoice);
		}
	}
}