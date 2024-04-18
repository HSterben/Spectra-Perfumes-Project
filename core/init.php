<?php

//We require the App.php file to get access to the class
require('app/core/App.php');
require('app/core/Controller.php');
require('app/core/autoload.php');
//future inclusion for Model

//Can't put:
//require('/app/core/App.php');
//Because PHP has access to your files, which means it would try to go to the root of your entire drive

//We remove the closing delimiter because if we mistakenly add characters afterwards it outputs verbatum to the user, and prevents us from sending headers