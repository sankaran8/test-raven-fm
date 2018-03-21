<?php 

require_once('Http.php');
require_once('Actions.php');

$sum = 0;

if (!empty($_POST['action'])) {
	$sum = Http::response(Actions::getContract($_POST));

	header('Content-Type: application/json');
	echo $sum;
}
