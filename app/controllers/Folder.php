<?php

namespace app\controllers;

class Folder extends \app\core\Controller
{
	public function index()
	{
		//Create and populate our object
		$folder = new \app\models\Folder();
		$folders = $folder->getAll();
		//Send the data to the view
		$this->view('Folder/index', $folders);
	}

	public function create()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			// Instantiate and populate folder object
			//In this case, folders start as empty so only name
			$folder = new \app\models\Folder();
			$folder->folder_name = $_POST['folder_name'];
			//Create the folder record
			$folder->create();
			//Redirect after successful creation
			header('location:/Folder/list');
		} else {
			//Redirect to the folder create view
			$this->view('Folder/create');
		}
	}
}