<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Create Folder</h1>

        <div class="form-group">
            <label>Folder name:<input type="text" class="form-control" name="folder_name" id="folder_name"
                    placeholder="Personal" required/></label>
        </div><br>

        <div class="form-group">
            <input type="submit" name="action" class='btn btn-primary' value="Create Folder"/>
        </div> <br>
        <a href='/Folder/list' class="btn btn-link">Cancel</a>

    </form>
</div>

<?= $this->view('Shared/footer'); ?>