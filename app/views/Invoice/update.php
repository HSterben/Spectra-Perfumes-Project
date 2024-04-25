<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action='' onsubmit="return validateForm()"><br>

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
            <label>Perfume Code:<input type="number" class="form-control" name="perfume_code" placeholder="12345"
                    id="pcode" value='<?= $data->perfume_code ?>' required="true"/></label>
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

<script>
    function validateForm() {
        var invoice_id = document.getElementById("invoice_id").value;
        var invoice_project_num = document.getElementById("project_num").value;
        var title = document.getElementById("title").value;
        var business = document.getElementById("busname").value;
        var phone = document.getElementById("pnum").value;
        var return = document.getElementById("return").value;
        var code = document.getElementById("pcode").value;
        var price = document.getElementById("pprice").value;
        var street_name = document.getElementById("street_name").value;
        var city = document.getElementById("city").value;
        var postal_code = document.getElementById("postal_code").value;
        var country = document.getElementById("country").value;




        if (invoice_project_num.trim() === '' || invoice_id.trim() === '' || title.trim() === '' || country.trim() === '' || postal_code.trim() === '' || city.trim() === '' || street_name.trim() === '' || business.trim() === '' || phone.trim() === '' || code.trim() === '' || price.trim() === '') {
            alert("Please fill in all fields.");
            return false;
        }
        return true;
    }
</script>

<?= $this->view('Shared/header'); ?>