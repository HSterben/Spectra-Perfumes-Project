<?= $this->view('Shared/header'); ?>
<link rel="stylesheet" href="/app/styles.css">
<a href='/Invoice/create'><button class=button2><?= __('Add a new invoice')?></button></a>
<a href='/Main/index'><button class=button2><?= __('Home')?></button></a>

    <div class='container'>
        <div class=header><?= __('Sales Analytics')?></div>
        <table>

</form>
<br><br>

<?php foreach ($data as $sale): ?>
    <div class="invoice-container">
        <span class="invoice-id"><?= __('Invoice id: ')?><?= $sale->invoice_id ?></span>
        <span class="invoice-id"><?= __('Return value: ')?><?= $sale->return_value ?>$</span>
        <span class="invoice-id"><?= __('Purchase value: ')?><?= $sale->purchase_value ?>$</span>
        <span class="invoice-id"><?= __('Total value: ')?><?= $sale->total_value ?>$</span>
        </div>
    </div>
<?php endforeach; ?>
</table>
</div>

<?= $this->view('Shared/footer'); ?>