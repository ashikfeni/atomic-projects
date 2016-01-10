<?php

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');

use \App\Book\Book;
use  \App\Utility\Utility;

$obj = new Book();
$obj->delete($_REQUEST['id']);