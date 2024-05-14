<?= $this->view('Shared/header'); ?>

<link rel="stylesheet" type="text/css" href="/app/printInvoice.css" media="print">
<?php $user = getUser();?>
<div class='container'><br>
    <h1><?= __('Invoice Details')?></h1>
    <button onclick="window.print();" class="btn" id="print-btn">Print</button>

    <dl>
        <dt><?= __('Invoice ID:')?></dt>
        <dd><?= $invoice->invoice_id ?></dd><br>

        <dt><?= __('Project Number:')?></dt>
        <dd><?= $invoice->invoice_project_num ?></dd><br>

        <dt><?= __('Invoice Title:')?></dt>
        <dd><?= $invoice->invoice_title ?></dd><br>

        <dt><?= __('Invoice Date:')?></dt>
        <dd><?= date($user->date_format, strtotime($invoice->invoice_date)) ?></dd><br>

        <dt><?= __('Business Name:')?></dt>
        <dd><?= $invoice->store_name ?></dd><br>

        <dt><?= __('Street:')?></dt>
        <dd><?= $address->street_name ?></dd><br>

        <dt><?= __('City:')?></dt>
        <dd><?= $address->city ?></dd><br>

        <dt><?= __('Postal Code:')?></dt>
        <dd><?= $address->postal_code ?></dd><br>

        <dt><?= __('Country:')?></dt>
        <dd><?= $address->country ?></dd><br>

        <dt><?= __('Phone Number:')?></dt>
        <dd><?= $invoice->phone_number ?></dd><br>

        <dt><?= __('Return Quantity:')?></dt>
        <dd><?= $invoice->return_quantity ?></dd><br>

        <dt><?= __('Perfume Price:')?></dt>
        <dd><?= number_format((double) $invoice->perfume_price, 2, '.', '') . " " . $user->current_currency ?> $</dd><br>

        <div class="form-group">
            <div class="form-group">
                <?php
                foreach ($perfumeOrder as $perfume) {
                    echo "<label><?= __('Perfume Code:')?><input type='number' class='form-control' name='perfume_number[]' placeholder='12345'
                id='pcode' value='" . $perfume->perfume_number . "' readonly/></label>
        <label><?= __('Perfume Quantity:')?><input type='number' class='form-control' name='quantity[]' placeholder='12345'
                id='quantity' value='" . $perfume->quantity . "' readonly /></label>
                <br>";
                }
                ?>
            </div><br>

            <dt id="note"><?= __('Note:')?></dt>
            <dd id="note"><?= $invoice->note_text ?></dd><br>


            <button class="print-btn"><a href='/Main/index' class="btntwo" id="print-btn"><?= __('Back')?></a></button>
            </form>
        </div>

        <?= $this->view('Shared/footer'); ?>