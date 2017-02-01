<?php
// print_r('<pre>');
// print_r($_POST);

// SAVE
if (isset($_GET['monta']) && isset($_POST['submit'])) {

	// upload pictures
	include 'file-upload.php';

	if (isset($_GET['edit_id'])) {	// update
		updateMonta(	$_GET['edit_id'], $_POST['data'], $_POST['poza0'] );
	} else {	// insert
		addMonta( $_POST['data'], $_POST['poza0'] );
	}
}

// EDIT
$add_monta_class = "hidden";
$monta_edit = array(
		"data" => "",
		"poza1" => "",
	);
if (isset($_GET['modifica']) && isset($_GET['edit_id']) && $_GET['edit_id'] != "") {
	$monta_edit = getMontaById($_GET['edit_id']);
	$add_monta_class = "";
}

// READ
$monta = getMonta();
// print_r('<pre>');
// print_r($monta);
// print_r('</pre>');

// ADD NEW
if (isset($_GET['monta']) && isset($_GET['new_monta'])) {
	$add_monta_class = "";
}


$monta_params = isset($_GET['edit_id']) ? "&edit_id=".$_GET['edit_id'] : "";
?>
<div align="center" id="div_monta">
	<h1 style="background: #f5f5f5">MONTA</h1>

	<div id="add_monta" class="<?= $add_monta_class ?>">
		<form action="?monta<?= $monta_params ?>" enctype="multipart/form-data" name="add_monta_form" method="post">
			<table border="0">
				<tr>
					<td>Data: </td>
					<td><input type="text" name="data" value="<?= $monta_edit['data']?>" id="monta_date" /></td>
					<td></td>
				</tr>
				<tr>
					<td>Poza1</td>
					<td><input type="text" name="poza1" value="<?= $monta_edit['poza1']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza1" class="image-input"/></td>
				</tr>
				<tr>
					<td colspan="3" align="right">
						<br>
						<input type="hidden" name="id" value="<?= isset($_GET['edit_id']) ? $_GET['edit_id'] : 0 ?>">
						<input type="submit" name="submit" value="SALVEAZA" class="submit-button"/>
					</td>
				</tr>
			</table>
		</form>
	</div>

	<button id="add_new_monta"><a href="?monta&new_monta">+ ADAUGA MONTA NOUA</a></button>

	<table id="table_monta" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>DATA</th>
				<th>MODIFICA</th>
				<th>STERGE</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($monta as $m) { ?>
			<tr>
				<td><?= $m['id'] ?></td>
				<td><?= $m['data'] ?></td>
				<td><a href="?monta&modifica&edit_id=<?= $m['id'] ?>">Modifica</a></td>
				<td><img src="images/delete.png" class="delete-monta" id="<?= $m['id'] ?>" table="monta"/></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>