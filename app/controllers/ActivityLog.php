<?php

namespace app\controllers;

#[\app\filters\Login]
class ActivityLog extends \app\core\Controller
{

    public function index()
    {
        //Create and populate our object
        $log = new \app\models\ActivityLog();
        $log = $log->getAll();
        //Send the data to the view
        $this->view('ActivityLog/index', ['activityLog' => $log]);
    }

    public function create($action)
    {
        $user = new \app\models\User();
        $user = $user->getById($_SESSION['user_id']);
        var_dump($user);
        $activity = new \app\models\ActivityLog();
        $activity->user_id = $user->user_id;

        $activity->message = ": {$user->username} {$action} at ";
        $activity->insert();
    }
}