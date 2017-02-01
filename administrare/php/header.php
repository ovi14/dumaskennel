<!DOCTYPE html>
<html>
<head>
	<title>Duma's Kennel</title>
	<link rel="stylesheet" type="text/css" href="http://<?= ADMIN_URL?>/css/jquery.dataTables.css">
	<link rel="shortcut icon" href="http://<?= ADMIN_URL?>/media/images/favicon.ico" />
	<link rel="stylesheet" href="http://<?= ADMIN_URL?>/css/style.css" />
	<link rel="stylesheet" href="http://<?= ADMIN_URL?>/css/jquery-ui.css" />

	<script type="text/javascript" src="http://<?= ADMIN_URL?>/javascript/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="http://<?= ADMIN_URL?>/javascript/jquery.dataTables.js"></script>
	<script type="text/javascript" src="http://<?= ADMIN_URL?>/javascript/jquery-ui.js"></script>
	<script type="text/javascript" src="http://<?= ADMIN_URL?>/javascript/function.js"></script>

	<script type="text/javascript" language="javascript" class="init">

		// TABLES
		$(document).ready(function() {
			$('#table_mops, #table_pui').DataTable({
			  	"columns": [
				    { "width": "30px" },
				    null,
				    null,
				    { "width": "100px" },
				    { "width": "100px" },
				    { "width": "50px" }
			  	],
			  	"columnDefs": [
		        	{"className": "dt-center", "targets": [0,3,4,5]}
		      	],
		      	"iDisplayLength": 25
			});

			$('#table_monta').DataTable({
			  	"columns": [
				    { "width": "50px" },
				    null,
				    { "width": "100px" },
				    { "width": "50px" }
			  	],
			  	"columnDefs": [
		        	{"className": "dt-center", "targets": [0,1,2,3]}
		      	],
		      	"iDisplayLength": 25
			});
		});

		// DATEPICKERS
	  	$( function() {
	   		$( "#mops_date, #pui_date, #monta_date" ).datepicker({
	   			dateFormat: "dd.mm.yy" 
	   		});
	  	} );

	</script>
</head>
<body>