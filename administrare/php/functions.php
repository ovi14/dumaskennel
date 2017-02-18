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
	global $sock;
	
	$mops = array();

	$sql = "SELECT * FROM mops 
			WHERE del = 0
			ORDER BY data DESC";
	$res = mysql_query($sql, $sock);

	if ((is_Resource($res)) && (mysql_num_rows($res) > 0)) {
		while($row = mysql_fetch_assoc($res)) {
			$mops[] = $row;
		}
	}

	return $mops;
}

function addMop($nume, $titlu, $sex, $parinti, $data, $pedigree, 
				$poza1, $poza2, $poza3, $poza4, $poza5, 
				$poza6, $nume_en, $titlu_en, $parinti_en) {
	global $sock;
	
	$sql = "INSERT INTO mops
			  ( nume, titlu, sex, parinti, pedigree, data, 
			    poza1, poza2, poza3, poza4, poza5, 
			    poza6, nume_en, titlu_en, parinti_en )
			VALUES
			  ('".escapeQuotes($nume)."', '".escapeQuotes($titlu)."', '".$sex."', '".escapeQuotes($parinti)."', '".$pedigree."', '".$data."', '".$poza1."', '".$poza2."', '".$poza3."', '".$poza4."', '".$poza5."', '".$poza6."', '".escapeQuotes($nume_en)."', '".escapeQuotes($titlu_en)."', '".escapeQuotes($parinti_en)."')";
	mysql_query($sql, $sock);
	
}

function updateMop( $id, $nume, $titlu, $sex, $parinti, $data, 
					$pedigree, $poza1, $poza2, $poza3, $poza4, 
					$poza5, $poza6, $nume_en, $titlu_en, $parinti_en ) {
	global $sock;
	
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
				parinti_en = '".escapeQuotes($parinti_en)."'
			WHERE
			  id = ".$id;
	// echo $sql;		  
	mysql_query($sql, $sock);	
}

function getMopById($id_mop){
	global $sock;
	
	$row = array();

	$sql = "SELECT * FROM mops 
			WHERE id=".$id_mop."
			  AND del=0";
	$res = mysql_query($sql, $sock);

	if ((is_Resource($res)) && (mysql_num_rows($res) > 0)) {
		$row = mysql_fetch_assoc($res);
	}

	return $row;
}

/*********
 * P U I *
 *********/
function getPui() {
	global $sock;
	
	$pui = array();

	$sql = "SELECT * FROM pui 
			WHERE del = 0
			ORDER BY data DESC";
	$res = mysql_query($sql, $sock);

	if ((is_Resource($res)) && (mysql_num_rows($res) > 0)) {
		while($row = mysql_fetch_assoc($res)) {
			$pui[] = $row;
		}
	}

	return $pui;
}

function addPui($nume, $titlu, $sex, $parinti, $data, $pedigree, 
				$poza1, $poza2, $poza3, $poza4, $poza5, 
				$poza6, $nume_en, $titlu_en, $parinti_en) {
	global $sock;
	
	$sql = "INSERT INTO pui
			  ( nume, titlu, sex, parinti, pedigree, data, 
			    poza1, poza2, poza3, poza4, poza5, 
			    poza6, nume_en, titlu_en, parinti_en )
			VALUES
			  ('".escapeQuotes($nume)."', '".escapeQuotes($titlu)."', '".$sex."', '".escapeQuotes($parinti)."', '".$pedigree."', '".$data."', '".$poza1."', '".$poza2."', '".$poza3."', '".$poza4."', '".$poza5."', '".$poza6."', '".escapeQuotes($nume_en)."', '".escapeQuotes($titlu_en)."', '".escapeQuotes($parinti_en)."')";
	// echo $sql;
	mysql_query($sql, $sock);
	
}

function updatePui( $id, $nume, $titlu, $sex, $parinti, $data, 
					$pedigree, $poza1, $poza2, $poza3, $poza4, 
					$poza5, $poza6, $nume_en, $titlu_en, $parinti_en ) {
	global $sock;
	
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
				parinti_en = '".escapeQuotes($parinti_en)."'
			WHERE
			  id = ".$id;
	// echo $sql;		  
	mysql_query($sql, $sock);	
}

function getPuiById($id_pui){
	global $sock;
	
	$row = array();

	$sql = "SELECT * FROM pui 
			WHERE id=".$id_pui."
			  AND del=0";
	$res = mysql_query($sql, $sock);

	if ((is_Resource($res)) && (mysql_num_rows($res) > 0)) {
		$row = mysql_fetch_assoc($res);
	}

	return $row;
}

/*************
 * M O N T A *
 *************/
function getMonta() {
	global $sock;
	
	$monta = array();

	$sql = "SELECT * FROM monta 
			WHERE del = 0
			ORDER BY data DESC";
	$res = mysql_query($sql, $sock);

	if ((is_Resource($res)) && (mysql_num_rows($res) > 0)) {
		while($row = mysql_fetch_assoc($res)) {
			$monta[] = $row;
		}
	}

	return $monta;
}

function addMonta($data, $poza1) {
	global $sock;
	
	$sql = "INSERT INTO monta
			  ( data, poza1 )
			VALUES
			  ('".$data."', '".$poza1."')";
	// echo $sql;
	mysql_query($sql, $sock);
	
}

function updateMonta( $id, $data, $poza1 ) {
	global $sock;
	
	$sql = "UPDATE monta
			SET
				data = '".$data."',
				poza1 = '".$poza1."'
			WHERE
			  id = ".$id;
	// echo $sql;		  
	mysql_query($sql, $sock);	
}

function getMontaById($id_monta){
	global $sock;
	
	$row = array();

	$sql = "SELECT * FROM monta 
			WHERE id=".$id_monta."
			  AND del=0";
	$res = mysql_query($sql, $sock);

	if ((is_Resource($res)) && (mysql_num_rows($res) > 0)) {
		$row = mysql_fetch_assoc($res);
	}

	return $row;
}

function deleteById($id, $table) {
	global $sock;

	$sql = "UPDATE ".$table." 
			SET del = 1
			WHERE id = ".$id;
	echo $sql;
	mysql_query($sql);
}

function escapeQuotes($string) {
	$string = str_replace("'", "\'", $string);
	$string = str_replace('"', '\"', $string);
	return $string;
}

?>