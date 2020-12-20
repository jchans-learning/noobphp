<?php // address book insert ?>


<?php include __DIR__. '/parts/html-head.php'; ?>
<?php include __DIR__. '/parts/navbar.php'; ?>

<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">新增資料</h5>

					<form name="form1">
						<div class="form-group" onsubmit="">
							<label for="name">** name</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
						<div class="form-group">
							<label for="email">** email</label>
							<input type="text" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="mobile">mobile</label>
							<input type="text" class="form-control" id="mobile" name="mobile" pattern="">
						</div>
						<div class="form-group">
							<label for="birthday">birthday</label>
							<input type="date" class="form-control" id="birthday" name="birthday">
						</div>
						<div class="form-group">
							<label for="address">address</label>
							<textarea class="form-control" id="address" name="address" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">新增</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include __DIR__. '/parts/scripts.php'; ?>
<?php include __DIR__. '/parts/html-foot.php'; ?>

<?php 
// 筆記
//
// Bootstrap 4, card
// https://getbootstrap.com/docs/4.0/components/card/
 ?>