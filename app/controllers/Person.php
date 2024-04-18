<?php
namespace app\controllers;

use stdClass;

class Person extends \app\core\Controller{

	function list(){
		$people = \app\models\Person::getAll();
		$this->view('Person/list',$people);
	}

	function register(){
		//showing the register view
		$this->view('Person/register');
	}

	function complete_registration(){
		print_r($_POST);

		//call a view to show the submitted data
		//collect the data
		//declare a person object
		$person = new \app\models\Person();
		//populate the properties
		$person->first_name = $_POST['first_name'];
		$person->last_name = $_POST['last_name'];
		$person->email = $_POST['email'];
		$publications = $_POST['publications'] ?? [];
		$person->weekly_flyer = in_array('weekly_flyer', $publications);
		$person->mailing_list = in_array('mailing_list', $publications);
		//$person->mailing_list = $_POST['mailing_list'] ?? 'unselected';//null coalescing to avoid warnings when no option of a radio button is selected
		//hypothetically insert into a database
		$person->insert(); //add the person to the data file
		//show the feedback view to confirm with the user
		//$this->view('Person/complete_registration',$person);

		//redirect the user back to the list
		header('location:/Person/');
	}

	function delete(){
		// get the ID of the record to delete
		$id = $_GET['id'];
		// call the deletion on Person
		\app\models\Person::delete($id);
		//redirect the user to the updated list
		header('location:/Person/');
	}

	//get the relevant record and display it in a form to allow a user to modify the information
	// URL like http://localhost/Person/edit?id=0
	function edit(){
		// get the ID of the record to edit
		$id = $_GET['id'];
		//get that record
		$person = \app\models\Person::get($id);
		//get the updated information from the user...
		$this->view('Person/edit',$person);
	}

	//update the record from the information given by the user
	function update(){
		//get the id
		$id = $_GET['id'];
		//get the record
		$person = \app\models\Person::get($id);
		//change the record fields (same as populating the data before insert)
		$person->first_name = $_POST['first_name'];
		$person->last_name = $_POST['last_name'];
		$person->email = $_POST['email'];
		$publications = $_POST['publications'] ?? [];
		$person->weekly_flyer = in_array('weekly_flyer', $publications);
		$person->mailing_list = in_array('mailing_list', $publications);
		//update the record in storage
		$person->update();
		//redirect to the list
		header('location:/Person/');
	}
}