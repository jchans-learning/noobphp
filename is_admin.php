<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

// 在一些要求有 admin 權限的 php 程式前加上
// require __DIR__. '/is_admin.php';