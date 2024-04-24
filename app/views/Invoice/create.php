<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action='' onsubmit="return validateForm()"><br>

        <h1>Create Invoice</h1>

        <div class="form-group">
            <label>Invoice Title:<input type="text" class="form-control" name="invoice_title" id="title"
                    placeholder="Spectra Invoice" /></label>
        </div><br>
        <div class="form-group">
            <label>Business Name:<input type="text" class="form-control" name="store_name" id="busname"
                    placeholder="Spectra" /></label> <!-- id is for the browser and name is for the server -->
        </div><br>
        <div class="form-group">
            <label>Street:<input type="text" class="form-control" name="street" id="street"
                    placeholder="12345 Example Road" /></label>

        </div><br>
        <div class="form-group">
            <label>City:<input type="text" class="form-control" name="city" id="city" placeholder="New York" /></label>
        </div><br>

        <div class="form-group">
            <label>Postal Code:<input type="text" class="form-control" name="postal_code" id="postal_code"
                    placeholder="A1E 5T8" /></label>
        </div><br>

        <div class="form-group">
            <label>Country:<input type="text" class="form-control" name="country" id="country"
                    placeholder="Canada" /></label>
        </div><br>

        <div class="form-group">
            <label>Phone Number:<input type="text" class="form-control" name="phone_number" placeholder="5141234567"
                    id="pnum" /></label>
        </div><br>

        <div class="form-group">
            <label>Return Quantity:<input type="number" class="form-control" name="return_quantity" placeholder="10"
                    id="return" /></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Code:<input type="number" class="form-control" name="perfume_code" placeholder="12345"
                    id="pcode" /></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Price:<input type="number" class="form-control" name="perfume_price" placeholder="12345"
                    id="price" /></label>
        </div><br>

        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Create Invoice" />
        </div> <br>
        <a href='/Invoice/list' class="btntwo">Cancel</a>

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