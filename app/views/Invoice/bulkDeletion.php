<?= $this->view('Shared/header'); ?>

<div class='container'><br>
    <h1><?= __('Bulk Invoice Deletion')?></h1>
    <p><?= __('Do you want to proceed with the deletion of the following invoices?')?></p>
    <ul>
        <?php foreach ($data as $invoice): ?>
            <li><?= $invoice->invoice_title ?></li>
        <?php endforeach; ?>
    </ul>
    <form method="post" action="/Invoice/performBulkDelete">
        <?php foreach ($data as $invoice): ?>
            <input type="hidden" name="selected_invoices[]" value="<?= $invoice->invoice_id ?>">
        <?php endforeach; ?>
        <input type="submit" name="action" class="btn" value="Delete"><br><br>
        <a href='/Main/index' class="btntwo"><?= __('Cancel')?></a>
    </form>
</div>

<?= $this->view('Shared/footer'); ?>
