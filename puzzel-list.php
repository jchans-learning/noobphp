<?php
// address book list
$pageName = 'puzzel-list';
?>

<?php 
// PHP Code Block Start
require __DIR__. '/db_connect.php';


if(!isset($_SESSION['admin'])){
	include __DIR__ . '/login.php';
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
			<h1>個人拼圖清單</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col">
			<!-- 這個 row 是要留給頁數條的 -->
		</div>
	</div>	

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
			<th scope="col"><i class="fas fa-edit"></i></th>
				<th scope="col">pzid</th>
				<th scope="col">pz_owner</th>
				<th scope="col">pz_text</th>
				<th scope="col">pz_status</th>
				<th scope="col">book_id</th>
				<th scope="col">p_name</th>
				<th scope="col">p_answer</th>
				<th><i class="fas fa-minus-circle"></i></th>
			</tr>			
		</thead>
		<tbody>
		<?php while ($r = $statement->fetch()): ?>
			<tr>
				<th scope="col"><i class="fas fa-edit"></i></th>
				<td scope="col"><?= $r['pzid'] ?></td>
				<td scope="col"><?= $r['pz_owner'] ?></td>
				<td scope="col"><?= $r['pz_text'] ?></td>
				<td scope="col"><?= $r['pz_status'] ? '已公開' : '未公開' ?></td>
				<td scope="col"><?= $r['book_id'] ?></td>
				<td scope="col"><?= $r['p_name'] ?></td>
				<td scope="col"><?= $r['p_answer'] ?></td>
				<td class="remove-icon">
					<a href="javascript: del_it(<?= $r['pzid'] ?>)">
						<i class="fas fa-minus-circle"></i>
					</a>
				</td>
			</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</div>

<?php include __DIR__. '/puzzel-menu.php'; ?>

<?php include __DIR__. '/parts/scripts.php'; ?>

<script type="text/javascript">
	function del_it(pzid) {
		if (confirm(`是否要刪除資料${pzid}`)) {
			location.href = 'puzzel-delete.php?pzid=' + pzid;
		}
	}
</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>