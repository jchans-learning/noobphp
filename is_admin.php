<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// $_SESSION['admin'] 是在 login.php 定義的
//
// 在一些要求有 admin 權限的 php 程式前加上
// require __DIR__. '/is_admin.php';
//
// 就是在確認 $_SESSION['admin'] 
