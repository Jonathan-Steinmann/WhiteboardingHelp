(function($) {

	var jqxhr = $.ajax( "example.php" )
	.done(function() {
		alert( "success" );
	}).fail(function() {
		alert( "error" );
	})
	.always(function() {
		alert( "complete" );
	});


	$.ajax({
		url: 'url',
		type: 'post',
		data: {
			id: 123
		},
		success: function(data) {
			console.log(data);
		},
		error: function() {

		};
	});

}(jQuery));