<?php

namespace app\controllers;

class Folder extends \app\core\Controller
{
	public function index()
	{
		//Create and populate our object
		$folder = new \app\models\Folder();
		$folders = $folder->getAllRoot();
		//Send the data to the view
		$this->view('Folder/index', ['folders'=>$folders]);
	}

	public function read($folder_name)
	{
		//Create and populate our object
		$folder = new \app\models\Folder();
		$folder = $folder->getByFolderName($folder_name);
		$subfolders = $folder->getSubfolders();
		//Set parent folder to tell view where to redirect if cancel
		$parent_folder_name = $folder->getParentFolderName();
		//Send the data to the view
		$this->view('Folder/read', ['folder'=>$folder, 'subfolders'=>$subfolders, 'parent_folder_name'=>$parent_folder_name]);
	}

	public function create($parent_folder_name)
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			// Instantiate and populate folder object
			//In this case, folders start as empty so only name
			$folder = new \app\models\Folder();
			$folder->folder_name = $_POST['folder_name'];
			//Create the folder record
			$folder->create($parent_folder_name);
			//Redirect after successful creation
			if($parent_folder_name == 0) {
				//if at root, redirect to root listing
				header('location:/Folder/list');
			} else {
				//redirect to parent folder view
				header('location:/Folder/read/' . $parent_folder_name);
			}
		} else {
			//Redirect to the folder create view
			$this->view('Folder/create', ['parent_folder_name'=>$parent_folder_name]);
		}
	}

	public function rename($folder_name)
	{
		//Instantiate folder object
		$folder = new \app\models\Folder();

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			//Update folder object name
			$folder->folder_name = $_POST['folder_name'];
			//Update the folder record
			$folder->rename($folder_name);
			//Redirect after successful update
			header('location:/Folder/list');
		} else {
			//Set the folder being renamed
			$folder = $folder->getByFolderName($folder_name);
			//Set parent folder to tell view where to redirect if cancel
			$parent_folder_name = $folder->getParentFolderName($folder_name);
			//Redirect to the folder rename view
			$this->view('Folder/rename', ['folder'=>$folder, 'parent_folder_name'=>$parent_folder_name]);
		}
	}

	//TODO: update 2.0

	public function delete($folder_name)
	{
		//Instantiate folder object
		$folder = new \app\models\Folder();
		//Set the folder being deleted
		$folder = $folder->getByFolderName($folder_name);

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			//Delete the folder record
			$folder->delete($folder_name);
			//Redirect after successful update
			header('location:/Folder/list');
		} else {
			//Redirect to the folder delete confirmation view
			$this->view('Folder/delete',['folder'=>$folder]);
		}
	}
}