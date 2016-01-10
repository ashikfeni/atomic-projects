<?php

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');

use \App\SingleCheckbox\SingleCheckbox;
use  \App\Utility\Utility;

$obj = new SingleCheckbox();
$obj->delete($_REQUEST['id']);