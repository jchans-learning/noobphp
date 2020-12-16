<?php
define('WEB_ROOT', '/noobphp/');

// 待確認： PHP 的 include 的路徑，不是像網頁的路徑， WEB_ROOT 的寫法沒用
// 用相對路徑寫會不會有安全疑慮？ 
?>

<?php include '../parts/html-head.php'; ?>
<?php include '../parts/navbar.php'; ?>

<?php include '../parts/include-test.php'; ?>

<?php include '../parts/scripts.php'; ?>
<?php include '../parts/html-foot.php'; ?>