<?php
require __DIR__ . '/db_connect.php';
$pageName = 'login';

if (isset($_POST['account']) and isset($_POST['password'])) {
    $sql = "SELECT * FROM admins WHERE account=? AND password=SHA1(?)";

    $statement = $pdo->prepare($sql);
    $statement = excecute([
        $_POST['account'],
        $_POST['password'],
    ]);

    $row = $statement->fetch();
    if (empty($row)) {
        $errorMsg = "帳號或密碼錯誤";
    } else {
        $_SESSION['admin'] = $row;
    }
}
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>



<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>
