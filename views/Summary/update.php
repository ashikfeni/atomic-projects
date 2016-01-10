<?php
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');

use \App\Summary\Summary;
use  \App\Utility\Utility;

$obj = new Summary($_POST);
$obj->update();
