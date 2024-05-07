<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Update Invoice</h1>

        <div class="form-group">
            <label>Invoice ID:<input type="text" class="form-control" name="invoice_id" id="invoice_id"
                    placeholder="0001" value='<?= $invoice->invoice_id ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Project Number:<input type="text" class="form-control" name="invoice_project_num"
                    id="invoice_project_num" placeholder="0001" value='<?= $invoice->invoice_project_num ?>'
                    required /></label>
        </div><br>

        <div class="form-group">
            <label>Invoice Title:<input type="text" class="form-control" name="invoice_title" id="title"
                    placeholder="Spectra Invoice" value='<?= $invoice->invoice_title ?>' required /></label>
        </div><br>
        <div class="form-group">
            <label>Invoice Date:<input type="date" class="form-control" name="invoice_date" id="date"
                    value='<?= $invoice->invoice_date ?>' required /></label>
        </div><br>
        <div class="form-group">
            <label>Business Name:<input type="text" class="form-control" name="store_name" id="busname"
                    placeholder="Spectra" value='<?= $invoice->store_name ?>' required /></label>
            <!-- id is for the browser and name is for the server -->
        </div><br>
        <div class="form-group">
            <label>Street:<input type="text" class="form-control" name="street_name" id="street_name"
                    placeholder="12345 Example Road" value='<?= $address->street_name ?>' required /></label>

        </div><br>
        <div class="form-group">
            <label>City:<input type="text" class="form-control" name="city" id="city" placeholder="New York"
                    value='<?= $address->city ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Postal Code:<input type="text" class="form-control" name="postal_code" id="postal_code"
                    placeholder="A1E 5T8" value='<?= $address->postal_code ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Country:<input type="text" class="form-control" name="country" id="country" placeholder="Canada"
                    value='<?= $address->country ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Phone Number:<input type="text" class="form-control" name="phone_number" placeholder="5141234567"
                    id="pnum" value='<?= $invoice->phone_number ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Return Quantity:<input type="number" class="form-control" name="return_quantity" placeholder="10"
                    id="return" value='<?= $invoice->return_quantity ?>' required /></label>
        </div><br>

        <div class="form-group">
            <label>Perfume Price:<input type="number" class="form-control" name="perfume_price" placeholder="12345"
                    id="price" value='<?= $invoice->perfume_price ?>' required /></label>
        </div><br>

        <div class="dynamic" id="dynamic">
            <?php
            foreach ($perfumeOrders as $index => $perfume) {
                echo "<div class='form-group'><label>Perfume Code:<input type='number' class='form-control' name='perfume_number[]' placeholder='12345' id='pcode$index' value='" . $perfume->perfume_number . "' required /></label>";
                echo "<label>Perfume Quantity:<input type='number' class='form-control' name='quantity[]' placeholder='12345' id='quantity$index' value='" . $perfume->quantity . "' required /></label></div>";
            }
            ?>
        </div>

        <button type="button" onclick="addPerfumeField()">+</button>
        <button type="button" onclick="removePerfumeField()">-</button>

        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Update Invoice" required />
        </div> <br>
        <a href='/Main/index' class="btntwo">Cancel</a>
    </form>

    <script>
        let counter = <?php echo count($perfumeOrders); ?>;

        function saveValues() {
            // Save current input values
            const fields = document.querySelectorAll('#dynamic .form-group');
            return Array.from(fields).map(field => {
                return {
                    perfumeNumber: field.querySelector('[name="perfume_number[]"]').value,
                    quantity: field.querySelector('[name="quantity[]"]').value
                };
            });
        }

        function restoreValues(values) {
            // Restore input values
            const fields = document.querySelectorAll('#dynamic .form-group');
            values.forEach((value, index) => {
                fields[index].querySelector('[name="perfume_number[]"]').value = value.perfumeNumber;
                fields[index].querySelector('[name="quantity[]"]').value = value.quantity;
            });
        }

        function addPerfumeField() {
            const dynamicContainer = document.getElementById('dynamic');
            const values = saveValues();

            const newFieldHTML = `
        <div class="form-group">
            <label>Perfume Code:<input type="number" class="form-control" name="perfume_number[]" placeholder="999" required /></label>
            <label>Quantity:<input type="number" class="form-control" name="quantity[]" placeholder="999" required /></label><br>
        </div>
        `;
            dynamicContainer.innerHTML += newFieldHTML;
            counter++;
            restoreValues(values);
        }

        function removePerfumeField() {
            const dynamicContainer = document.getElementById('dynamic');
            const values = saveValues();

            if (counter > 1) {
                // Get the last field group and remove it
                dynamicContainer.removeChild(dynamicContainer.lastElementChild);
                counter--;
            }
            restoreValues(values.slice(0, counter)); // Restore except the last removed element
        }
    </script>
</div>

<?= $this->view('Shared/footer'); ?>