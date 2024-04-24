<?= $this->view('Shared/header'); ?>

    <div class='container'><br>
        <h1>Bulk Invoice Deletion</h1>
        <p>Do you want to proceed with deletion of these invoices?</p>
        <dl>
            <dt>Invoice Title:</dt>
            <dd>
                <?= $data->invoice_title ?>
            </dd><br>

            <br>
        </dl><br>
        <form method="post" action=''>
            <input type="submit" name="action" class="btn" value="Delete"><br><br>
            <a href='/Invoice/home' class="btntwo">Cancel</a>
        </form>
    </div>

<?= $this->view('Shared/header'); ?>