<?php
ini_set('display_errors','Off');
include_once("../../vendor/autoload.php"); 

use \App\City\City;
use \App\Utility\Utility;

$city = new City($_POST);
$city->store();