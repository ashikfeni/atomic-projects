<?php
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'."/src/Bitm/SEIP105413/Book/Book.php"); //using relative path
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'."/src/Bitm/SEIP105413/Utility/utility.php");
//include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'); //using absolute path

use \App\Bitm\SEIP105413\Book\Book;
use \App\Bitm\SEIP105413\Utility\Utility;
//use \App\BITM\SEIP1020\Mobile\Model;


$book = new Book($_POST['title']);

Utility::dd($book);




