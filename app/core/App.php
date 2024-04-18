<?php
namespace app\core;

class App{
    private $routes = [];

/*  'Friend/add/{id1}/{id2}' => 'Person,edit'*/
/*  'Friend/add/(?<id1>[^\/])/(?<id2>[^\/])' => 'Person,edit'*/
/*  Friend/add/123/456*/

    public function addRoute($url,$handler){
        $url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
        $this->routes[$url] = $handler;
    }

    public function resolve($url){
        $matches = [];
        //one by one compare the url to resolve the route
        foreach ($this->routes as $routePattern => $controllerMethod) {
            if(preg_match("#^$routePattern$#", $url, $matches)){//match the route

                /*print_r($matches);
                echo "\n";*/

                // Filter named parameters
                $namedParams = array_filter($matches,
                    function($key) {
                        return !is_numeric($key);
                    }
                    , ARRAY_FILTER_USE_KEY);

                /*print_r($namedParams);
                echo "\n";*/

                return [$controllerMethod, $namedParams];
            }
        }
        return false;
    }

    function filtered($controllerInstance, $method){

        //create an object that can get information about the controller
        $reflection = new \ReflectionClass($controllerInstance);
        //get the attributes from the controller
        $classAttributes = $reflection->getAttributes();
        $methodAttributes = $reflection->getMethod($method)->getAttributes();

        $attributes = array_merge($classAttributes,$methodAttributes);

        foreach ($attributes as $attribute) {
            //instantiate the filter
            $filter = $attribute->newInstance();
            //run the filter and test if redirected
            if($filter->redirected()){
                return true;
            }
        }
        return false;
    }


    function __construct(){
    	//call the appropriate controller class and method to handle the HTTP Request
        //Routing version 1.0

        $url = $_GET['url'];

        include('app/routes.php');

        [$controllerMethod, $namedParams] = $this->resolve($url);

        if(!$controllerMethod){ return;  }

        [$controller,$method] = explode(',', $controllerMethod);

        $controller = '\app\controllers\\' . $controller;
        $controllerInstance = new $controller();

        if($this->filtered($controllerInstance, $method)){
            return;
        }

        call_user_func_array([$controllerInstance, $method], $namedParams);

    }
}