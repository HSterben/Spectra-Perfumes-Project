<?php
//to avoid including/requiring all our controller and model classes...
spl_autoload_register(
    function($class_name){
        //version 0.1 PSR-4 autoloader
        //for compatibility replace FQCN (\) separator by DIRECTORY_SEPARATOR. (\ or /)
        $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
        if(file_exists($class_name.'.php')){
            require_once($class_name . '.php');
            return true;
        }
        else
        {
            return false;
        }
    }
);