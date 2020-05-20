<?php

require 'connection.php';
header('Content-Type: application/json');

$cursor = $db->cars->find([
	'mileage'		=>	array('$lt'	=>	(int)$_GET['mileage'])
]);
$result = iterator_to_array($cursor);


$cars = array();
foreach ($result as $key => $value) {

	$cars[] = array(
		'model'		=> $value['model'],
		'year'		=> $value['year']->toDateTime()->format('d.m.Y'),
		'mileage'	=> $value['mileage'],
		'condition'	=> $value['condition']
	);
}

echo json_encode($cars);