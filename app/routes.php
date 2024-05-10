<?php
//define a few routes "url"=>"controller,method"

//For main
$this->addRoute('', 'Main,index');
$this->addRoute('Main/index', 'Main,index');
$this->addRoute('Main/sales', 'Main,sales');
$this->addRoute('Main/settings', 'Main,settings');

//For invoice
$this->addRoute('Invoice/create', 'Invoice,create');
$this->addRoute('Invoice/update/{invoice_id}', 'Invoice,update');
$this->addRoute('Invoice/list', 'Invoice,index');
$this->addRoute('Invoice/delete/{invoice_id}', 'Invoice,delete');
$this->addRoute('Invoice/confirmBulkDelete', 'Invoice,confirmBulkDelete');
$this->addRoute('Invoice/performBulkDelete', 'Invoice,performBulkDelete');
$this->addRoute('Invoice/read/{invoice_id}', 'Invoice,read');
$this->addRoute('Invoice/copy/{invoice_id}', 'Invoice,copy');
//For note
$this->addRoute('Note/create/{invoice_id}', 'Note,create');
$this->addRoute('Note/update/{invoice_id}', 'Note,update');
$this->addRoute('Note/delete/{invoice_id}', 'Note,delete');
//For folder
$this->addRoute('Folder/index', 'Folder,index');
$this->addRoute('Folder/create/{parent_folder_name}', 'Folder,create');
$this->addRoute('Folder/read/{folder_name}', 'Folder,read');
$this->addRoute('Folder/rename/{old_folder_name}', 'Folder,rename');
$this->addRoute('Folder/update/{folder_name}', 'Folder,update');
$this->addRoute('Folder/delete/{folder_name}', 'Folder,delete');

//For user
$this->addRoute('User/register', 'User,register');
$this->addRoute('User/login', 'User,login');
$this->addRoute('User/logout', 'User,logout');
$this->addRoute('User/update', 'User,updateUser');
$this->addRoute('User/delete', 'User,delete');
$this->addRoute('User/updateSettings', 'User,updateSettings');
$this->addRoute('User/resetSettings', 'User,resetSettings');
//2FA
$this->addRoute('User/setup2fa', 'User,setup2fa');
$this->addRoute('User/check2fa', 'User,check2fa');

//for ActivityLog
$this->addRoute('ActivityLog/index', 'ActivityLog,index');