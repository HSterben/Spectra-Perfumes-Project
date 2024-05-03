<?= $this->view('Shared/header', ['title'=>'Folder Read']); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Folder: <?= $folder->folder_name ?></h1>
        <h2><a href='/Folder/update/{$folder->folder_name}'>Update Folder</a></h2>
        <h3><a href='/Folder/create/<?= $folder->folder_name ?>'>Add new folder here</a></h3>
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
            <PRE><?= var_dump($folder) ?></PRE>
            <PRE><?= var_dump($subfolders) ?></PRE>
        </div><br>

        <?php
            if($parent_folder_name == 0) {
                //if the folder is at the root bring user to root listing
                echo "<a href='/Folder/list' class='btn'>Back</a>";
            } else {
                //cancel should lead to the parent folder view
                echo "<a href='/Folder/read/$parent_folder_name' class='btn'>Back</a>";
            }
        ?>

    </form>
</div>

<?= $this->view('Shared/footer'); ?>