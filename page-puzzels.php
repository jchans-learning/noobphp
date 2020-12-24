<?php
// address book list
$pageName = 'listOfUserPuzzels';
?>

<?php 
// PHP Code Block Start
require __DIR__. '/db_connect.php';


if(!isset($_SESSION['admin'])){
	include __DIR__ . '/project-beta-v1.php';
	exit;
}


$p_sql = sprintf("SELECT * FROM puzzels ORDER BY pzid DESC");
$statement = $pdo->query($p_sql);

// Comment: ver.1 using fetch()
//
// $row = $statement->fetch();
// print_r($row);

// PHP Code Block End
?>


<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<style type="text/css">
	.remove-icon a i {
		color: red;
	}
</style>

<div class="container">

	<div class="row">
		<div class="col">
			<h1>這是拼圖清單頁</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col">
			這個 row 是要留給頁數條的
		</div>
	</div>	

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th><i class="fas fa-minus-circle"></i></th>
				<th scope="col">pzid</th>
				<th scope="col">pz_owner</th>
				<th scope="col">pz_text</th>
				<th scope="col">pz_status</th>
				<th scope="col">bookid</th>
				<th scope="col">p_name</th>
				<th scope="col"><i class="fas fa-edit"></i></th>
			</tr>			
		</thead>
		<tbody>
		</tbody>
	</table>

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

<?php include __DIR__. '/parts/scripts.php'; ?>

<script type="text/javascript">
	function del_it(pzid) {
		if (confirm(`是否要刪除資料${pzid}`)) {
			location.href = 'puzzels-delete.php?pzid=' + pzid;
		}
	}
</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>