<?php
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');

use \App\MultipleCheckbox\MultipleCheckbox;
use  \App\Utility\Utility;
$obj = new MultipleCheckbox($_POST);
$obj->update();
