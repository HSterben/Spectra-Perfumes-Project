<?php
namespace app\models;

class Person{
	public $first_name;
	public $last_name;
	public $email;
	public $weekly_flyer;
	public $mailing_list;

	public function __construct($object = null){
		if($object == null)
			return;// avoid this running when there is no parameter....
		$this->first_name = $object->first_name;
		$this->last_name = $object->last_name;
		$this->email = $object->email;
		$this->weekly_flyer = $object->weekly_flyer;
		$this->mailing_list = $object->mailing_list;
	}


	/* insert the record in the data file */
	public function insert(){
		$filename = 'resources/People.txt';
		//open a file for writing (append)
		$file_handle = fopen($filename, 'a'); //a is for append, w for writing from the start
		//obtain exclusive access to the file to avoid data corruption
		flock($file_handle, LOCK_EX);
		//format the data and write to the file
		$data = json_encode($this);
		fwrite($file_handle, $data . "\n");//place a single record on each line
		//release the exclusive access to the file
		flock($file_handle, LOCK_UN);
		//close the file
		fclose($file_handle);
	}


	public function update(){
		//read the entire file
		$filename = "resources/People.txt";
		//get the contents of the file in this array (line by line)
		$file_contents = file($filename);

		//open the new version of the same file
		$file_handle = fopen($filename, 'w');
		//obtain a lock on the file (avoid reading data that is changing)
		flock($file_handle, LOCK_EX);
		//start at the first line
		$counter = 0;
		$size = count($file_contents);
		while($counter < $size){
			if($this->id != $counter){
				fwrite($file_handle, $file_contents[$counter]);
			}else{
				//add the modified record
				//format the data and write to the file
				unset($this->id);
				$data = json_encode($this);
				fwrite($file_handle, $data . "\n");//place a single record on each line
			}
			$counter++;//next record
		}		
		flock($file_handle, LOCK_UN);
		fclose($file_handle);

	}

	public static function getAll(){
		//read the file and return the collection of people (all Person records)
		$filename = 'resources/People.txt';
		$records = file($filename);
		//TODO: process the JSON strings into objects
		foreach ($records as $key => $value) {
			//can I typecase objects in PHP?
			$object = json_decode($value);
			$person = new \app\models\Person($object);
			$records[$key] = $person;
		}
		return $records;
	}

	//delete a record at line $id in the file
	public static function delete($id){
		//read the entire file
		$filename = "resources/People.txt";
		//get the contents of the file in this array (line by line)
		$file_contents = file($filename);

		//open the new version of the same file
		$file_handle = fopen($filename, 'w');
		//obtain a lock on the file (avoid reading data that is changing)
		flock($file_handle, LOCK_EX);
		//start at the first line
		$counter = 0;
		$size = count($file_contents);
		while($counter < $size){
			if($id != $counter){
				fwrite($file_handle, $file_contents[$counter]);
			}//else it is skipped
			$counter++;//next record
		}		
		flock($file_handle, LOCK_UN);
		fclose($file_handle);
	}

	public static function get($id){
		//read the file and return the collection of people (all Person records)
		$filename = 'resources/People.txt';
		$records = file($filename);
		//process the JSON string into an object
		$object = json_decode($records[$id]);
		$person = new \app\models\Person($object);
		$person->id = $id;
		//return the record
		return $person;
	}

}