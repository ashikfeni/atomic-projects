<?php
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');

use \App\Birthday\Birthday;

$birthday = new Birthday($_POST);
$birthday->store();