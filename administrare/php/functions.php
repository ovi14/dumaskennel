<?php

function check_login_data($user, $pass){

	$login = false;
	
	// for now just check here.
	// TODO: credentials stored in DB, crypted, etc.
	if ((LOGIN_USERNAME == $user) && (LOGIN_PASSWORD == $pass)) {
		$login = true;
	}
	
	return $login;
}

/***********
 * M O P S *
 ***********/
function getMops() {
	global $mysqli;
	
	$mops = array();

	$sql = "SELECT * FROM mops 
			WHERE del = 0
			ORDER BY data DESC";
	$res = $mysqli->query($sql);

	if ($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			$mops[] = $row;
		}
	}

	return $mops;
}

function addMop($nume, $titlu, $sex, $parinti, $data, $pedigree, 
				$poza1, $poza2, $poza3, $poza4, $poza5, 
				$poza6, $nume_en, $titlu_en, $parinti_en, $descriere,
				$descriere_en) {
	global $mysqli;
	
	$sql = "INSERT INTO mops
			  ( nume, titlu, sex, parinti, pedigree, data, 
			    poza1, poza2, poza3, poza4, poza5, 
			    poza6, nume_en, titlu_en, parinti_en, descriere,
			    descriere_en )
			VALUES
			  ('".escapeQuotes($nume)."', '".escapeQuotes($titlu)."', '".$sex."', '".escapeQuotes($parinti)."', '".$pedigree."', '".$data."', '".$poza1."', '".$poza2."', '".$poza3."', '".$poza4."', '".$poza5."', '".$poza6."', '".escapeQuotes($nume_en)."', '".escapeQuotes($titlu_en)."', '".escapeQuotes($parinti_en)."', '".escapeQuotes($descriere)."', '".escapeQuotes($descriere_en)."')";
	$mysqli->query($sql);
	
}

function updateMop( $id, $nume, $titlu, $sex, $parinti, $data, 
					$pedigree, $poza1, $poza2, $poza3, $poza4, 
					$poza5, $poza6, $nume_en, $titlu_en, $parinti_en, $descriere,
				    $descriere_en ) {
	global $mysqli;
	
	$sql = "UPDATE mops
			SET
				nume = '".escapeQuotes($nume)."',
				titlu = '".escapeQuotes($titlu)."',
				sex = '".$sex."',
				parinti = '".escapeQuotes($parinti)."',
				pedigree = '".$pedigree."',
				data = '".$data."',
				poza1 = '".$poza1."',
				poza2 = '".$poza2."',
				poza3 = '".$poza3."',
				poza4 = '".$poza4."',
				poza5 = '".$poza5."',
				poza6 = '".$poza6."',
				nume_en = '".escapeQuotes($nume_en)."',
				titlu_en = '".escapeQuotes($titlu_en)."',
				parinti_en = '".escapeQuotes($parinti_en)."',
				descriere = '".escapeQuotes($descriere)."',
				descriere_en = '".escapeQuotes($descriere_en)."'
			WHERE
			  id = ".$id;
	// echo $sql;		  
	$mysqli->query($sql);
	/*if(!$mysqli->query($sql))
		print_r($mysqli->error);*/	
}

function getMopById($id_mop){
	global $mysqli;
	
	$row = array();

	$sql = "SELECT * FROM mops 
			WHERE id=".$id_mop."
			  AND del=0";
	$res = $mysqli->query($sql);

	if ($res->num_rows > 0) {
		$row = $res->fetch_assoc();
	}

	return $row;
}

/*********
 * P U I *
 *********/
function getPui() {
	global $mysqli;
	
	$pui = array();

	$sql = "SELECT * FROM pui 
			WHERE del = 0
			ORDER BY data DESC";
	$res = $mysqli->query($sql);

	if ($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			$pui[] = $row;
		}
	}

	return $pui;
}

function addPui($nume, $titlu, $sex, $parinti, $data, $pedigree, 
				$poza1, $poza2, $poza3, $poza4, $poza5, 
				$poza6, $nume_en, $titlu_en, $parinti_en, $descriere,
				$descriere_en) {
	global $mysqli;
	
	$sql = "INSERT INTO pui
			  ( nume, titlu, sex, parinti, pedigree, data, 
			    poza1, poza2, poza3, poza4, poza5, 
			    poza6, nume_en, titlu_en, parinti_en, descriere,
			    descriere_en )
			VALUES
			  ('".escapeQuotes($nume)."', '".escapeQuotes($titlu)."', '".$sex."', '".escapeQuotes($parinti)."', '".$pedigree."', '".$data."', '".$poza1."', '".$poza2."', '".$poza3."', '".$poza4."', '".$poza5."', '".$poza6."', '".escapeQuotes($nume_en)."', '".escapeQuotes($titlu_en)."', '".escapeQuotes($parinti_en)."', '".escapeQuotes($descriere)."', '".escapeQuotes($descriere_en)."')";
	// echo $sql;
	$mysqli->query($sql);
	
}

