<?php // address book edit ?>

<?php
require __DIR__ . '/db_connect.php';

if(!isset($_GET['sid'])){
	header('Location: addressbook-list.php');
	exit;
}
$sid = intval($_GET['sid']);

$row = $pdo
	->query("SELECT * FROM address_book WHERE sid=$sid")
	->fetch();

if(empty($row)){
	header('Location: addressbook-list.php');
	exit;
}
?>

<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">編輯資料</h5>

					<form name="form1" novalidate onsubmit="checkForm(); return false;">
						<input type="hidden" name="sid" value="<?= $sid ?>">
						<div class="form-group">
							<label for="name">** name</label>
							<input type="text" class="form-control" id="name" name="name" required value="<?= htmlentities($row['name']) ?>">
						</div>
						<div class="form-group">
							<label for="email">** email</label>
							<input type="email" class="form-control" id="email" name="email" value="<?= htmlentities($row['email']) ?>">
						</div>
						<div class="form-group">
							<label for="mobile">mobile</label>
							<input type="text" class="form-control" id="mobile" name="mobile" value="<?= htmlentities($row['mobile']) ?>">
						</div>
						<div class="form-group">
							<label for="birthday">birthday</label>
							<input type="date" class="form-control" id="birthday" name="birthday" value="<?= htmlentities($row['birthday']) ?>">
						</div>
						<div class="form-group">
							<label for="address">address</label>
							<textarea class="form-control" id="address" name="address" rows="3"><?= $row['address'] ?></textarea>
						</div>
						<button type="submit" class="btn btn-primary">修改</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include __DIR__. '/parts/scripts.php'; ?>

<script>
	

	function checkForm() {
		const fd = new FormData(document.form1);
		
		fetch('addressbook-edit-api.php', {
			method: 'POST',
			body: fd
			})
			.then(r => r.json())
            .then(obj => {
				console.log(obj);
			})

			window.location.href = 'addressbook-list.php';
        }

	
</script>

<?php include __DIR__. '/parts/html-foot.php'; ?>

<?php 
// 筆記
//
// Page Form Ref:
// 1. Bootstrap 4, card: https://getbootstrap.com/docs/4.0/components/card/
//
 ?>