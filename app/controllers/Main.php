<?php
namespace app\controllers;

#[\app\filters\Login]
class Main extends \app\core\Controller
{
	// public function index()
	// {
	// 	$invoice = new \app\models\Invoice();

	// 	// Check if a search query is provided
	// 	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// 		$searchQuery = $_POST['query'];
	// 		$invoice = $invoice->searchInvoices($searchQuery);
	// 	} else {
	// 		$invoice = $invoice->getAll();
	// 	}
	// 	$data = $invoice;
	// 	$this->view('Main/index', $data);
	// }

	public function index()
	{
		$invoice = new \app\models\Invoice();

		$sortOption = $_POST['sort'] ?? 'invoice_date';

		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['query']) && !empty($_POST['query'])) {
			$searchQuery = $_POST['query'];
			$invoices = $invoice->searchInvoices($searchQuery);
		} else {
			if ($sortOption === 'invoice_id') {
				$invoices = $invoice->getAllInvoiceId();
			} else if ($sortOption === 'invoice_project_number') {
				$invoices = $invoice->getAllInvoiceProjectNumber();
			} else if ($sortOption === 'invoice_date'){
				$invoices = $invoice->getAll();
			}
		}

		$this->view('Main/index', ['data' => $invoices]);
	}


	public function sales()
	{
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

	
    public function settings()
    {
        if (!isset($_SESSION['user_id'])) {
			header('location:/User/login');
			return;
		}
        $user = new \app\models\User();
		$user = $user->getById($_SESSION['user_id']);

        $this->view('Main/settings', ['user' => $user]);
    }
}