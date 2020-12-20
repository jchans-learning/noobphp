<?php 
require __DIR__ . '/db_connect.php';

$pageName = 'addressbook-list';

$p_sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC ");

$statement = $pdo->query($p_sql);

$rows = $statement->fetchAll();

$output = [
	'rows' => $rows,
];

// print_r($output);

echo json_encode($output, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
