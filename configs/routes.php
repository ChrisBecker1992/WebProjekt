<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/Startseite'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/Startseite.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/anmelden'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/anmelden.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/Wohnen'] = array('controller' => 'WohnenController', 'uniqueName' => 'wohnen');
$route['/Wohnen.html'] = array('controller' => 'WohnenController', 'uniqueName' => 'wohnen');

$route['/Nachhilfe'] = array('controller' => 'NachhilfeController', 'uniqueName' => 'nachhilfe');
$route['/Nachhilfe.html'] = array('controller' => 'NachhilfeController', 'uniqueName' => 'nachhilfe');

$route['/Veranstaltungen'] = array('controller' => 'VeranstaltungenController', 'uniqueName' => 'veranstaltungen');
$route['/Veranstaltungen.html'] = array('controller' => 'VeranstaltungenController', 'uniqueName' => 'veranstaltungen');

$route['/Auslandssemester'] = array('controller' => 'AuslandssemesterController', 'uniqueName' => 'auslandssemester');
$route['/Auslandssemester.html'] = array('controller' => 'AuslandssemesterController', 'uniqueName' => 'auslandssemester');


//$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
//$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');

