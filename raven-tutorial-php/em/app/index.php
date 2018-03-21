<?php 

$data = json_decode(file_get_contents('php://input'));

require_once('Http.php');

header('Content-Type: application/json');
// print_r($data)
echo json_encode([
	'payload' => [
		'sum' => $data->number_one + $data->number_two
	]
]);