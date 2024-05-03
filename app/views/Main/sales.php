<?= $this->view('Shared/header'); ?>
<link rel="stylesheet" href="/app/styles.css">
<button class=button2> <a href='/Invoice/create'>Add a new invoice</a></button>
<button class=button2> <a href='/Main/sales'>Sales Analytics</a></button>

<form method="post" action="/Invoice/confirmBulkDelete" style="display: inline;">
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