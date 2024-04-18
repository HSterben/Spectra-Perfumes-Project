<?php
//Need namespaces because like mentioned in init.php, the PHP language has access to your files, which means that using namespaces allows us to restrict our App to a certain location on our drive
//Use back slash - allegedly because / already used for divide and needs to be an unused character
namespace app\core;

class App{
	private $routes = [];

	public function addRoute($url,$handler){
		// ROUTE '/Person/delete/{id}' => 'Person,delete'
		// URL /Person/delete/3 => ['Person,delete', ['id'=>'3']]
		$url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
		$this->routes[$url] = $handler;
	}

	//Magic Methods (with __ beforehand) are predefined and called implicitly
	function __construct() {

		// $this->addRoute('Person/edit/{id}', 'Peron,edit');
		// print_r($this->routes);
		// exit(); //kills the rest for debugging purposes

		//Goal:
		//Call the appropriate controller class and method to handle the HTTP Request

		// echo 'You have constructed your App object';

		// //example routing 1
		// $url = $_GET['url'];
		// switch ($url){
		// 	case 'Person/greet_again':
		// 		$controller = new \app\controllers\Person();
		// 		$controller->greet_again();
		// 		break;
		// 	case 'Person/greet':
		// 		$controller = new \app\controllers\Person();
		// 		$controller->greet();
		// 		break;
		// 	default:
		// 		echo 'No Match!';
		// }

		//example routing 2
		//version 0.1
		$url = $_GET['url'];
		//define a few routes ['url' => 'controller,method']
		// $routes = ['Person/greet_again' => 'Person,greet_again',
		// 			'Person/greet' => 'Person,greet',
		// 			'Person/generate_random_number' => 'Person,generate_random_number'];
		$routes = ['Person/register' => 'Person,register',
					'Person/complete_registration' => 'Person,complete_registration',
					'Person/list' => 'Person,list',
					'Person/' => 'Person,list',
					'Person/delete' => 'Person,delete',
					'Person/edit' => 'Person,edit',
					'Person/update' => 'Person,update'];

		//one by one compare the url to resolve the route
		foreach ($routes as $routeUrl => $controllerMethod) {
		 	//match the route
		 	if($url == $routeUrl){
		 		//run the route
		 		[$controller,$method] = explode(',', $controllerMethod);
		 		$controller = '\app\controllers\\' . $controller;
		 		$controller = new $controller();
		 		$controller->$method();
		 		//make sure that we don't run a second route
		 		break;
		 	}
		 }

		// //hardcore a call to a controller method for now
		// $controller = new \app\controllers\Person();
		// // -> arrow is to refer to a data member or method
		// //in this case we're calling a hardcoded "greet" method > transition to proper routing
		// $controller->greet_again();
		// //call greet from the $controller object
	}


}