<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1>Create Note</h1>

        <div class="form-group">
            <label>Invoice Note:<input type="textarea" class="form-control" name="note_text" id="note_text"
                    placeholder="This is a note!"/></label>
        </div><br>
        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Create Note"/>
        </div> <br>
        <a href='/Main/index' class="btntwo">Cancel</a>

<?= $this->view('Shared/header'); ?>