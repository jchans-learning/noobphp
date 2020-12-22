<?php 
// 開始開發前記得去 parts/html-head.php 確認一下 WEB_ROOT 的設定
 ?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>

<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
    <meta content='text/html;charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1' name='viewport'>

    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.1-web/css/all.css">

    <link href='src/demo.css' rel='stylesheet' type='text/css'>
    <link href='src/draganddrop.css' rel='stylesheet' type='text/css'>
    <script src='src/draganddrop.js' type='text/javascript'></script>
    <script type='text/javascript'>
        $(function () {
            $('.dragdrop').draggable({
                revert: true,
                placeholder: true,
                droptarget: '.drop',
                drop: function (evt, droptarget) {
                    $(this).appendTo(droptarget).draggable('destroy');
                }
            });
        });
    </script>
    <title>Drag and Drop Demo</title>
</head>

<body>
    <h2>Drag and Drop Demo</h2>

    <button class="dragdrop">Drag and Drop me</button>

    <div class="drop">
        <p>Drop here</p>
    </div>
</body>

</html>


<?php include __DIR__. '/parts/html-foot.php'; ?>