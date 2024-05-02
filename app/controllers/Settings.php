<?php
namespace app\controllers;

class Settings extends \app\core\Controller
{

    public function index()
    {
        $this->view('Settings/index');
    }
}