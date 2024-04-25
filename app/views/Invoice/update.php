<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Update Invoice</h1>

        <div class="form-group">
            <label>Invoice ID:<input type="text" class="form-control" name="invoice_id" id="invoice_id"
                    placeholder="0001" value='<?= $data->invoice_id ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <label>Project Number:<input type="text" class="form-control" name="invoice_project_num" id="invoice_project_num"
                    placeholder="0001" value='<?= $data->invoice_project_num ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <label>Invoice Title:<input type="text" class="form-control" name="invoice_title" id="title"
                    placeholder="Spectra Invoice" value='<?= $data->invoice_title ?>' required="true"/></label>
        </div><br>
        <div class="form-group">
            <label>Business Name:<input type="text" class="form-control" name="store_name" id="busname"
                    placeholder="Spectra" value='<?= $data->store_name ?>' required="true"/></label> <!-- id is for the browser and name is for the server -->
        </div><br>
        <div class="form-group">
            <label>Street:<input type="text" class="form-control" name="street_name" id="street_name"
                    placeholder="12345 Example Road" value='<?= $data->street_name ?>' required="true"/></label>

        </div><br>
        <div class="form-group">
            <label>City:<input type="text" class="form-control" name="city" id="city" placeholder="New York" 
            value='<?= $data->city ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <label>Postal Code:<input type="text" class="form-control" name="postal_code" id="postal_code"
                    placeholder="A1E 5T8" value='<?= $data->postal_code ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <label>Country:<input type="text" class="form-control" name="country" id="country"
                    placeholder="Canada" value='<?= $data->country ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <label>Phone Number:<input type="text" class="form-control" name="phone_number" placeholder="5141234567"
                    id="pnum" value='<?= $data->phone_number ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <label>Return Quantity:<input type="number" class="form-control" name="return_quantity" placeholder="10"
                    id="return" value='<?= $data->return_quantity ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Code:<input type="number" class="form-control" name="perfume_number" placeholder="12345"
                    id="pcode" value='<?= $data->perfume_number ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Price:<input type="number" class="form-control" name="perfume_price" placeholder="12345"
                    id="price" value='<?= $data->perfume_price ?>' required="true"/></label>
        </div><br>

        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Create Invoice" required="true"/>
        </div> <br>
        <a href='/Invoice/list' class="btntwo">Cancel</a>

    </form>
</div>

<?= $this->view('Shared/header'); ?>