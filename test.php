<?php 
	$array = array('firstname' => 'Ashik','lastname' => 'Rahaman');

	$serialize = serialize($array);
	echo $serialize;
	$unserialize = unserialize($serialize);
	echo "<pre>";
		print_r($unserialize);
	echo "</pre>";

	foreach ($unserialize as $key => $value) {
		echo " ".$value."<br>";
	}

 ?>