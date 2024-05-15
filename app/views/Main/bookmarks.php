<?= $this->view('Shared/header'); ?>
<link rel="stylesheet" href="/app/styles.css">

<div class='container'>
    <div class=header><?= __('Bookmarked Invoices') ?></div>
    <table>
        <tr>
            <th><?= __('Invoice ID') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($data['bookmarkedInvoices'] as $invoice): ?>
            <tr>
                <td><?= $invoice->invoice_id ?></td>
                <td><a href='/Invoice/index/<?= $invoice->invoice_id ?>'><?= $invoice->invoice_title ?></a></td>
                <td><?= $invoice->invoice_date ?></td>
                <td>
                    <a href='/Invoice/update/<?= $invoice->invoice_id ?>' class='btn'><?= __('Edit') ?></a>
                    <a href='/Invoice/delete/<?= $invoice->invoice_id ?>' class='btn'><?= __('Delete') ?></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?= $this->view('Shared/footer'); ?>
