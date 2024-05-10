<?= $this->view('Shared/header', ['title'=>'Folder Read']); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1><?= __('Folder: ')?> <?= $folder->folder_name ?></h1>
        <h2><a href='/Folder/update/{$folder->folder_name}' class="btn"><?= __('Update Folder') ?></a></h2>
        <h3><a href='/Folder/create/<?= $folder->folder_name ?>' class="btn">Add new folder here</a></h3>
        <div class="form-group">
            <?php
            if($subfolders) {
                echo '<table>';
                    foreach($subfolders as $subfolder){
                        echo "<tr>
                            <td><a href='/Folder/read/{$subfolder->folder_name}'>$subfolder->folder_name</td>
                            <td><a href='/Folder/rename/{$subfolder->folder_name}'>Rename</a></td>
                            <td><a href='/Folder/delete/{$subfolder->folder_name}'>Delete</a></td>
                        </tr>";
                    }
                echo '</table>';
            }
            ?>
        </div><br>
            <?php
            if($invoices) {
                    foreach($invoices as $invoice){
            ?>
                <div class="invoice-container">
                    <span class="invoice-id"><?= $invoice->invoice_id ?></span>
                    <span class="invoice-title">
                        <a href='/Invoice/index/<?= $invoice->invoice_id ?>' class="invoice-title"><?= $invoice->invoice_title ?></a>
                    </span>
                </div>
            <?php
                    }
            }
            ?>

        <?php
            if($parent_folder_name == 0) {
                //if the folder is at the root bring user to root listing
                echo "<a href='/Folder/index' class='btn'>Back</a>";
            } else {
                //cancel should lead to the parent folder view
                echo "<a href='/Folder/read/$parent_folder_name' class='btn'>Back</a>";
            }
        ?>

    </form>
</div>

<?= $this->view('Shared/footer'); ?>