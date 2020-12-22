<?php 
// 小專試作第一版
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<style>
.book {
    height: 300px;
    background-color: #EEE;
    border: solid 1px;
}
</style>

<div class="container mt-3">

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
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                拼圖庫
            </button>
            <div class="dropdown-menu">
                <a href="#" class="dropdown-item">我的拼圖(R, U, D)</a>
                <a href="#" class="dropdown-item">建立拼圖(C)</a>
                <a href="#" class="dropdown-item">我的折扣(R)</a>
                <a href="#" class="dropdown-item">藏書筆記(R)</a>
            </div>
        </div>
        </div>

        
    </div>
</div>



<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>