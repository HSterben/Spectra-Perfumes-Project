<!-- TODO: fix the view call -->
<?= $this->view('Shared/header'); ?>

<div class='container'>
    <form method='post' action=''><br>

        <h1><?= __('Create Note')?></h1>

        <div class="form-group">
            <label><?= __('Invoice Note:')?><input type="textarea" class="form-control" name="note_text" id="note_text"
                    placeholder=<?= __('This is a note!')?> /></label>
        </div><br>
        <div class="form-group">
            <input type="submit" name="action" class='btn' value=<?= __('Create Note')?> />
        </div> <br>
        <a href='/Main/index' class="btntwo"><?= __('Cancel')?></a>

        <script>document.documentElement.style.setProperty('--font-size', '<?= $_SESSION['user_id']->getById($_SESSION['user_id'])->font_size ?>');</script>
        <?= $this->view('Shared/footer'); ?>