<?php 
require __DIR__. '/db_connect.php';

$output = [
	'success' => false,
	'code' => 0,
	'error' => '參數不足',
];

if (!isset($_POST['name']) and !isset($_POST['email'])) {
	echo json_encode($output, JSON_UNESCAPED_UNICODE);
}

