<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>
        <h1>Delete Folder</h1>
        <div class="form-group">
            <label>Are you sure you want to delete this folder?<input type="text" class="form-control" name="folder_name" id="folder_name" value="<?= $folder->folder_name ?>" disabled/></label>
        </div><br>

        <div class="form-group">
            <form method="post" action='/Folder/delete'>
                <input type="submit" name="action" class="btn btn-primary" value="Delete"><br><br>
                <a href='/Folder/list' class="btntwo">Cancel</a>
            </form>
        </div>
    </form>
</div>

<!-- TODO: add other folder info such as subfolders and invoices -->

<?= $this->view('Shared/header'); ?>