<?php
ini_set('display_errors','Off');
include_once("../../vendor/autoload.php"); 

use \App\Summary\Summary;

$summary = new Summary($_POST);
$summary->store();