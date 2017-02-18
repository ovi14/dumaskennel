<?php
// print_r('<pre>');
// print_r($_POST);

// SAVE
if (isset($_GET['pui']) && isset($_POST['submit'])) {

	// upload pictures
	include 'file-upload.php';

	if (isset($_GET['edit_id'])) {	// update
		updatePui(	$_GET['edit_id'], $_POST['nume'], $_POST['titlu'], $_POST['sex'], $_POST['parinti'], $_POST['data'], 
					$_POST['poza0'], $_POST['poza1'], $_POST['poza2'], $_POST['poza3'], $_POST['poza4'], 
					$_POST['poza5'], $_POST['poza6'], $_POST['nume_en'], $_POST['titlu_en'], $_POST['parinti_en'] );
	} else {	// insert
		addPui(	$_POST['nume'], $_POST['titlu'], $_POST['sex'], $_POST['parinti'], $_POST['data'], $_POST['poza0'], 
				$_POST['poza1'], $_POST['poza2'], $_POST['poza3'], $_POST['poza4'], $_POST['poza5'], 
				$_POST['poza6'], $_POST['nume_en'], $_POST['titlu_en'], $_POST['parinti_en'] );
	}
}

// EDIT
$add_pui_class = "hidden";
$pui_edit = array(
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
	$pui_edit = getPuiById($_GET['edit_id']);
	$add_pui_class = "";
}

// READ
$pui = getPui();
// print_r('<pre>');
// print_r($pui);
// print_r('</pre>');

// ADD NEW
if (isset($_GET['pui']) && isset($_GET['new_pui'])) {
	$add_pui_class = "";
}


$pui_params = isset($_GET['edit_id']) ? "&edit_id=".$_GET['edit_id'] : "";
?>
<div align="center" id="div_pui">
	<h1 style="background: #f5f5f5">PUI</h1>

	<div id="add_pui" class="<?= $add_pui_class ?>">
		<form action="?pui<?= $pui_params ?>" enctype="multipart/form-data" name="add_pui_form" method="post">
			<table border="0">
				<tr>
					<th></th>
					<th><img src="images/uk.png" width="25"></th>
					<th><img src="images/ro.png" width="28"></th>
				</tr>
				<tr class="hidden">
					<td>Nume: </td>
					<td><input type="text" name="nume_en" value="<?= $pui_edit['nume_en']?>"/></td>
					<td><input type="text" name="nume" value="<?= $pui_edit['nume']?>"/></td>
				</tr>
				<tr class="hidden">
					<td>Titlu: </td>
					<td><input type="text" name="titlu_en" value="<?= $pui_edit['titlu_en']?>"/></td>
					<td><input type="text" name="titlu" value="<?= $pui_edit['titlu']?>"/></td>
				</tr>
				<tr>
					<td>Parinti: </td>
					<td><input type="text" name="parinti_en" value="<?= $pui_edit['parinti_en']?>"/></td>
					<td><input type="text" name="parinti" value="<?= $pui_edit['parinti']?>"/></td>
				</tr>
				<tr>
					<td>Sex: </td>
					<td>
						<input type="radio" name="sex" value="1" <?= ($pui_edit['sex'] == 1 ? "checked" : "") ?> class="radio-input"/> Mascul
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="sex" value="2" <?= ($pui_edit['sex'] == 2 ? "checked" : "") ?> class="radio-input"/> Femela
					</td>
					<td></td>
				</tr>
				<tr>
					<td>Data: </td>
					<td><input type="text" name="data" value="<?= $pui_edit['data']?>" id="pui_date" /></td>
				</tr>
				<tr>
					<td>Pedigree: </td>
					<td><input type="text" name="poza0" value="<?= $pui_edit['pedigree']?>"/></td>
					<td><input type="file" name="userfile[]" id="pedigree" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza1</td>
					<td><input type="text" name="poza1" value="<?= $pui_edit['poza1']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza1" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza2</td>
					<td><input type="text" name="poza2" value="<?= $pui_edit['poza2']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza2" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza3</td>
					<td><input type="text" name="poza3" value="<?= $pui_edit['poza3']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza3" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza4</td>
					<td><input type="text" name="poza4" value="<?= $pui_edit['poza4']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza4" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza5</td>
					<td><input type="text" name="poza5" value="<?= $pui_edit['poza5']?>"/></td>
					<td><input type="file" name="userfile[]" id="poza5" class="image-input"/></td>
				</tr>
				<tr>
					<td>Poza6</td>
					<td><input type="text" name="poza6" value="<?= $pui_edit['poza6']?>"/></td>
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

	<button id="add_new_pui"><a href="?pui&new_pui">+ ADAUGA PUI NOU</a></button>

	<table id="table_pui" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>PARINTI</th>
				<th>DATA</th>
				<th>MODIFICA</th>
				<th>STERGE</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($pui as $p) { ?>
			<tr>
				<td><?= $p['id'] ?></td>
				<td><?= $p['parinti_en'] ?></td>
				<td><?= $p['data'] ?></td>
				<td><a href="?pui&modifica&edit_id=<?= $p['id'] ?>">Modifica</a></td>
				<td><img src="images/delete.png" class="delete-pui" id="<?= $p['id'] ?>" table="pui"/></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>