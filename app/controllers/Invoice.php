<?php
namespace app\controllers;

class Invoice extends \app\core\Controller
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
        $this->view('Invoice/list', $data);
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

                for ($i = 0; $i < sizeof($perfumeNumber); $i++) {
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

            $perfumes = new \app\models\PerfumeOrder();
            $perfumes = $perfumes->getById($invoice_id);
            for ($i = 0; $i < sizeof($perfumeNumber); $i++) {
                $perfumes[$i]->invoice_id = $invoice->invoice_id;
                $perfumes[$i]->perfume_number = $perfumeNumber[$i];
                $perfumes[$i]->quantity = $quantities[$i];
                $perfumes[$i]->update();
            }

            // Redirect after successful creation
            header('location:/Invoice/list');
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
            header('location:/Invoice/list');
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
            header('location:/Invoice/list');
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

            header('location:/Invoice/list');
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

    public function updateNote($invoice_id)
    { //Could perhaps remove Address and PerfumeNumber from this method
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
            $invoice->note_text = $_POST['note_text'];
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

            for ($i = 0; $i < sizeof($perfumeNumber); $i++) {
                $perfumeOrder = new \app\models\PerfumeOrder();
                $perfumeOrder->invoice_id = $invoice->invoice_id;
                $perfumeOrder->perfume_number = $perfumeNumber[$i];
                $perfumeOrder->quantity = $quantities[$i];
                $perfumeOrder->update();
            }

            // Redirect after successful creation
            header('location:/Invoice/list');
        } else {
            $invoice = new \app\models\Invoice();
            $invoice = $invoice->getById($invoice_id);
            $address = new \app\models\Address();
            $address = $address->getById($invoice_id);
            $perfumeOrders = new \app\models\PerfumeOrder();
            $perfumeOrders = $perfumeOrders->getById($invoice_id);

            $data = [$invoice, $address, $perfumeOrders];

            $this->view('Invoice/updateNote', $data);
        }
    }

}
