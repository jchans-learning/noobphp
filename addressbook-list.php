<?php // address book list ?>

<?php 
// PHP Code Block Start
require __DIR__. '/db_connect.php';

$pageName = 'addressbook-list';

$p_sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC");

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
			<h1>This is address book</h1>
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
				<th scope="col">sid</th>
				<th scope="col">name</th>
				<th scope="col">email</th>
				<th scope="col">mobile</th>
				<th scope="col">birthday</th>
				<th scope="col">address</th>
				<th scope="col"><i class="fas fa-edit"></i></th>
			</tr>			
		</thead>
		<tbody>
			<?php while ($r = $statement->fetch()): ?>
			<tr>
				<td class="remove-icon">
					<a href="javascript: del_it(<?= $r['sid'] ?>)">
						<i class="fas fa-minus-circle"></i>
					</a>
				</td>
				<td scope="col"><?= $r['sid'] ?></td>
				<td scope="col"><?= $r['name'] ?></td>
				<td scope="col"><?= $r['email'] ?></td>
				<td scope="col"><?= $r['mobile'] ?></td>
				<td scope="col"><?= $r['birthday'] ?></td>
				<td scope="col"><?= $r['address'] ?></td>
				<td scope="col">
					<a href="addressbook-edit.php?sid=<?= $r['sid'] ?>">
						<i class="fas fa-edit"></i>
					</a>
				</td>
			</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</div>

<?php include __DIR__. '/parts/scripts.php'; ?>

<script type="text/javascript">
	function del_it(sid) {
		if (confirm(`是否要刪除資料${sid}`)) {
			location.href = 'addressbook-delete.php?sid=' + sid;
		}
	}
</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>