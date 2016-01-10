<?php
	include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'startup.php');


	use \App\MultipleCheckbox\MultipleCheckbox;
    use \App\Utility\Utility;


$book = new MultipleCheckbox($_POST);
$book->store();