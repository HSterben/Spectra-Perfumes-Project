<?= $this->view('Shared/header'); ?>
<link rel="stylesheet" href="/app/styles.css">
<a href='/Invoice/create'><button class=button2>Add a new invoice</button></a>
<a href='/Main/index'><button class=button2>Home</button></a>

    <div class='container'>
        <div class=header>Sales Analytics</div>
        <table>

</form>
<br><br>

<?php foreach ($data as $sale): ?>
    <div class="invoice-container">
        <span class="invoice-id">Invoice id: <?= $sale->invoice_id ?></span>
        <span class="invoice-id">Return value: <?= $sale->return_value ?>$</span>
        <span class="invoice-id">Purchase value: <?= $sale->purchase_value ?>$</span>
        <span class="invoice-id">Total value: <?= $sale->total_value ?>$</span>
        </div>
    </div>
<?php endforeach; ?>
</table>
</div>

<?= $this->view('Shared/footer'); ?>