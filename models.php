<?php

require 'connection.php';
header('Content-Type: application/json');

$cursor = $db->cars->find([],[
	'projection' => [
	    'model' => 1
	],
]);
$result = iterator_to_array($cursor);


$models = array();
foreach ($result as $key => $value) {
	$models[] = $value['model'];
}

echo json_encode($models);
