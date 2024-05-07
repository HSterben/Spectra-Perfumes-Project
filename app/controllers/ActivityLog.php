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

    public function create()
    {
        $user = new \
    }

}