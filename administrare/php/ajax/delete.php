<?php
require_once('../../config.php');
require_once('../functions.php');

deleteById($_POST['id'], $_POST['table']);

echo "S-a sters din tabela '".$_POST['table']."', id-ul: ".$_POST['id'];

?>