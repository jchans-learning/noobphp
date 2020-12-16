<?php
define('WEB_ROOT', '/');

// 待確認： PHP 的 include 的路徑，不是像網頁的路徑， WEB_ROOT 的寫法沒用
// 用相對路徑寫會不會有安全疑慮？ 
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>
<?php include __DIR__. '/parts/include-test.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>