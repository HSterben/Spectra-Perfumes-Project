<?= $this->view('Shared/header'); ?>
<?php
$user = getUser();
$multiplier = 1;
$currency = $user->current_currency;
if ($currency === 'AED') {
    $multiplier = 2.68;
}
?>
<link rel="stylesheet" href="/app/styles.css">
<a href='/Invoice/create'><button class=button2><?= __('Add a new invoice')?></button></a>
<a href='/Main/index'><button class=button2><?= __('Home')?></button></a>

    <div class='container'>
        <div class=header><?= __('Sales Analytics')?></div>
        <table>
            <br>
<form method="post" action="">
    <label for="date1">After:</label><input type="date" name="afterDate" id="date1">
    <label for="date2">Before:</label><input type="date" name="beforeDate" id="date2" value="<?php echo date('Y-m-d'); ?>">
    <input type="submit">
</form>
<br><br>

<?php foreach ($data as $sale): ?>
    <div class="invoice-container">
        <span class="invoice-id"><?= __('Invoice id: ')?><?= $sale->invoice_id ?></span>
        <span class="invoice-id"><?= __('Return value: ')?><?= ($sale->return_value * $multiplier) . $currency ?>$</span>
        <span class="invoice-id"><?= __('Purchase value: ')?><?= ($sale->purchase_value * $multiplier) . $currency ?>$</span>
        <span class="invoice-id"><?= __('Total value: ')?><?= ($sale->total_value * $multiplier) . $currency ?>$</span>
        </div>
    </div>
<?php endforeach; ?>
</table>
</div>

<?= $this->view('Shared/footer'); ?>