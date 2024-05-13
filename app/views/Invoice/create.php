<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1><?= __('Create Invoice')?></h1>

        <div class="form-group">
            <label><?= __('Invoice ID:')?><input type="text" class="form-control" name="invoice_id" id="invoice_id"
                    placeholder="0001" required /></label>
        </div><br>

        <div class="form-group">
            <label><?= __('Project Number:')?><input type="text" class="form-control" name="invoice_project_num"
                    id="invoice_project_num" placeholder="0001" required /></label>
        </div><br>

        <div class="form-group">
            <label><?= __('Invoice Title:')?><input type="text" class="form-control" name="invoice_title" id="title"
                    placeholder="Spectra Invoice" required /></label>
        </div><br>
        <div class="form-group">
            <label><?= __('Invoice Date:')?><input type="date" class="form-control" name="invoice_date" id="date"
                    required /></label>
        </div><br>
        <div class="form-group">
            <label><?= __('Business Name:')?><input type="text" class="form-control" name="store_name" id="busname"
                    placeholder="Spectra" required /></label>
            <!-- id is for the browser and name is for the server -->
        </div><br>
        <div class="form-group">
            <label><?= __('Street:')?><input type="text" class="form-control" name="street_name" id="street_name"
                    placeholder="12345 Example Road" required /></label>

        </div><br>
        <div class="form-group">
            <label><?= __('City:')?><input type="text" class="form-control" name="city" id="city" placeholder="New York"
                    required /></label>
        </div><br>

        <div class="form-group">
            <label><?= __('Postal Code:')?><input type="text" class="form-control" name="postal_code" id="postal_code"
                    placeholder="A1E 5T8" required /></label>
        </div><br>

        <div class="form-group">
            <label><?= __('Country:')?><input type="text" class="form-control" name="country" id="country" placeholder="Canada"
                    required /></label>
        </div><br>

        <div class="form-group">
            <label><?= __('Phone Number:')?><input type="text" class="form-control" name="phone_number" placeholder="5141234567"
                    id="pnum" required /></label>
        </div><br>

        <div class="form-group">
            <label><?= __('Return Quantity:')?><input type="number" class="form-control" name="return_quantity" placeholder="10"
                    id="return" required /></label>
        </div><br>

        <div class="form-group">
            <label><?= __('Perfume Price:')?><input type="text" class="form-control" name="perfume_price" placeholder="12345"
                    id="price" required /></label>
        </div><br>

        <div id="dynamic">
            <div class="form-group">
                <label><?= __('Perfume Code:')?><input type="number" class="form-control" name="perfume_number[]" placeholder="999"
                        required /></label>
                <label><?= __('Quantity:')?><input type="number" class="form-control" name="quantity[]" placeholder="999"
                        required /></label>
            </div>
        </div>

        <button type="button" onclick="addPerfumeField()">+</button>
        <button type="button" onclick="removePerfumeField()">-</button>

        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Create Invoice" required />
        </div> <br>
        <a href='/Main/index' class="btntwo"><?= __('Cancel')?></a>

    </form>
    <script>
        let counter = 1;

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
        <label>Quantity:<input type="number" class="form-control" name="quantity[]" placeholder="999" required /></label>
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