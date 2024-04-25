<?= $this->view('Shared/header'); ?>

    <div class='container'><br>
        <h1>Delete Invoice</h1>
        <p>Do you want to proceed with deletion of this invoice?</p>
        <dl>
            <dt>Invoice Title:</dt>
            <dd>
                <?= $data->invoice_title ?>
            </dd><br>

            <dt>Business Name:</dt>
            <dd>
                <?= $data->invoice_business_name ?>
            </dd>
            <br>
            <dt>Street:</dt>
            <dd>
                <?= $data->street ?>
            </dd>
            <br>
            <dt>City:</dt>
            <dd>
                <?= $data->city ?>
            </dd>
            <br>
            <dt>Postal Code:</dt>
            <dd>
                <?= $data->postal_code ?>
            </dd>
            <br>
            <dt>Country:</dt>
            <dd>
                <?= $data->country ?>
            </dd>
            <br>
            <dt>Phone Number:</dt>
            <dd>
                <?= $data->phone_number ?>
            </dd><br>
            <dt>Return Quantity:</dt>
            <dd>
                <?= $data->return_quantity ?>
            </dd>
            <br>
            <dt>Perfume Code:</dt>
            <dd>
                <?= $data->perfume_code ?>
            </dd>
            <br>
            <dt>Perfume Price:</dt>
            <dd>
                <?= $data->perfume_price ?>
            </dd>
            <br>
        </dl><br>
        <form method="post" action=''>
            <input type="submit" name="action" class="btn" value="Delete"><br><br>
            <a href='/Invoice/home' class="btntwo">Cancel</a>
        </form>
    </div>

<?= $this->view('Shared/header'); ?>