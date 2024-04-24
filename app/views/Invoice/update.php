<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action='' onsubmit="return validateForm()"><br>

        <h1>Create Invoice</h1>

        <div class="form-group">
            <label>Invoice Title:<input type="text" class="form-control" name="invoice_title" id="title"
                    placeholder="Spectra Invoice" value='<?= $data->invoice_title ?>' /></label>
        </div><br>
        <div class="form-group">
            <label>Business Name:<input type="text" class="form-control" name="business_name" id="busname"
                    placeholder="Spectra" value='<?= $data->invoice_business_name ?>' /></label>
            <!-- id is for the browser and name is for the server -->
        </div><br>

        <div class="form-group">
            <label>Street:<input type="text" class="form-control" name="street" id="street"
                    placeholder="12345 Example Road" value='<?= $data->street ?>' /></label>

        </div><br>
        <div class="form-group">
            <label>City:<input type="text" class="form-control" name="city" id="city" placeholder="New York"
                    value='<?= $data->city ?>' /></label>
        </div><br>

        <div class="form-group">
            <label>Postal Code:<input type="text" class="form-control" name="postal_code" id="postal_code"
                    placeholder="A1E 5T8" value='<?= $data->postal_code ?>' /></label>
        </div><br>

        <div class="form-group">
            <label>Country:<input type="text" class="form-control" name="country" id="country" placeholder="Canada"
                    value='<?= $data->country ?>' /></label>
        </div><br>
        <div class="form-group">
            <label>Phone Number:<input type="text" class="form-control" name="phone_number" placeholder="5141234567"
                    id="pnum" value='<?= $data->phone_number ?>' /></label>
        </div><br>

        <div class="form-group">
            <label>Return Quantity:<input type="number" class="form-control" name="return_quantity" placeholder="10"
                    id="return" value='<?= $data->return_quantity ?>' /></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Code:<input type="number" class="form-control" name="perfume_code" placeholder="12345"
                    id="pcode" value='<?= $data->perfume_code ?>' /></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Price:<input type="number" class="form-control" name="perfume_code" placeholder="12345"
                    id="price" value='<?= $data->perfume_price ?>' /></label>
        </div><br>

        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Update Invoice" />
        </div> <br>
        <a href='/Invoice/home' class="btntwo">Cancel</a>

    </form>
</div>

<script>
    function validateForm() {
        var title = document.getElementById("title").value;
        var business = document.getElementById("busname").value;
        var phone = document.getElementById("pnum").value;
        var return = document.getElementById("return").value;
        var code = document.getElementById("pcode").value;
        var price = document.getElementById("pprice").value;
        var street = document.getElementById("street").value;
        var city = document.getElementById("city").value;
        var postal_code = document.getElementById("postal_code").value;
        var country = document.getElementById("country").value;




        if (title.trim() === '' || country.trim() === '' || postal_code.trim() === '' || city.trim() === '' || street.trim() === '' || business.trim() === '' || phone.trim() === '' || code.trim() === '' || price.trim() === '') {
            alert("Please fill in all fields.");
            return false;
        }
        return true;
    }
</script>

<?= $this->view('Shared/header'); ?>