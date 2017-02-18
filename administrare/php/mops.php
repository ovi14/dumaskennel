<?php
// print_r('<pre>');
// print_r($_POST);

// SAVE
if (isset($_GET['mops']) && isset($_POST['submit'])) {

	// upload pictures
	include 'file-upload.php';

	if (isset($_GET['edit_id'])) {	// update
		updateMop(	$_GET['edit_id'], $_POST['nume'], $_POST['titlu'], $_POST['sex'], $_POST['parinti'], $_POST['data'], 
					$_POST['poza0'], $_POST['poza1'], $_POST['poza2'], $_POST['poza3'], $_POST['poza4'], 
					$_POST['poza5'], $_POST['poza6'], $_POST['nume_en'], $_POST['titlu_en'], $_POST['parinti_en'] );
	} else {	// insert
		addMop(	$_POST['nume'], $_POST['titlu'], $_POST['sex'], $_POST['parinti'], $_POST['data'], $_POST['poza0'], 
				$_POST['poza1'], $_POST['poza2'], $_POST['poza3'], $_POST['poza4'], $_POST['poza5'], 
				$_POST['poza6'], $_POST['nume_en'], $_POST['titlu_en'], $_POST['parinti_en'] );
	}
}

// EDIT
$add_mops_class = "hidden";
$mop_edit = array(
		"nume" => "",
		"titlu" => "",
		"sex" => "",
		"parinti" => "",
		"data" => "",
		"pedigree" => "",
		"poza1" => "",
		"poza2" => "",
		"poza3" => "",
		"poza4" => "",
		"poza5" => "",
		"poza6" => "",
		"nume_en" => "",
		"titlu_en" => "",
		"parinti_en" => "",
	);
if (isset($_GET['modifica']) && isset($_GET['edit_id']) && $_GET['edit_id'] != "") {
	$mop_edit = getMopById($_GET['edit_id']);
	$add_mops_class = "";
}

// READ
$mops = getMops();
// print_r('<pre>');
// print_r(mops);
// print_r('</pre>');

// ADD NEW
if (isset($_GET['mops']) && isset($_GET['new_mop'])) {
	$add_mops_class = "";
}


$mops_params = isset($_GET['edit_id']) ? "&edit_id=".$_GET['edit_id'] : "";
?>
<div align="center" id="div_mops">
	<h1 style="background: #f5f5f5">MOPS</h1>

	<div id="add_mops" class="<?= $add_mops_class ?>">
		<form action="?mops<?= $mops_params ?>" enctype="multipart/form-data" name="add_mops_form" method="post">
			<table border="0">
				<tr>
					<th></th>
					<th><img src="images/uk.png" width="25"></th>
					<th><img src="images/ro.png" width="28"></th>
				</tr>
				<tr>
					<td>Nume: </td>
					<td><input type="text" name="nume_en" value="<?= $mop_edit['nume_en']?>"/></td>
					<td><input type="text" name="nume" value="<?= $mop_edit['nume']?>"/></td>
				</tr>
				<tr>
					<td>Titlu: </td>
					<td><input type="text" name="titlu_en" value="<?= $mop_edit['titlu_en']?>"/></td>
					<td><input type="text" name="titlu" value="<?= $mop_edit['titlu']?>"/></td>
				</tr>
				<tr>
					<td>Parinti: </td>
					<td><input type="text" name="parinti_en" value="<?= $mop_edit['parinti_en']?>"/></td>
					<td><input type="text" name="parinti" value="<?= $mop_edit['parinti']?>"/></td>
				</tr>
				<tr>
					<td>Sex: </td>
					<td>
						<input type="radio" name="sex" value="1" <?= ($mop_edit['sex'] == 1 ? "checked" : "") ?> class="radio-input"/> Mascul
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="sex" value="2" <?= ($mop_edit['sex'] == 2 ? "checked" : "") ?> class="radio-input"/> Femela
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Data: </td>
					<td><input type="text" name="data" value="<?= $mop_edit['data']?>" id="mops_date" /></td>
				</tr>
				<tr>
					<td>Pedigree: </td>
					<td><input type="text" name="poza0" value="<?= $mop_edit['pedigree']?>"/></td>
					<td><input type="file" name="userfile[]" id="pedigree" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza1</td>
					<td><input type="text" name="poza1" value="<?= $mop_edit['poza1']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza1" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza2</td>
					<td><input type="text" name="poza2" value="<?= $mop_edit['poza2']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza2" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza3</td>
					<td><input type="text" name="poza3" value="<?= $mop_edit['poza3']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza3" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza4</td>
					<td><input type="text" name="poza4" value="<?= $mop_edit['poza4']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza4" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza5</td>
					<td><input type="text" name="poza5" value="<?= $mop_edit['poza5']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza5" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza6</td>
					<td><input type="text" name="poza6" value="<?= $mop_edit['poza6']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza6" class="image-input"/></td>
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

	<button id="add_new_mop"><a href="?mops&new_mop">+ ADAUGA MOP NOU</a></button>

	<table id="table_mops" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>NUME</th>
				<th>TITLU</th>
				<th>DATA</th>
				<th>MODIFICA</th>
				<th>STERGE</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($mops as $mop) { ?>
			<tr>
				<td><?= $mop['id'] ?></td>
				<td><?= $mop['nume_en'] ?></td>
				<td><?= $mop['titlu_en'] ?></td>
				<td><?= $mop['data'] ?></td>
				<td><a href="?mops&modifica&edit_id=<?= $mop['id'] ?>">Modifica</a></td>
				<td><img src="images/delete.png" class="delete-mop" id="<?= $mop['id'] ?>" table="mops"/></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>