function updatePui( $id, $nume, $titlu, $sex, $parinti, $data, 
					$pedigree, $poza1, $poza2, $poza3, $poza4, 
					$poza5, $poza6, $nume_en, $titlu_en, $parinti_en, $descriere,
				    $descriere_en ) {
	global $mysqli;
	
	$sql = "UPDATE pui
			SET
				nume = '".escapeQuotes($nume)."',
				titlu = '".escapeQuotes($titlu)."',
				sex = '".$sex."',
				parinti = '".escapeQuotes($parinti)."',
				pedigree = '".$pedigree."',
				data = '".$data."',
				poza1 = '".$poza1."',
				poza2 = '".$poza2."',
				poza3 = '".$poza3."',
				poza4 = '".$poza4."',
				poza5 = '".$poza5."',
				poza6 = '".$poza6."',
				nume_en = '".escapeQuotes($nume_en)."',
				titlu_en = '".escapeQuotes($titlu_en)."',
				parinti_en = '".escapeQuotes($parinti_en)."',
				descriere = '".escapeQuotes($descriere)."',
				descriere_en = '".escapeQuotes($descriere_en)."'
			WHERE
			  id = ".$id;
	// echo $sql;		  
	$mysqli->query($sql);
}

function getPuiById($id_pui){
	global $mysqli;
	
	$row = array();

	$sql = "SELECT * FROM pui 
			WHERE id=".$id_pui."
			  AND del=0";
	$res = $mysqli->query($sql);

	if ($res->num_rows > 0) {
		$row = $res->fetch_assoc();
	}

	return $row;
}

/*************
 * M O N T A *
 *************/
function getMonta() {
	global $mysqli;
	
	$monta = array();

	$sql = "SELECT * FROM monta 
			WHERE del = 0
			ORDER BY data DESC";
	$res = $mysqli->query($sql);

	if ($res->num_rows > 0) {
		while($row = $res->fetch_assoc()) {
			$monta[] = $row;
		}
	}

	return $monta;
}

function addMonta($data, $poza1) {
	global $mysqli;
	
	$sql = "INSERT INTO monta
			  ( data, poza1 )
			VALUES
			  ('".$data."', '".$poza1."')";
	// echo $sql;
	$mysqli->query($sql);
	
}

function updateMonta( $id, $data, $poza1 ) {
	global $mysqli;
	
	$sql = "UPDATE monta
			SET
				data = '".$data."',
				poza1 = '".$poza1."'
			WHERE
			  id = ".$id;
	// echo $sql;		  
	$mysqli->query($sql);
}

function getMontaById($id_monta){
	global $mysqli;
	
	$row = array();

	$sql = "SELECT * FROM monta 
			WHERE id=".$id_monta."
			  AND del=0";
	$res = $mysqli->query($sql);

	if ($res->num_rows > 0) {
		$row = $res->fetch_assoc();
	}

	return $row;
}

function deleteById($id, $table) {
	global $mysqli;

	$sql = "UPDATE ".$table." 
			SET del = 1
			WHERE id = ".$id;
	// echo $sql;
	$mysqli->query($sql);
}

function formatRowByLang($row, $lg) {

	if (!isset($row['nume']))	//skip "monta"
		return $row;
	else {
		if ($lg == 'en') {
			$row['nume_afis'] = $row['nume_en'] == '' ? $row['nume'] : $row['nume_en'];
			$row['titlu_afis'] = $row['titlu_en'] == '' ? $row['titlu'] : $row['titlu_en'];
			$row['parinti_afis'] = $row['parinti_en'] == '' ? $row['parinti'] : $row['parinti_en'];
			$row['descriere_afis'] = $row['descriere_en'] == '' ? $row['descriere'] : $row['descriere_en'];
		} else if ($lg == 'ro') {
			$row['nume_afis'] = $row['nume'] == '' ? $row['nume_en'] : $row['nume'];
			$row['titlu_afis'] = $row['titlu'] == '' ? $row['titlu_en'] : $row['titlu'];
			$row['parinti_afis'] = $row['parinti'] == '' ? $row['parinti_en'] : $row['parinti'];
			$row['descriere_afis'] = $row['descriere'] == '' ? $row['descriere_en'] : $row['descriere'];
		}
	}

	$row['descriere_afis'] = nl2br($row['descriere_afis']); // replace new lines with <br>

	return $row;
}

// on the server might be different
function escapeQuotes($string) {
	global $mysqli;

	$string = $mysqli->real_escape_string($string);
	return $string;
}

?>