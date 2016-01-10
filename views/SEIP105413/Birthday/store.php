<?php
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'."/src/Bitm/SEIP105413/Birthday/Birthday.php"); //using relative path
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'."/src/Bitm/SEIP105413/Utility/utility.php");
//include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'); //using absolute path

use \App\Bitm\SEIP105413\Birthday\Birthday;
use \App\Bitm\SEIP105413\Utility\Utility;
//use \App\BITM\SEIP1020\Mobile\Model;


$ashik = new Birthday($_POST['name'],$_POST['birthday']);

Utility::dd($ashik);




