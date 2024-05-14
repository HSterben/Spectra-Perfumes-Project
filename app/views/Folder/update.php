<?= $this->view('Shared/header', ['title'=>'Folder Update']); ?>

<div class='container'>
    <form method='post' action=''><br>
        <h1>Add invoices to Folder: <?= $folder->folder_name ?></h1>
        <h3>Please select which invoices to add to the folder</h3><br>

        <div class="form-group">
        <?php
            if($invoices) {
                    foreach($invoices as $invoice){
            ?>
                <div class="invoice-container">
                    <?php if($invoice->folder_name == $folder->folder_name) { ?>
                        <input type="checkbox" name="selected_invoices_ids[]" checked value="<?= $invoice->invoice_id ?>">
                    <?php } else { ?>
                        <input type="checkbox" name="selected_invoices_ids[]" value="<?= $invoice->invoice_id ?>">
                    <?php } ?>
                    <span class="invoice-id"><?= $invoice->invoice_id ?></span>
                    <span class="invoice-title">
                        <a href='/Invoice/index/<?= $invoice->invoice_id ?>' class="invoice-title"><?= $invoice->invoice_title ?></a>
                    </span>
                </div>
            <?php
                    }
            }
            ?>
        </div>
        <div class="form-group">
            <input type="submit" name="action" class='btn btn-primary' value='Update Folder'/>
        </div> <br>
        <?php
            if($folder->folder_name == 0) {
                //if the folder is at the root bring user to root listing
                echo "<a href='/Folder/index' class='btn'>Cancel</a>";
            } else {
                //cancel should lead to the parent folder view
                echo "<a href='/Folder/read/$folder->folder_name' class='btn'>Cancel</a>";
            }
        ?>

    </form>
</div>

<?= $this->view('Shared/footer'); ?>