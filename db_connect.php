<?php

// push 到 Heroku 時改為
//
// $dbopts = parse_url(getenv('DATABASE_URL'));
// $app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
//                array(
//                 'pdo.server' => array(
//                    'driver'   => 'pgsql',
//                    'user' => $dbopts["user"],
//                    'password' => $dbopts["pass"],
//                    'host' => $dbopts["host"],
//                    'port' => $dbopts["port"],
//                    'dbname' => ltrim($dbopts["path"],'/')
//                    )
//                )
// );
//
// push 到 Heroku 時改為 End

// 開發中，本地端測試的時候用
include 'db_key_noobphp.php';
$dsn = "mysql:host={$db_host}; dbname={$db_name};charset=utf8";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
];


$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

if (!isset($_SESSION)) {
	session_start();
}