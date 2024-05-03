<?php
namespace app\controllers;

class Main extends \app\core\Controller
{
	public function index()
	{
		$invoice = new \app\models\Invoice();

		// Check if a search query is provided
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$searchQuery = $_POST['query'];
			$invoice = $invoice->searchInvoices($searchQuery);
		} else {
			$invoice = $invoice->getAll();
		}
		$data = $invoice;
		$this->view('Main/index', $data);
	}

	public function sales() {
		$sale = new \app\models\Sale();

		// Check if a search query is provided
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$searchQuery = $_POST['query'];
			// $invoice = $invoice->searchInvoices($searchQuery);
		} else {
			$sale = $sale->getAll();
		}
		$data = $sale;
		$this->view('Main/sales', $data);
	}
}