<?php
namespace app\controllers;

#[\app\filters\Login]
class Settings extends \app\core\Controller
{

    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
			header('location:/User/login');
			return;
		}
        $user = new \app\models\User();
		$user = $user->getById($_SESSION['user_id']);

        $this->view('Settings/index', ['user' => $user]);
    }
}