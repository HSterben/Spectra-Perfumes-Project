<?= $this->view('Shared/header', ['title'=>'Folder List']); ?>
	
<div class='container'>
	<a href='/Folder/create/0' class="btn"><?= __('Add new folder here')?></a>
</div>

<div class='container'>
	<form method="post" action="/Folder/index" id="sortForm">
	    <select name="sort" id="sort">
	        <option value=""><?= __('Sort by...') ?></option>
	        <option value="folder_name_asc"><?= __('Folder Name Ascending') ?></option>
	        <option value="folder_name_desc"><?= __('Folder Name Descending') ?></option>
	    </select>
	</form>

	<form method='post' action=''>
    	<input type="text" name="query" placeholder=<?= __('Search invoices...') ?>>
	</form>

	<table>
	<?php
	foreach($folders as $folder){
		echo "<tr>
			<td><a href='/Folder/read/{$folder->folder_name}'>$folder->folder_name</td>
			<td><a href='/Folder/rename/{$folder->folder_name}'>Rename</a></td>
			<td><a href='/Folder/delete/{$folder->folder_name}'>Delete</a></td>
		</tr>";
	}
	?>
	</table>
	<a href='/Main/index' class='btn'><?= __('Back to home page')?></a>
</div>

<script>
    document.getElementById('sort').addEventListener('change', function () {
        document.getElementById('sortForm').submit();
    });
</script>

<?= $this->view('Shared/footer'); ?>