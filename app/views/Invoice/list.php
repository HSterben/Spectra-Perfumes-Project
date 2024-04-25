<?= $this->view('Shared/header'); ?>

<a href='/Invoice/create'>Add a new invoice</a>
<form method="post" action="/Invoice/confirmBulkDelete">
    <div class='container'>
        <table>
            <button type="submit">Bulk Delete</button>
            <br><br>

            <?php foreach ($data as $invoice): ?>
                <tr>
                    <td><input type="checkbox" name="selected_invoices[]" value="<?= $invoice->invoice_id ?>"></td>
                    <td><?= $invoice->invoice_id ?></td>
                    <td><a href='/Invoice/read/<?= $invoice->invoice_id ?>'>
                                <?= $invoice->invoice_title ?>
                            </a></td>
                    <?php
                    echo "<td><br><a href='/Invoice/update/{$invoice->invoice_id}'class='btn'>Edit</a>
                <a href='/Invoice/delete/{$invoice->invoice_id}'class='btn'>Delete</a></td>";
                    ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</form>

<?= $this->view('Shared/footer'); ?>