<?php 
require __DIR__. '/is_admin.php';
require __DIR__. '/db_connect.php';

$output = [
	'success' => false,
	'code' => 0,
	'error' => '參數不足',
];

if (!isset($_POST['pz_text']) or !isset($_POST['pz_status'])) {
	echo json_encode($output, JSON_UNESCAPED_UNICODE);
	exit;
}

// Local Develop with MySQL
//
$sql = "UPDATE `puzzels` SET
`pz_owner`=?, 
`pz_text`=?, 
`pz_status`=?, 
`book_id`=?, 
`p_name`=?, 
`created_at`=?
WHERE `pzid`=?";

// Heroku with PostgreSQL
//
// $sql = "UPDATE address_book SET
// name=?,
// email=?,
// mobile=?,
// birthday=?,
// address=?
// WHERE sid=?";
//
// Heroku with PostgreSQL end

$statement = $pdo->prepare($sql);
$statement->execute([
	$_POST['pz_owner'],
	$_POST['pz_text'],
    $_POST['pz_status'],
    $_POST['book_id'],
    $_POST['p_name'],
]);

$output['rowCount'] = $statement->rowCount();
if ($statement->rowCount()) {
    $output['success'] = True;
    unset($output['error']);
} else {
    $output['error'] = '資料沒有修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);


