<?php
    ini_set('display_errors','Off');
    error_reporting(E_ALL  &~E_DEPRECATED);
    session_start();
    include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'AtomicProjects'.DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");
