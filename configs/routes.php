<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/Startseite'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/Startseite.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/anmelden'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/anmelden.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/Wohnen'] = array('controller' => 'HabitationController', 'uniqueName' => 'wohnen');
$route['/Wohnen.html'] = array('controller' => 'HabitationController', 'uniqueName' => 'wohnen');

$route['/Nachhilfe'] = array('controller' => 'HelpController', 'uniqueName' => 'nachhilfe');
$route['/Nachhilfe.html'] = array('controller' => 'HelpController', 'uniqueName' => 'nachhilfe');

$route['/Veranstaltungen'] = array('controller' => 'EventController', 'uniqueName' => 'veranstaltungen');
$route['/Veranstaltungen.html'] = array('controller' => 'EventController', 'uniqueName' => 'veranstaltungen');

$route['/Auslandssemester'] = array('controller' => 'AbroadController', 'uniqueName' => 'auslandssemester');
$route['/Auslandssemester.html'] = array('controller' => 'AbroadController', 'uniqueName' => 'auslandssemester');


$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

