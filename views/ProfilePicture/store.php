<?php
	include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');


use \App\ProfilePicture\ProfilePicture;
use  \App\Utility\Utility;
$book = new ProfilePicture($_POST,$_FILES);
$book->store();