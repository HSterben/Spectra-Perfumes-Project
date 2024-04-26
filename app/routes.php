<?php
//define a few routes "url"=>"controller,method"

//For invoice
$this->addRoute('Invoice/create', 'Invoice,create');
$this->addRoute('Invoice/update/{invoice_id}', 'Invoice,update');
$this->addRoute('Invoice/list', 'Invoice,index');
$this->addRoute('Invoice/delete/{invoice_id}', 'Invoice,delete');
$this->addRoute('Invoice/confirmBulkDelete', 'Invoice,confirmBulkDelete');
$this->addRoute('Invoice/performBulkDelete', 'Invoice,performBulkDelete');
$this->addRoute('Invoice/read/{invoice_id}','Invoice,read');
$this->addRoute('Invoice/copy/{invoice_id}', 'Invoice,copy');
//For note
$this->addRoute('Note/create/{invoice_id}','Note,create');
$this->addRoute('Note/update/{invoice_id}','Note,update');
$this->addRoute('Note/delete/{invoice_id}','Note,delete');

//For folder
$this->addRoute('Folder/list', 'Folder,index');
$this->addRoute('Folder/create/{parent_folder_id}', 'Folder,create');
$this->addRoute('Folder/read/{folder_id}', 'Folder,read');
$this->addRoute('Folder/rename/{folder_id}', 'Folder,rename');
$this->addRoute('Folder/delete/{folder_id}', 'Folder,delete');

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