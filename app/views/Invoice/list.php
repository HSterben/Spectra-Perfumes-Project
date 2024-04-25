<?= $this->view('Shared/header'); ?>

<a href='/Invoice/create'>Add a new invoice</a>
<form method="post" action="/Invoice/confirmBulkDelete">
    <div class='container'>
        <table>
            <button type="submit">Bulk Delete</button>
</form>
<br><br>
<form method='post' action=''>
    <input type="text" name="query" placeholder="Search invoices...">
    <button type="submit" name="action">Search</button>
</form>
<?php foreach ($data as $invoice): ?>
    <tr>
        <td><input type="checkbox" name="selected_invoices[]" value="<?= $invoice->invoice_id ?>"></td>
        <td><?= $invoice->invoice_id ?></td>
        <td><a href='/Invoice/read/<?= $invoice->invoice_id ?>'>
                <?= $invoice->invoice_title ?>
            </a></td>
        <?php
        echo "<td><br><a href='/Invoice/update/{$invoice->invoice_id}'class='btn'>Edit</a>
                <a href='/Invoice/delete/{$invoice->invoice_id}'class='btn'>Delete</a>
                <a href='/Note/create/{$invoice->invoice_id}'class='btn'>Create Note</a>
                <a href='/Note/update/{$invoice->invoice_id}'class='btn'>Update Note</a>
                <a href='/Note/delete/{$invoice->invoice_id}'class='btn'>Delete Note</a></td>";
        ?>
    </tr>
<?php endforeach; ?>
</table>
</div>

<?= $this->view('Shared/footer'); ?>