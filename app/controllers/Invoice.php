<?php
namespace app\controllers;

class Invoice extends \app\core\Controller
{

    public function index()
    {

    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Instantiate and populate objects
            $invoice = new \app\models\Invoice();
            $invoice_id = $_POST['invoice_id'];
            $invoice->invoice_id = $invoice_id;
            $invoice->invoice_title = $_POST['invoice_title'];
            $invoice->invoice_date = $_POST['invoice_date'];
            $invoice->invoice_project_num = $_POST['invoice_project_num'];
            $invoice->store_name = $_POST['store_name'];
            $invoice->phone_number = $_POST['phone_number'];
            $invoice->return_quantity = $_POST['return_quantity'];
            $unitPrice = $_POST['perfume_price'];
            $invoice->perfume_price = $unitPrice;
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

                $total_quantity = 0;

                for ($i = 0; $i < sizeof($perfumeNumber); $i++) {
                    $perfumeOrder = new \app\models\PerfumeOrder();
                    $perfumeOrder->invoice_id = $invoice->invoice_id;
                    $perfumeOrder->perfume_number = $perfumeNumber[$i];
                    $perfumeOrder->quantity = $quantities[$i];
                    $perfumeOrder->create();

                    $total_quantity += $perfumeOrder->quantity;
                }
                //Create the sales object
                $sale = new \app\models\Sale();
                $sale->invoice_id = $invoice_id;
                $sale->sale_date = $invoice->invoice_date;
                $sale->return_value = -($invoice->return_quantity * $unitPrice);
                $sale->purchase_value = ($total_quantity * $unitPrice);
                $sale->total_value = ($sale->purchase_value + $sale->return_value);
                $sale->create();
            }

            // Redirect after successful creation
            header('location:/Main/index');
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

            $perfumes = new \app\models\PerfumeOrder();
            $perfumes = $perfumes->getById($invoice_id);
            for ($i = 0; $i < sizeof($perfumeNumber); $i++) {
                $perfumes[$i]->invoice_id = $invoice->invoice_id;
                $perfumes[$i]->perfume_number = $perfumeNumber[$i];
                $perfumes[$i]->quantity = $quantities[$i];
                $perfumes[$i]->update();
            }

            // Redirect after successful creation
            header('location:/Main/index');
        } else {
            $invoice = new \app\models\Invoice();
            $invoice = $invoice->getById($invoice_id);
            $address = new \app\models\Address();
            $address = $address->getById($invoice_id);
            $perfumeOrders = new \app\models\PerfumeOrder();
            $perfumeOrders = $perfumeOrders->getById($invoice_id);

            $data = [$invoice, $address, $perfumeOrders];

            $this->view('Invoice/update', $data);
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
            header('location:/Main/index');
        }

    }

    public function performBulkDelete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['selected_invoices'])) {
            $invoiceIds = $_POST['selected_invoices'];
            foreach ($invoiceIds as $invoiceId) {

                $address = new \app\models\Address();
                $address = $address->getById($invoiceId);
                $address->deleteByInvoiceId();

                $perfumeOrder = new \app\models\PerfumeOrder();
                $perfumeOrder = $perfumeOrder->getById($invoiceId);
                foreach ($perfumeOrder as $perfume) {
                    $perfume->deleteByInvoiceId();
                }

                $invoice = new \app\models\Invoice();
                $invoice->invoice_id = $invoiceId;
                $invoice->delete();

            }
            header('location:/Main/index');
        } else {
            $this->view('Invoice/bulkDeletion');
        }
    }

    public function delete($invoice_id)
    {
        $address = new \app\models\Address();
        $address = $address->getById($invoice_id);

        $perfumeOrder = new \app\models\PerfumeOrder();
        $perfumeOrder = $perfumeOrder->getById($invoice_id);

        // Delete the publication
        $invoice = new \app\models\Invoice();
        $invoice = $invoice->getById($invoice_id);


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $invoice->delete();
            $address->deleteByInvoiceId($invoice_id);
            foreach ($perfumeOrder as $perfume) {
                $perfume->delete();
            }

            header('location:/Main/index');
        } else {
            $this->view('Invoice/delete', ['invoice' => $invoice, 'address' => $address, 'perfumeOrder' => $perfumeOrder]);
        }
    }

    public function read($invoice_id)
    {
        $invoice = new \app\models\Invoice();
        $invoice = $invoice->getById($invoice_id);
        $address = new \app\models\Address();
        $address = $address->getById($invoice_id);
        $perfumeOrders = new \app\models\PerfumeOrder();
        $perfumeOrders = $perfumeOrders->getById($invoice_id);

        $this->view('Invoice/read', ['invoice' => $invoice, 'address' => $address, 'perfumeOrder' => $perfumeOrders]);
    }

    public function copy($invoice_id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Create new invoice
            $newInvoice = new \app\models\Invoice();
            $newInvoice = $newInvoice->getById($invoice_id);
            $newInvoice->invoice_id = $_POST['invoice_id'];
            $newInvoice->invoice_title = $_POST['invoice_title'];

            // Copy the new invoice (Create it with a new id and title)
            $newInvoice->copy();

            // Create address for the new invoice
            $address = new \app\models\Address();
            $address = $address->getInvoiceAddress($invoice_id);
            $address->invoice_id = $newInvoice->invoice_id;
            $address->create();

            // Copy perfume orders
            $perfumes = new \app\models\PerfumeOrder();
            $existingPerfumes = $perfumes->getById($invoice_id);
            foreach ($existingPerfumes as $existingPerfume) {
                // Create a new perfume order for the new invoice
                $newPerfume = new \app\models\PerfumeOrder();
                $newPerfume->invoice_id = $newInvoice->invoice_id;
                $newPerfume->perfume_number = $existingPerfume->perfume_number;
                $newPerfume->quantity = $existingPerfume->quantity;
                $newPerfume->create();
            }

            // Redirect after successful creation
            header('location:/Main/index');
        } else {
            // Retrieve existing invoice, address, and perfume orders
            $invoice = new \app\models\Invoice();
            $invoice = $invoice->getById($invoice_id);
            $this->view('Invoice/copy', ['invoice' => $invoice]);
        }
    }

}