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

// Local Dev with MySQL
//
// $sql = "INSERT INTO `address_book`(
// 	`name`, `email`, `mobile`, `birthday`, `address`, `created_at`
// 	) VALUES (
// 		?, ?, ?, ?, ?, NOW()
// )";
//
// $statement = $pdo->prepare($sql);
// $statement->execute([
//     $_POST['name'],
//     $_POST['email'],
//     $_POST['mobile'],
//     empty($_POST['birthday']) ? NULL : $_POST['birthday'],
// 	$_POST['address'],
// ]);

// Heroku with PostgreSQL
//
$sql = "INSERT INTO address_book(
	sid, name, email, mobile, birthday, address, created_at 
	) VALUES (
		?, ?, ?, ?, ?, ?, ?,
)";

$sql = "INSERT INTO address_book (
	sid, name, email, mobile, birthday, address, created_at
	) VALUES (
	?, ?, ?, ?, ?, ?, ?
	)";

$lastId = $pdo->query("SELECT LAST_INSERT_ID() AS id")->fetch();
$statement = $pdo->prepare($sql);
$statement->execute([
	$lastId['id'],
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    empty($_POST['birthday']) ? NULL : $_POST['birthday'],
	$_POST['address'],
	date("Y-m-d"),
]);
// Heroku with PostgreSQL End


$output['rowCount'] = $statement->rowCount();
if ($statement->rowCount()) {
    $output['success'] = True;
    unset($output['error']);
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);