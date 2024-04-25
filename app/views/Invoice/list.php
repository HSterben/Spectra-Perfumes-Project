<?= $this->view('Shared/header'); ?>

<a href='/Invoice/create'>Add a new invoice</a>
<form method="post" action="/Invoice/confirmBulkDelete">
    <div class='container'>
        <table>
		<button type="submit">Bulk Delete</button>
		<br><br>

            <?php foreach ($data as $invoice): ?>
                <tr>
                    <td><input type="checkbox" name="selected_invoices[]" value="<?= $invoice->invoice_id ?>"></td>
                    <td><?= $invoice->invoice_id ?></td>
                    <td><?= $invoice->invoice_title ?></td>
                    <td><a href='/Invoice/update?id=<?= $invoice->invoice_id ?>'> Update </a></td>
                    <td><a href='/Invoice/delete?id=<?= $invoice->invoice_id ?>'> Delete </a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</form>

<?= $this->view('Shared/footer'); ?>
