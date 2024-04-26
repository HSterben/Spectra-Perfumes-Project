<?= $this->view('Shared/header', ['title'=>'Folder List']); ?>
	
<div class='container'>
	<a href='/Folder/create/0'>Add new folder here</a>
</div>

<div class='container'>
	<table>
	<?php
	foreach($data as $folder){
		echo "<tr>
			<td><a href='/Folder/read/{$folder->folder_name}'>$folder->folder_name</td>
			<td><a href='/Folder/rename/{$folder->folder_name}'>Rename</a></td>
			<td><a href='/Folder/update/{$folder->folder_name}'>Update</a></td>
			<td><a href='/Folder/delete/{$folder->folder_name}'>Delete</a></td>
		</tr>";
	}
	?>
	</table>
</div>

<?= $this->view('Shared/footer'); ?>