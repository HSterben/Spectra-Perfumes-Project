<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Create Invoice</h1>

        <div class="form-group">
            <label>Invoice ID:<input type="text" class="form-control" name="invoice_id" id="invoice_id"
                    placeholder="0001" required /></label>
        </div><br>

        <div class="form-group">
            <label>Project Number:<input type="text" class="form-control" name="invoice_project_num"
                    id="invoice_project_num" placeholder="0001" required /></label>
        </div><br>

        <div class="form-group">
            <label>Invoice Title:<input type="text" class="form-control" name="invoice_title" id="title"
                    placeholder="Spectra Invoice" required /></label>
        </div><br>
        <div class="form-group">
            <label>Invoice Date:<input type="date" class="form-control" name="invoice_date" id="date"
                    required /></label>
        </div><br>
        <div class="form-group">
            <label>Business Name:<input type="text" class="form-control" name="store_name" id="busname"
                    placeholder="Spectra" required /></label>
            <!-- id is for the browser and name is for the server -->
        </div><br>
        <div class="form-group">
            <label>Street:<input type="text" class="form-control" name="street_name" id="street_name"
                    placeholder="12345 Example Road" required /></label>

        </div><br>
        <div class="form-group">
            <label>City:<input type="text" class="form-control" name="city" id="city" placeholder="New York"
                    required /></label>
        </div><br>

        <div class="form-group">
            <label>Postal Code:<input type="text" class="form-control" name="postal_code" id="postal_code"
                    placeholder="A1E 5T8" required /></label>
        </div><br>

        <div class="form-group">
            <label>Country:<input type="text" class="form-control" name="country" id="country" placeholder="Canada"
                    required /></label>
        </div><br>

        <div class="form-group">
            <label>Phone Number:<input type="text" class="form-control" name="phone_number" placeholder="5141234567"
                    id="pnum" required /></label>
        </div><br>

        <div class="form-group">
            <label>Return Quantity:<input type="number" class="form-control" name="return_quantity" placeholder="10"
                    id="return" required /></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Price:<input type="text" class="form-control" name="perfume_price" placeholder="12345"
                    id="price" required /></label>
        </div><br>

        <div id="dynamic">
            <div class="form-group">
                <label>Perfume Code:<input type="number" class="form-control" name="perfume_number[]" placeholder="999"
                        id="perfume_number" required /></label>
                <label>Quantity:<input type="number" class="form-control" name="quantity[]" placeholder="999"
                        id="quantity" required /></label>
            </div><br>
        </div>

        <button type="button" onclick="addPerfumeField()">+</button>

        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Create Invoice" required />
        </div> <br>
        <a href='/Invoice/list' class="btntwo">Cancel</a>

    </form>
    <script>
        function addPerfumeField() {
            // Create HTML string for the new dynamic field
            var newFieldHTML = `
        <div class="form-group">
            <label>Perfume Code:<input type="number" class="form-control" name="perfume_number[]" placeholder="999" required /></label>
            <label>Quantity:<input type="number" class="form-control" name="quantity[]" placeholder="999" required /></label>
        </div><br>
    `;

            // Append the new HTML to the dynamic-fields container
            document.getElementById('dynamic').innerHTML += newFieldHTML;
        }
    </script>
</div>

<?= $this->view('Shared/header'); ?>