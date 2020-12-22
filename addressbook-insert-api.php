<?php 
require __DIR__. '/is_admin.php';
require __DIR__. '/db_connect.php';

$output = [
	'success' => false,
	'code' => 0,
	'error' => '參數不足',
];

if (!isset($_POST['name']) or !isset($_POST['email'])) {
	echo json_encode($output, JSON_UNESCAPED_UNICODE);
	exit;
}

$sql = "INSERT INTO `address_book`(
	`name`, `email`, `mobile`, `birthday`, `address`, `created_at`
	) VALUES (
		?, ?, ?, ?, ?, NOW()
)";

$statement = $pdo->prepare($sql);
$statement->execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    empty($_POST['birthday']) ? NULL : $_POST['birthday'],
    $_POST['address'],
]);

$output['rowCount'] = $statement->rowCount();
if ($statement->rowCount()) {
    $output['success'] = True;
    unset($output['error']);
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);