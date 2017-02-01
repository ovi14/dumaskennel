<?php
include('./config.php');
unset($_SESSION);
session_unset();
session_destroy();

print '<meta http-equiv="refresh" content="0; URL=index.php">';
	