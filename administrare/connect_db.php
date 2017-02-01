<?php

$sock = @mysql_pconnect ($database_server, $database_user, $database_password)
		or die ("The connection to database could not be done."/*.mysql_error()*/);

mysql_select_db ($database, $sock)
		or die ("The database was not found");
		
?>
