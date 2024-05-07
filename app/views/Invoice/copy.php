<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Copy Invoice</h1>

        <!-- <PRE> <?= var_dump($invoice)?> </PRE> -->

        <div class="form-group">
            <label>Invoice ID:<input type="text" class="form-control" name="invoice_id" id="invoice_id"
                    placeholder="0001" required /></label>
        </div><br>

        <div class="form-group">
            <label>Would you like to rename the Invoice Title? :<input type="text" class="form-control" name="invoice_title" id="title"
            value='Copy of <?= $invoice->invoice_title ?>' required /></label>
        </div><br>

        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Copy Invoice" required />
        </div> <br>
        <a href='/Main/index' class="btntwo">Cancel</a>
    </form>
</div>

<?= $this->view('Shared/footer'); ?>