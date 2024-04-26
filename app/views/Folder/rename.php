<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Rename Folder</h1>
        <div class="form-group">
            <label>Current folder name: <?= $folder->folder_name ?></label><br>
            <label>New folder name:<input type="text" class="form-control" name="folder_name" id="folder_name"required/></label>
        </div><br>

        <div class="form-group">
            <input type="submit" name="action" class='btn btn-primary' value="Confirm Edit"/>
        </div> <br>
        <a href='/Folder/list' class="btn btn-link">Cancel</a>

    </form>
</div>

<?= $this->view('Shared/footer'); ?>