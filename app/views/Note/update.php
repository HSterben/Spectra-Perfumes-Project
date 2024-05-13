<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1><?= __('Update Note')?></h1>

        <div class="form-group">
            <label><?= __('Invoice Note:')?><input type="textarea" class="form-control" name="note_text" id="note_text"
                    placeholder="This is a note!" value='<?= $data['invoice']->note_text ?>'></label>
        </div><br>
        <div class="form-group">
            <input type="submit" name="action" class='btn' value="Update Note"/>
        </div> <br>
        <a href='/Main/index' class="btntwo"><?= __('Cancel')?></a>

<?= $this->view('Shared/footer'); ?>