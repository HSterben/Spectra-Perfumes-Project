<?= $this->view('Shared/header'); ?>
<link rel="stylesheet" href="/app/styles.css">
<button class=button2> <a href='/Invoice/create'>Add a new invoice</a></button>

<form method="post" action="/Invoice/confirmBulkDelete"  style="display: inline;">
    <button type="submit">Bulk Delete</button>

    <div class='container'>
        <div class=header>Home</div>
        <table>

</form>
<br><br>
<form method='post' action=''>

    <input type="text" name="query" placeholder="Search invoices...">
    <!-- <button type="submit" name="action">Search</button> -->


</form><br><br>
<?php foreach ($data as $invoice): ?>
    <div class="invoice-container">
        <input type="checkbox" name="selected_invoices[]" value="<?= $invoice->invoice_id ?>">
        <span class="invoice-id"><?= $invoice->invoice_id ?></span>
        <span class="invoice-title"><a href='/Invoice/read/<?= $invoice->invoice_id ?>' class="invoice-title"><?= $invoice->invoice_title ?></a></span>
        <div class='invoice-actions'>
            <a href='/Invoice/update/<?= $invoice->invoice_id ?>' class='btn'>Edit</a>
            <a href='/Invoice/delete/<?= $invoice->invoice_id ?>' class='btn'>Delete</a>
            <a href='/Note/create/<?= $invoice->invoice_id ?>' class='btn'>Create Note</a>
            <a href='/Note/update/<?= $invoice->invoice_id ?>' class='btn'>Update Note</a>
            <a href='/Note/delete/<?= $invoice->invoice_id ?>' class='btn'>Delete Note</a>
            <a href='/Invoice/copy/<?= $invoice->invoice_id ?>' class='btn'>Copy Invoice</a>
        </div>
    </div>
<?php endforeach; ?>
</table>
</div>

<?= $this->view('Shared/footer'); ?>