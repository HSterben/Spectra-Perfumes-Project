<?= $this->view('Shared/header'); ?>
<link rel="stylesheet" href="/app/styles.css">
<a href='/Main/index'><button class="button2"><?= __('View All Invoices') ?></button></a>
<a href='/Main/sales'><button class="button2"><?= __('Sales Analytics') ?></button></a>

<h2><?= __('Bookmarked Invoices') ?></h2>

<div class='container'>
    <div class='header'><?= __('Bookmarks') ?></div>
    <table>
        <?php foreach ($data as $invoice): ?>
            <div class="invoice-container">
                <span class="invoice-id"><?= $invoice->invoice_id ?></span>
                <span class="invoice-title"><a href='/Invoice/index/<?= $invoice->invoice_id ?>'
                        class="invoice-title"><?= $invoice->invoice_title ?></a></span>
                <div class='invoice-actions'>
                    <a href='/Invoice/update/<?= $invoice->invoice_id ?>' class='btn'><?= __('Edit') ?></a>
                    <a href='/Invoice/delete/<?= $invoice->invoice_id ?>' class='btn'><?= __('Delete') ?></a>
                    <a href='/Invoice/copy/<?= $invoice->invoice_id ?>' class='btn'><?= __('Copy Invoice') ?></a>
                    <a href='/Note/create/<?= $invoice->invoice_id ?>' class='btn'><?= __('Create Note') ?></a>
                    <a href='/Note/update/<?= $invoice->invoice_id ?>' class='btn'><?= __('Update Note') ?></a>
                    <a href='/Note/delete/<?= $invoice->invoice_id ?>' class='btn'><?= __('Delete Note') ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </table>
</div>

<?= $this->view('Shared/footer'); ?>