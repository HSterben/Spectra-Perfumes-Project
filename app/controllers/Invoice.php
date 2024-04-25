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
<<<<<<< HEAD
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Instantiate and populate objects
            $invoice = new \app\models\Invoice();
            $invoice->invoice_id = $_POST['invoice_id'];
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
                $address->invoice_id = $invoice->invoice_id;

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
=======
    }

    public function create()
>>>>>>> 099c2f90b13eb925047be5d6a872b229b4f237ff
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

<<<<<<< HEAD
            $a = new \app\models\Address();
            $address = $a->getById($invoice_id);
=======
            $address = new \app\models\Address();
            $address = $address->getById($invoice_id);
>>>>>>> 099c2f90b13eb925047be5d6a872b229b4f237ff
            $address->street_name = $_POST['street_name'];
            $address->city = $_POST['city'];
            $address->postal_code = $_POST['postal_code'];
            $address->country = $_POST['country'];

<<<<<<< HEAD
            if ($invoice->invoice_id) {
                // Set the invoice_id for the address
                $address->invoice_id = $invoice->invoice_id;

                // Create the address record
                $address->update();

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
=======
            // Create PerfumeOrder records
            $perfumeNumber = $_POST['perfume_number'];
            $quantities = $_POST['quantity'];

            for ($i = 0; $i < count($perfumeNumber); $i++) {
                $perfumeOrder = new \app\models\PerfumeOrder();
                $perfumeOrder->invoice_id = $invoice->invoice_id;
                $perfumeOrder->perfume_number = $perfumeNumber[$i];
                $perfumeOrder->quantity = $quantities[$i];
                $perfumeOrder->update();
>>>>>>> 099c2f90b13eb925047be5d6a872b229b4f237ff
            }

            // Redirect after successful creation
            header('location:/Invoice/list');
        } else {
            $this->view('Invoice/update');
        }
    }

    public function confirmBulkDelete()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['selected_invoices'])) {
        $invoiceIds = $_POST['selected_invoices'];
        $invoices = [];
        foreach ($invoiceIds as $invoiceId) {
            $invoice = new \app\models\Invoice();
            $invoice->invoice_id = $invoiceId;
            $fetchedInvoice = $invoice->getById($invoiceId);
            if ($fetchedInvoice) {
                $invoices[] = $fetchedInvoice;
            }
        }
        $this->view('Invoice/bulkDeletion', $invoices);
    } else {
        // Redirect or show an error if no invoice was selected
        header('location:/Invoice/list');
    }
}

public function performBulkDelete()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['selected_invoices'])) {
        $invoiceIds = $_POST['selected_invoices'];
        foreach ($invoiceIds as $invoiceId) {
            $invoice = new \app\models\Invoice();
            $invoice->invoice_id = $invoiceId;
            $invoice->delete();
        }
        header('location:/Invoice/list');
    } else {
        header('location:/Invoice/list');
    }
}
public function delete()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['invoice_id'])) {
        $invoiceId = $_POST['invoice_id'];
        $invoice = new \app\models\Invoice();
        $invoice->invoice_id = $invoiceId;
        $invoice->delete();  // Assuming you have a delete method in your Invoice model

        // After deletion, redirect to the invoice list page or show a success message
        header('Location: /Invoice/list');
        exit;
    } else {
        // Redirect or show an error if the method was not POST or invoice_id was missing
        header('Location: /Invoice/list');
        exit;
    }
}


}