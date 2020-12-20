<?php // address book list ?>

<?php 
// PHP Code Start
require __DIR__. '/db_connect.php';

$pageName = 'addressbook-list';

$p_sql = sprintf("SELECT * FROM address_book");

echo '<!-- ';
echo $p_sql;
echo ' -->';

$statement = $pdo->query($p_sql);
$row = $statement->fetch();

print_r($row);

// PHP Code End
?>


<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>


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
			<tr>
				<th><i class="fas fa-minus-circle"></i></th>
				<th scope="col">sid資料</th>
				<th scope="col">name資料</th>
				<th scope="col">email資料</th>
				<th scope="col">mobile資料</th>
				<th scope="col">birthday資料</th>
				<th scope="col">address資料</th>
				<th scope="col"><i class="fas fa-edit"></i></th>
			</tr>
		</tbody>
	</table>
</div>





<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>