<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <a class="navbar-brand" href="index_.php">老翰的練習</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
		<!--
	      <li class="nav-item">
	        <a class="nav-link" href="addressbook-list.php">通訊錄列表</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="addressbook-insert.php">新增通訊錄</a>
		  </li>
		  --> 
		  <li class="nav-item">
	        <a class="nav-link" href="project-beta-v1.php">小專試作</a>
	      </li>
	    </ul>
	    <ul class="navbar-nav">
			<?php if (isset($_SESSION['admin'])): ?>
				<li class="nav-item <?= $pageName == 'login' ? active : '' ?>">
					<a class="nav-link" href="<?= WEB_ROOT ?>addressbook-edit.php"><?= $_SESSION['admin']['account'] ?></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= WEB_ROOT ?>logout.php">登出</a>
				</li>
			<?php else : ?>
				<li class="nav-item <?= $pageName == 'login' ? active : '' ?>">
					<a class="nav-link" href="<?= WEB_ROOT ?>login.php">登入</a>
				</li>
			<?php endif; ?>
	    </ul>
	  </div>
	</div>
</nav>

<?php 
// 筆記
//
// Bootstrap 4, navbar
// https://getbootstrap.com/docs/4.0/components/navbar/
 ?>