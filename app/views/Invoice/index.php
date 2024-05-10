<?= $this->view('Shared/header'); ?>

<link rel="stylesheet" type="text/css" href="/app/printInvoice.css" media="print">
<?php $user = getUser();?>
<div class='container'><br>
    <h1>Invoice Details</h1>
    <button onclick="window.print();" class="btn" id="print-btn">Print</button>

    <dl>
        <dt>Invoice ID:</dt>
        <dd><?= $invoice->invoice_id ?></dd><br>

        <dt>Project Number:</dt>
        <dd><?= $invoice->invoice_project_num ?></dd><br>

        <dt>Invoice Title:</dt>
        <dd><?= $invoice->invoice_title ?></dd><br>

        <dt>Invoice Date:</dt>
        <dd><?= date($user->date_format, strtotime($invoice->invoice_date)) ?></dd><br>

        <dt>Business Name:</dt>
        <dd><?= $invoice->store_name ?></dd><br>

        <dt>Street:</dt>
        <dd><?= $address->street_name ?></dd><br>

        <dt>City:</dt>
        <dd><?= $address->city ?></dd><br>

        <dt>Postal Code:</dt>
        <dd><?= $address->postal_code ?></dd><br>

        <dt>Country:</dt>
        <dd><?= $address->country ?></dd><br>

        <dt>Phone Number:</dt>
        <dd><?= $invoice->phone_number ?></dd><br>

        <dt>Return Quantity:</dt>
        <dd><?= $invoice->return_quantity ?></dd><br>

        <dt>Perfume Price:</dt>
        <dd><?= number_format((double) $invoice->perfume_price, 2, '.', '') . " " . $user->current_currency ?> $</dd><br>

        <div class="form-group">
            <div class="form-group">
                <?php
                foreach ($perfumeOrder as $perfume) {
                    echo "<label>Perfume Code:<input type='number' class='form-control' name='perfume_number[]' placeholder='12345'
                id='pcode' value='" . $perfume->perfume_number . "' readonly/></label>
        <label>Perfume Quantity:<input type='number' class='form-control' name='quantity[]' placeholder='12345'
                id='quantity' value='" . $perfume->quantity . "' readonly /></label>
                <br>";
                }
                ?>
            </div><br>

            <dt id="note">Note:</dt>
            <dd id="note"><?= $invoice->note_text ?></dd><br>


            <button class="print-btn"><a href='/Main/index' class="btntwo" id="print-btn">Back</a></button>
            </form>
        </div>

        <?= $this->view('Shared/footer'); ?>