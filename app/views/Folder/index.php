<?= $this->view('Shared/header'); ?>

	<a href='/Folder/create'>Add new folder</a>

	<div class='container'>
		<table>
		<?php
		foreach($data as $folder){
			echo "<tr>
				<td>$folder->folder_name</td>
				<td><a href='/Invoice/update?id=$folder->folder_id'>Update</a></td>
				<td><a href='/Invoice/delete?id=$folder->folder_id'>Delete</a></td>
			</tr>";
		}
		?>
		</table>
	</div>

<?= $this->view('Shared/footer'); ?>