<?php

// 開發中，本地端測試的時候用
//
include 'db_key_noobphp.php';
$dsn = "mysql:host={$db_host}; dbname={$db_name};charset=utf8";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);


// push 到 Heroku 時改為
//
// $db = parse_url(getenv("DATABASE_URL"));

// $pdo_options = [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
// 	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
// 	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
// ];

// $pdo = new PDO("pgsql:" . sprintf(
//     "host=%s;port=%s;user=%s;password=%s;dbname=%s",
//     $db["host"],
//     $db["port"],
//     $db["user"],
//     $db["pass"],
//     ltrim($db["path"], "/")
// ));
//
// push 到 Heroku 時改為 end

// Start Session
if (!isset($_SESSION)) {
	session_start();
}