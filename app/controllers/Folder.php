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

	public function read($folder_id)
	{
		//Create and populate our object
		$folder = new \app\models\Folder();
		$folder = $folder->getByFolderId($folder_id);
		//Send the data to the view
		$this->view('Folder/read', ['folder' => $folder]);
	}

	public function create($folder_id=null)
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			// Instantiate and populate folder object
			//In this case, folders start as empty so only name
			$folder = new \app\models\Folder();
			$folder->folder_name = $_POST['folder_name'];
			//Create the folder record
			$folder->create($folder_id);
			//Redirect after successful creation
			header('location:/Folder/list');
		} else {
			//Redirect to the folder create view
			$this->view('Folder/create');
		}
	}

	public function rename($folder_id)
	{
		//Instantiate folder object
		$folder = new \app\models\Folder();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			//Update folder object name
			$folder->folder_name = $_POST['folder_name'];
			//Update the folder record
			$folder->rename($folder_id);
			//Redirect after successful update
			header('location:/Folder/list');
		} else {
			//Set the folder being renamed
			$folder = $folder->getByFolderId($folder_id);
			//Redirect to the folder rename view
			$this->view('Folder/rename',['folder' => $folder]);
		}
	}

	//TODO: update 2.0

	public function delete($folder_id)
	{
		//Instantiate folder object
		$folder = new \app\models\Folder();
		//Set the folder being deleted
		$folder = $folder->getByFolderId($folder_id);

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			//Delete the folder record
			$folder->delete($folder_id);
			//Redirect after successful update
			header('location:/Folder/list');
		} else {
			//Redirect to the folder delete confirmation view
			$this->view('Folder/delete',['folder' => $folder]);
		}
	}
}