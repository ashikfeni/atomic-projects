<?php

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');

use \App\Birthday\Birthday;
use  \App\Utility\Utility;

$obj = new Birthday();
$obj->delete($_REQUEST['id']);