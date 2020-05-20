<?php

require 'connection.php';


$tempTime = strtotime($_GET['date']);

// Игнорирование часового пояса
$utcDate = new MongoDB\BSON\UTCDateTime(($tempTime+7200) * 1000);

$cursor = $db->rent_info->find([
	'date_end'		=>	array('$lt'	=>	$utcDate)
],[
	'projection' => array(
		'price' => 1
	)
]);
$result = iterator_to_array($cursor);

$sum = 0.0;
foreach ($result as $key => $value) {
	$sum = $sum + (double)$value['price'];
}

echo $sum;