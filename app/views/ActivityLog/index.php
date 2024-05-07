<?= $this->view('Shared/header'); ?>

<?php foreach ($activityLog as $activity): ?>
    <div class="activity-container">
        <span class="activity"><?= $activity->activity_id . $activity->message . $activity->date ?></span>
    </div>
<?php endforeach; ?>
<?= $this->view('Shared/footer'); ?>