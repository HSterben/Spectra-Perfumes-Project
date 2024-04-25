<?= $this->view('Shared/header'); ?>

<div class='container'><br>
    <h1>Invoice Details</h1>
    <dl>
        <dt>Invoice ID:</dt>
        <dd><?= $invoice->invoice_id ?></dd><br>

        <dt>Project Number:</dt>
        <dd><?= $invoice->invoice_project_num ?></dd><br>

        <dt>Invoice Title:</dt>
        <dd><?= $invoice->invoice_title ?></dd><br>

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


    <form method="post" action=''>
        <input type="hidden" name="invoice_id" value="<?= $invoice->invoice_id ?>">
        <input type="submit" name="action" class="btn" value="Delete"><br><br>
        <a href='/Invoice/list' class="btntwo">Cancel</a>
    </form>
</div>

<?= $this->view('Shared/footer'); ?>
