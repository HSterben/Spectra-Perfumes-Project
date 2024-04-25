<?php
namespace app\controllers;

class Note extends \app\core\Controller
{
    public function update($invoice_id) {
        $invoice = new \app\models\Invoice();
        $invoice = $invoice->getById($invoice_id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $invoice->note_text = $_POST['note_text'];
            $invoice->update();
            header('Location: /Invoice/list');
        }
        $this->view('Note/update', ['invoice' => $invoice]);
    }

    public function create($invoice_id) {
        $invoice = (new \app\models\Invoice())->getById($invoice_id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['note_text'])) {
                $invoice->note_text = $_POST['note_text'];
                $invoice->update();
                header('Location: /Invoice/list');
            }
        }
        $this->view('Note/create', ['invoice' => $invoice]);
    }

    public function delete($invoice_id) {
        $invoice = new \app\models\Invoice();
        $invoice = $invoice->getById($invoice_id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $invoice->note_text = '';
            $invoice->update();
            header('Location: /Invoice/list');
        }
        $this->view('Note/delete', ['invoice' => $invoice]);
    }
}