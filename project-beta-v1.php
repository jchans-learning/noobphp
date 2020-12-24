<?php 
// 小專試作第一版
require __DIR__. '/db_connect.php';

$pageName = '小專：拼圖資料庫試做';
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>

<style>
.book {
    height: 300px;
    background-color: #EEE;
    border: solid 1px;
}
</style>

<div class="container mt-3">
    <!-- Puzzle example -->
    <div class="row">
        <div class="col" style="height: 450px; border: solid 1px; background-color: #EEE;">
            <div class="mt-3 d-flex justify-content-center">
                <img src="images/fma01.jpg" alt="">
            </div>            
        </div>
        <div class="col d-flex" style="height: 450px; border: solid 1px; background-color: #EEE;">
            <div class="col-3">
                <div class="drop">
                    碎片1
                    <button class="btn btn-info dragdrop">等</button>
                </div>
                <div class="drop">
                    碎片2
                    <button class="btn btn-info dragdrop">交</button>
                </div>
            </div>
            <div class="col-3">
                <div class="drop">
                    碎片3
                    <button class="btn btn-info dragdrop">價</button>
                </div>
                <div class="drop">
                    碎片4
                    <button class="btn btn-info dragdrop">換</button>
                </div>
            </div>
            <div class="col-6">
                <div class="drop" style="height: 200px;">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12" style="height: 600px; border: solid 1px; background-color: #EEE;">
            <h1>過往推薦</h1>
            <h3>頁面使用流程構想</h3>
            <ul>
                <li>第一次進入本頁面</li>
                    <ul>
                        <li>看了拼圖小遊戲沒有引起興趣 → 離開</li>
                        <li>看了拼圖小遊戲有引起興趣 → 把第一個拼圖拼起來。（例如：鋼之煉金術士的封面配的拼圖是「等價交換」）</li>
                            <ul>
                                <li>無法完成拼圖 → 讓玩家可以無限次自由嘗試 → 無限次失敗之後玩家失去耐心 → 離開（一邊講：「這什麼糞 Game ！」）</li>
                                <li>完成拼圖 → 獲得一個書幣（折扣碼）</li>
                                    <ul>
                                        <li>沒有登入 → 提示拼圖庫選單按鈕的變化，顯示訊息：提示玩家可以收藏或新增自己的拼圖</li>
                                        <li>玩家已經登入，如果不是第一次使用這個功能 → 提示折扣螞已加入折扣碼庫</li>
                                        <li>玩家已經登入，如果是第一次使用這個功能 → 提示玩家可以收藏或新增自己的拼圖，與檢視書幣庫（R ，折扣碼清單）</li>
                                    </ul>
                            </ul>
                    </ul>
                <li>玩家點選拼圖庫按鈕</li>
                    <ul>
                        <li>點選「我的拼圖」，出現拼圖清單(R)，可以修改(U)，或者刪除(D)，擁有的拼圖</li>
                        <li>點選「建立拼圖」，出現建立新拼圖頁面(C)</li>
                            <ul>
                                <li>建立拼圖要可以輸入文字（暫定 140 字以內）</li>
                                <li>拼圖提示，要可以上傳一張圖，或者從個人書庫中選擇一張圖</li>
                                <li>設定答案：例如四個段落的順訊 ABCD </li>
                                <li>自訂或者亂數產生折扣碼</li>
                            </ul>
                        <li>點選「我的折扣」，出現折扣碼清單(R)</li>
                        <li>點選「藏書筆記」，出現筆記清單(R)，從筆記清單建立拼圖(C)</li>
                        
                    </ul>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg book autobg">
            立春 / 雨水
        </div>
        <div class="col-lg book autobg">
            驚蟄 / 春分
        </div>
        <div class="col-lg book autobg">
            清明 / 穀雨
        </div>
        <div class="col-lg book autobg">
            立夏 / 小滿
        </div>
        <div class="col-lg book autobg">
            芒種 / 夏至
        </div>
        <div class="col-lg book autobg">
            小暑 / 大暑
        </div>
    </div>
    <div class="row">
        <div class="col-lg book autobg">
            立秋 / 處暑
        </div>
        <div class="col-lg book autobg">
            白露 / 秋分
        </div>
        <div class="col-lg book autobg">
            寒露 / 霜降
        </div>
        <div class="col-lg book autobg">
            立冬 / 小雪
        </div>
        <div class="col-lg book autobg">
            大雪 / 冬至
        </div>
        <div class="col-lg book autobg">
            小寒 / 大寒
        </div>
    </div>
    <div class="row">
        <div class="col d-flex flex-row-reverse fixed-bottom">
            <button type="button" class="btn btn-info dropdown-toggle" id="puzzel-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                拼圖庫
            </button>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">建立拼圖(C)</a>
                <a href="page-puzzels.php" class="dropdown-item">我的拼圖(R, U, D)</a>
                <a href="#" class="dropdown-item">我的折扣(R)</a>
                <a href="#" class="dropdown-item">藏書筆記(R)</a>
            </div>
        </div>
        </div> 
    </div>
</div>

<!-- autobg color -->
<script>
        function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max - 50) + 100);
        }

        function getRBGA() {
            return `linear-gradient(135deg, rgba(${getRandomInt(256)},${getRandomInt(256)},${getRandomInt(256)},.5), rgba(${getRandomInt(256)},${getRandomInt(256)},${getRandomInt(256)},.8)`
        }

        const elements = document.querySelectorAll('.autobg');

        Array.from(elements).forEach((element, index) => {
            element.style.backgroundImage = getRBGA();
        });

    // $('.autobg').each(function (index, currentElement) {
    //     currentElement.style.backgroundImage = getRBGA();
    // });
</script>


<!-- Copied from demo of https://github.com/gardiner/draganddrop -->
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
                    // $(this).appendTo(droptarget).draggable('destroy');
                    $(this).appendTo(droptarget);
                }
            });
            //off switch
            $('.off').on('click', function () {
              $('.sortable').each(function () { $(this).sortable('destroy');    });
              $('.draggable').each(function () { $(this).draggable('destroy')   ; });
            });
        });
    </script>

<?php include __DIR__. '/parts/html-foot.php'; ?>