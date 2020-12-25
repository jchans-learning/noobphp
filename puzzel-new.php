<?php // new puzzel insert 
?>

<?php
require __DIR__ . '/is_admin.php';

$pageName = 'Create New Puzzle'
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<div class="container mt-3">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">新增拼圖</h5>

					<form name="form1" novalidate onsubmit="checkForm(); return false;">
						<div class="form-group">
							<label for="pz_owner">顯示暱稱</label>
							<input type="text" class="form-control" id="pz_owner" name="pz_owner">
						</div>
						<div class="form-group">
							<label for="pz_text">拼圖用文字摘句</label>
							<textarea class="form-control" id="pz_text" name="pz_text" rows="3"></textarea>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="pz_status_true" name="pz_status">
							<label class="form-check-label" for="defaultCheck1">
								公開拼圖
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="0" id="pz_status_false" name="pz_status">
							<label class="form-check-label" for="defaultCheck1">
								不公開拼圖
							</label>
						</div>
						<div class="form-group mt-3">
							<label for="book_id">書籍</label>
							<input type="text" class="form-control" id="book_id" name="book_id">
						</div>
						<div class="form-group">
							<label for="p_name">拼圖命名</label>
							<input type="text" class="form-control" id="p_name" name="p_name">
						</div>
						<div class="form-group">
							<label for="p_name">拼圖設定</label><br>
							<button id="pz0" class="btn btn-outline-secondary" type="button" onclick="addPuzzelPiece()">
								+
							</button>
						</div>
						<div class="form-group" style="display: none;">
							<label for="p_pieces">拼圖片數</label>
							<input type="text" class="form-control" id="p_pieces" name="p_pieces" value="">
						</div>
						<br>
						<button type="submit" class="btn btn-primary">新增</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include __DIR__ . '/puzzel-menu.php'; ?>

<?php include __DIR__ . '/parts/scripts.php'; ?>

<script>
	function checkForm() {
		const fd = new FormData(document.form1);

		fetch('puzzel-new-api.php', {
				method: 'POST',
				body: fd
			})
			.then(r => r.json())
			.then(obj => {
				console.log(obj);
			})

		window.location.href = 'puzzel-list.php';
	}

	let pzI = 0

	function addPuzzelPiece() {
		pzI += 1
		const pInputPrev = document.querySelector('#pz0');
		const pInput = `
  			<input id="pz${pzI}" name="${pzI}" type="text" class="form-control mb-2" placeholder="拼片${pzI}">
		`;

		pInputPrev.insertAdjacentHTML("beforebegin", pInput);
		document.querySelector('#p_pieces').value = pzI;
		return pzI;
	}
</script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>

<?php
// 筆記
//
// Page Form Ref:
// 1. Bootstrap 4, card: https://getbootstrap.com/docs/4.0/components/card/
//
?>