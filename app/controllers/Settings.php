<?php
namespace app\controllers;

#[\app\filters\Login]
class Settings extends \app\core\Controller
{

    public function index()
    {
        $this->view('Settings/index');
    }
}