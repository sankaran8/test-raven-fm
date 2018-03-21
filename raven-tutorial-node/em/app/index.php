<?php 

$data = json_decode(file_get_contents('php://input'));

require_once('Http.php');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');
header('Content-Type: application/json');
// print_r($data)
echo json_encode($data->number_one + $data->number_two);