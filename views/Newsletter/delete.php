<?php

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');

use \App\Email\Email;
use  \App\Utility\Utility;

$obj = new Email();
$obj->delete($_REQUEST['id']);