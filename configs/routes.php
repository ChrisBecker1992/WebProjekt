<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/Startseite'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/Startseite.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/anmelden'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/anmelden.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');



//$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
//$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

