<?php
//defined a few routes "url"=>"controller,method"
$this->addRoute('Person/register','Person,register');
$this->addRoute('Person/complete_registration','Person,complete_registration');
$this->addRoute('Person/','Person,list');
$this->addRoute('Person/delete' , 'Person,delete');
$this->addRoute('Person/edit/{id}' , 'Person,edit');
$this->addRoute('Person/update' , 'Person,update');
$this->addRoute('User/register' , 'User,register');
$this->addRoute('User/login' , 'User,login');
$this->addRoute('User/logout' , 'User,logout');
$this->addRoute('User/update' , 'User,update');
$this->addRoute('User/delete' , 'User,delete');
$this->addRoute('User/securePlace' , 'Profile,index');
$this->addRoute('Profile/index' , 'Profile,index');
$this->addRoute('Profile/create' , 'Profile,create');
$this->addRoute('Profile/modify' , 'Profile,modify');
$this->addRoute('Profile/delete' , 'Profile,delete');
$this->addRoute('Friend/add/{id1}/{id2}','Friend,add');

$this->addRoute('Example/index' , 'Example,index');
$this->addRoute('Example/clock','Example,clock');
$this->addRoute('Example/passingData','Example,passingData');
$this->addRoute('Example/count','Example,count');