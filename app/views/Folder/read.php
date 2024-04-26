<?= $this->view('Shared/header'); ?>

<div class='container'>
	<a href='/Folder/create/<?= $folder->folder_id ?>'>Add new folder here</a>
</div>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Folder: <?= $folder->folder_name ?></h1>
        <div class="form-group">
            <PRE><?= var_dump($folder) ?></PRE>
        </div><br>

        <a href='/Folder/list' class="btn btn-link">Cancel</a>

    </form>
</div>

<?= $this->view('Shared/footer'); ?>