$(document).ready(function() {
	$("#trigger").click(function() {
		$.post("simple.php")
		  .done(function( data ) {
			$("#story").html(data);
		  });
	});
});