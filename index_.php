<?php 
// 開始開發前記得去 parts/html-head.php 確認一下 WEB_ROOT 的設定
// 也記得確認」db_connect.php 的設定
 ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}

$pageName = 'Index1';
?>


<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>
<?php include __DIR__. '/parts/index-content.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>