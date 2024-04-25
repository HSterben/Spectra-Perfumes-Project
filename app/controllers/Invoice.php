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
            $invoice_id = $_POST['invoice_id'];
            $invoice->invoice_id = $invoice_id;
            $invoice->invoice_title = $_POST['invoice_title'];
            $invoice->invoice_project_num = $_POST['invoice_project_num'];
            $invoice->store_name = $_POST['store_name'];
            $invoice->phone_number = $_POST['phone_number'];
            $invoice->return_quantity = $_POST['return_quantity'];
            $invoice->perfume_price = $_POST['perfume_price'];
            // Create the invoice record
            $invoice->create();

            $address = new \app\models\Address();
            $address->street_name = $_POST['street_name'];
            $address->city = $_POST['city'];
            $address->postal_code = $_POST['postal_code'];
            $address->country = $_POST['country'];

            if ($invoice->invoice_id) {
                // Set the invoice_id for the address
                $address->invoice_id = $invoice_id;

                // Create the address record
                $address->create();

                // Create PerfumeOrder records
                $perfumeNumber = $_POST['perfume_number'];
                $quantities = $_POST['quantity'];

                for ($i = 0; $i < count($perfumeNumber); $i++) {
                    $perfumeOrder = new \app\models\PerfumeOrder();
                    $perfumeOrder->invoice_id = $invoice->invoice_id;
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


    public function update($invoice_id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Instantiate and populate objects
            $invoice = new \app\models\Invoice();
            $invoice = $invoice->getById($invoice_id);

            $invoice->invoice_id = $_POST['invoice_id'];
            $invoice->invoice_title = $_POST['invoice_title'];
            $invoice->invoice_project_num = $_POST['invoice_project_num'];
            $invoice->store_name = $_POST['store_name'];
            $invoice->phone_number = $_POST['phone_number'];
            $invoice->return_quantity = $_POST['return_quantity'];
            $invoice->perfume_price = $_POST['perfume_price'];
            // Update the invoice record
            $invoice->update();

            $address = new \app\models\Address();
            $address = $address->getById($invoice_id);
            $address->street_name = $_POST['street_name'];
            $address->city = $_POST['city'];
            $address->postal_code = $_POST['postal_code'];
            $address->country = $_POST['country'];

            // Create PerfumeOrder records
            $perfumeNumber = $_POST['perfume_number'];
            $quantities = $_POST['quantity'];

            for ($i = 0; $i < count($perfumeNumber); $i++) {
                $perfumeOrder = new \app\models\PerfumeOrder();
                $perfumeOrder->invoice_id = $invoice->invoice_id;
                $perfumeOrder->perfume_number = $perfumeNumber[$i];
                $perfumeOrder->quantity = $quantities[$i];
                $perfumeOrder->update();
            }

            // Redirect after successful creation
            header('location:/Invoice/list');
        } else {
            $this->view('Invoice/update');
        }
    }
}