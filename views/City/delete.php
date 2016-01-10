<?php

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');

use \App\City\City;
use  \App\Utility\Utility;

$obj = new City();
$obj->delete($_REQUEST['id']);