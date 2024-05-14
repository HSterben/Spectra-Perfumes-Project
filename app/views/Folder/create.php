<?= $this->view('Shared/header', ['title'=>'Folder Create']); ?>

<div class='container'>
    <form method='post' action=''><br>
    <h1>Create Folder</h1>

        <div class="form-group">
            <label>Folder name: <input type="text" class="form-control" name="folder_name" id="folder_name"
                    placeholder='Personal' required/></label>
        </div><br>

        <div class="form-group">
            <input type="submit" name="action" class='btn btn-primary' value='Create Folder'/>
        </div> <br>
        <?php
            if($parent_folder_name == 0) {
                //if the folder is at the root bring user to root listing
                echo "<a href='/Folder/index' class='btn'>" . 'Cancel' . "</a>";
            } else {
                //cancel should lead to the parent folder view
                echo "<a href='/Folder/read/$parent_folder_name' class='btn'>" . 'Cancel' . "</a>";
            }
        ?>
    </form>
</div>

<?= $this->view('Shared/footer'); ?>