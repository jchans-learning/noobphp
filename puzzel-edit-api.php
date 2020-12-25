<?php
require __DIR__ . '/is_admin.php';
require __DIR__ . '/db_connect.php';

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
WHERE `pzid`=?";

$statement = $pdo->prepare($sql);
$statement->execute([
	$_POST['pz_owner'],
	$_POST['pz_text'],
	$_POST['pz_status'],
	$_POST['book_id'],
	$_POST['p_name'],
	$_POST['pzid'],
]);

$pa_sql = "UPDATE `puzzel_answers` SET
`ans_index`=?,
`ans_txt`=?
WHERE `pz_id`=?";

for ($i = 1; $i < $_POST['p_pieces'] + 1; $i++) {
	$statement = $pdo->prepare($pa_sql);
	$statement->execute([
		$i,
		$_POST[$i],
		$_POST['pzid'],
	]);
}

$output['rowCount'] = $statement->rowCount();
if ($statement->rowCount()) {
	$output['success'] = True;
	unset($output['error']);
} else {
	$output['error'] = '資料沒有修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
