<?php
require __DIR__. '/is_admin.php';
require __DIR__. '/db_connect.php';

// Local Develop with MySQL
//
if (isset($_GET['pzid'])) {
	$pzid = intval($_GET['pzid']);
	$pdo->query("DELETE FROM `puzzels` WHERE pzid=$pzid");
}

$backto = 'puzzel-list.php';
if (isset($_SERVER['HTTP_REFERER'])) {
	$backto = $_SERVER['HTTP_REFERER'];
}

header('Location: ' . $backto);