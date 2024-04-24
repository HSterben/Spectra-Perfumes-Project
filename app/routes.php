<?php
//defined a few routes "url"=>"controller,method"
$this->addRoute('Invoice/create', 'Invoice,create');
$this->addRoute('Invoice/update', 'Invoice,update');
$this->addRoute('Invoice/invoiceList', 'Invoice,index');

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