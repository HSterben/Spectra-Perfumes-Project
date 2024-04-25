<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Update Invoice</h1>

        <div class="form-group">
            <label>Invoice ID:<input type="text" class="form-control" name="invoice_id" id="invoice_id"
                    placeholder="0001" value='<?= $data[0]->invoice_id ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Project Number:<input type="text" class="form-control" name="invoice_project_num"
                    id="invoice_project_num" placeholder="0001" value='<?= $data[0]->invoice_project_num ?>'
                    required /></label>
        </div><br>

        <div class="form-group">
            <label>Invoice Title:<input type="text" class="form-control" name="invoice_title" id="title"
                    placeholder="Spectra Invoice" value='<?= $data[0]->invoice_title ?>' required /></label>
        </div><br>
        <div class="form-group">
            <label>Business Name:<input type="text" class="form-control" name="store_name" id="busname"
                    placeholder="Spectra" value='<?= $data[0]->store_name ?>' required /></label>
            <!-- id is for the browser and name is for the server -->
        </div><br>
        <div class="form-group">
            <label>Street:<input type="text" class="form-control" name="street_name" id="street_name"
                    placeholder="12345 Example Road" value='<?= $data[1]->street_name ?>' required /></label>

        </div><br>
        <div class="form-group">
            <label>City:<input type="text" class="form-control" name="city" id="city" placeholder="New York"
                    value='<?= $data[1]->city ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Postal Code:<input type="text" class="form-control" name="postal_code" id="postal_code"
                    placeholder="A1E 5T8" value='<?= $data[1]->postal_code ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Country:<input type="text" class="form-control" name="country" id="country" placeholder="Canada"
                    value='<?= $data[1]->country ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Phone Number:<input type="text" class="form-control" name="phone_number" placeholder="5141234567"
                    id="pnum" value='<?= $data[0]->phone_number ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Return Quantity:<input type="number" class="form-control" name="return_quantity" placeholder="10"
                    id="return" value='<?= $data[0]->return_quantity ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Price:<input type="number" class="form-control" name="perfume_price" placeholder="12345"
                    id="price" value='<?= $data[0]->perfume_price ?>' required/></label>
        </div><br>

        <div class="form-group">
            <div class="form-group">
                <?php
                foreach ($data[2] as $perfume) {
                    echo "<label>Perfume Code:<input type='number' class='form-control' name='perfume_number[]' placeholder='12345'
                id='pcode' value='" . $perfume->perfume_number . "' required /></label>
        <label>Perfume Quantity:<input type='number' class='form-control' name='quantity[]' placeholder='12345'
                id='quantity' value='" . $perfume->quantity . "' required /></label>
                <br>";
                }
                ?>
            </div><br>
        </div><br>

        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Create Invoice" required />
        </div> <br>
        <a href='/Invoice/list' class="btntwo">Cancel</a>

    </form>
</div>

<?= $this->view('Shared/header'); ?>