<?= $this->view('Shared/header'); ?>
<link rel="stylesheet" href="/app/styles.css">
<a href='/Invoice/create'><button class=button2><?= __('Add a new invoice')?></button></a>
<a href='/Main/sales'><button class=button2><?= __('Sales Analytics')?></button></a>


<form method="post" action="/Invoice/confirmBulkDelete" style="display: inline;">
    <button type="submit"><?= __('Bulk Delete')?></button>



    <div class='container'>
        <div class=header><?= __('Home')?></div>
        <table>

</form>
<form method="post" action="/Main/index" id="sortForm">
    <select name="sort" id="sort">
        <option value=""><?= __('Sort by...')?></option>
        <option value="invoice_date"><?= __('Invoice Date')?></option>
        <option value="invoice_id"><?= __('Invoice Id')?></option>
        <option value="invoice_project_number"><?= __('Invoice Project Number')?></option>
    </select>
</form>

<br><br>
<form method='post' action=''>

    <input type="text" name="query" placeholder=<?= __('Search invoices...')?>>
    <!-- <button type="submit" name="action">Search</button> -->


</form><br><br>
<?php foreach ($data as $invoice): ?>
    <div class="invoice-container">
        <input type="checkbox" name="selected_invoices[]" value="<?= $invoice->invoice_id ?>">
        <span class="invoice-id"><?= $invoice->invoice_id ?></span>
        <span class="invoice-title"><a href='/Invoice/index/<?= $invoice->invoice_id ?>'
                class="invoice-title"><?= $invoice->invoice_title ?></a></span>
        <div class='invoice-actions'>
            <a href='/Invoice/update/<?= $invoice->invoice_id ?>' class='btn'><?= __('Edit')?></a>
            <a href='/Invoice/delete/<?= $invoice->invoice_id ?>' class='btn'><?= __('Delete')?></a>
            <a href='/Invoice/copy/<?= $invoice->invoice_id ?>' class='btn'><?= __('Copy Invoice')?></a>
            <a href='/Note/create/<?= $invoice->invoice_id ?>' class='btn'><?= __('Create Note')?></a>
            <a href='/Note/update/<?= $invoice->invoice_id ?>' class='btn'><?= __('Update Note')?></a>
            <a href='/Note/delete/<?= $invoice->invoice_id ?>' class='btn'><?= __('Delete Note')?></a>
        </div>
    </div>
<?php endforeach; ?>
<p>This a second test for the font size</p>
</table>
</div>

<script>
    document.getElementById('sort').addEventListener('change', function () {
        document.getElementById('sortForm').submit();
    });
</script>
<?= $this->view('Shared/footer'); ?>