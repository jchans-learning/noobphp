<div class="container">

	<div class="r" p-3 mb-2>
		<h1>工作記事</h1>
	</div>

	<div class="row p-3 mb-2">
		<div class="">
			<h2>開張</h2>
			<p>好啦，雖然有點老套，但是，世界，你好。</p>
			<p>從頭開始做</p>
			<p><a href="/">確認更新狀況</a></p>
		</div>
	</div>

	<div class="row p-3 mb-2">
		<div class="">
			<h2>複習規劃</h2>
			<p>PHP and MySQL 上課的內容主要是做出一個通訊錄， admin 使用者登入之後可以新增，讀取，修改，刪除通訊錄的資料。按照老師上課教的檔案，重做一次。</p>
			
			<!-- 複習規劃 Bulleted List Start -->
			<h3>架構</h3>

			<ul>
				<li>通訊錄</li>
					<ul>
						<li>讀取通訊錄資料(R)</li>
							<ul>
								<li>通訊錄列表</li>
									<ul>
										<li>新增頁面格式（ Task 01 ，done ）</li>
										<li>新增通訊錄列表 API （ Task 06 ，done ）</li>
										<li>使通訊錄列表頁面從資料庫獲得 1 筆資料（ Task 08 ，done ）</li>
										<li>使通訊錄列表頁面從資料庫獲得全部資料，目前是 2 筆（ Task 09 ，done ）</li>
									</ul>
								<li>單頁顯示筆數設定</li>
								<li>頁數條</li>
								<ul>
									<li>顯示頁數</li>
									<li>顯示指定數量的頁數</li>
									<li>上一頁按鈕</li>
									<li>下一頁按鈕</li>
									<li>第一頁按鈕</li>
									<li>最後一頁按鈕</li>
								</ul>
							</ul>
						<li>修改單筆資料(U)</li>
							<ul>
								<li>修改資料頁面</li>
								<li>修改資料功能</li>
								<li>設定 admin 登入後才能修改資料</li>
							</ul>
						<li>刪除單筆資料(D)</li>
							<ul>
								<li>刪除單筆資料功能（ Task 11 ，done ）</li>
								<li>設定 admin 登入後才能刪除資料</li>
								<li>做「假刪除」的功能，使資料無法被查詢（例如標示為「已刪除」），但不刪除資料庫內的資料</li>
							</ul>
						<li>搜尋資料的功能</li>
					</ul>
				<li>新增通訊錄( admin 登入後可連結，未登入連到登入頁面)</li>
					<ul>
						<li>新增單筆資料(C)</li>
							<ul>
								<li>新增頁面格式（ Task 02 ，即使還沒做出 admin 登入權限，還是先做出有權限新增時的頁面，一些邏輯功能都先略，只先做出表單的前端格式。 done ）</li>
								<li>新增通訊錄單筆資料功能（ Task 12 ，working ）</li>
								<li>設定 admin 登入後才能新增資料</li>
							</ul>
					</ul>
							
				<li>登入</li>
					<ul>
						<li>admin 使用者</li>
						<li>編輯 admin 使用者資料</li>
							<ul>
								<li>上傳頭像照片</li>
								<li>帳號名稱不可更改</li>
								<li>暱稱（可留空）</li>
								<li>確認舊密碼</li>
								<li>更改密碼（可留空）</li>
							</ul>
					</ul>
				<li>資料庫連線</li>
					<ul>
						<li>建立通訊錄用的資料庫（ Task 03 ， done ）</li>
							<ul>
								<li>建立通訊錄資料表（ Task 04 ， done ）
								<li>建兩筆資料（ Task 05 ， done ）</li>
								<li>導入測試用的資料（ Task 10 ，done ）</li>
							</ul>
						<li>新增資料庫連線 API （ Task 07 ， done ）</li>
					</ul>
			</ul>
			<!-- 複習規劃 Bulleted List Start End　-->

		</div>
	</div>

	<div class="row p-3 mb-2">
		<div>
			<h2>工作筆記</h2>
			<h3>2020/12/19 之前</h3>
				<ul>
					<li>研究怎麼把專案 deploy 到 Heroku 。</li>
					<li>研究怎麼在 Heroku 上用 SQL 資料庫，後研究 PostgresSQL 在 Heroku 上的用法。</li>
					<li>安裝 bootstrap 4 與 jQuery 到專案中。</li>
					<li>push 專案到 heroku 。
					</li>
				</ul>
			<h3>2020/12/20</h3>
				<ul>
					<li>
						<a href="https://github.com/jchans/noobphp/commit/af51b7607f018410fcdd022fc8f2e1ba40b09cd1#diff-b07e48f0f2dc6c53e55b040c07454d668afb2670ebcc26da0a7e44397b630a93">
						製作 navbar ，加上 div container 對齊。
						</a>
					</li>
					<li>把這個複習順便跟小專一起做？還是說先照老師的範例做一次，再做一次小專的版本？我有那麼多時間？</li>
					<li>安裝 Font Awesome 5.151-web 。</li>
					<li>建立通訊錄列表格式。</li>
					<li>----半夜工作分隔線----</li>
				</ul>			
		</div>
	</div>

	<div class="row p-3 mb-2">
		<div>
			<h2>參考資料</h2>
			<ul>
				<li>API ： https://developer.mozilla.org/zh-TW/docs/Glossary/API</li>
			</ul>
		</div>
	</div>

</div>