$(document).ready ( function() {

	$(".delete-mop, .delete-pui, .delete-monta").click(function(){
		var del = confirm("Doriti sa stergeti?");
		var table = $(this).attr("table");

		if (del) {
			var data = { 
				id: $(this).attr('id'),
				table: table
			};

			$.ajax({
			  	type: "POST",
			  	url: "php/ajax/delete.php",
			 	data: data,
			  	success: function (html) {
			  		// location.reload();
			  		location.href = "?"+table;
				}
			});
		}

	});
});
