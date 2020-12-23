<?php
require __DIR__. '/is_admin.php';
require __DIR__. '/db_connect.php';

// Local Develop with MySQL
//
// if (isset($_GET['sid'])) {
// 	$sid = intval($_GET['sid']);
// 	$pdo->query("DELETE FROM `address_book` WHERE sid=$sid");
// }

// Heroku with PostgreSQL
//
if (isset($_GET['sid'])) {
	$sid = intval($_GET['sid']);
	$pdo->query("DELETE FROM address_book WHERE sid=$sid");
}

$backto = 'addressbook-list.php';
if (isset($_SERVER['HTTP_REFERER'])) {
	$backto = $_SERVER['HTTP_REFERER'];
}

header('Location: ' . $backto);