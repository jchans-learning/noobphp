<?php
// 開發中，本地端測試的時候用
define('WEB_ROOT', '/noobphp/');

// push 到 Heroku 時改為
// define('WEB_ROOT', '/');

// 待確認： PHP 的 include 的路徑，不是像網頁的路徑， WEB_ROOT 的寫法沒用
// 用相對路徑寫會不會有安全疑慮？ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="<?= WEB_ROOT ?>bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= WEB_ROOT ?>fontawesome-free-5.15.1-web/css/all.css">
</head>
<body>