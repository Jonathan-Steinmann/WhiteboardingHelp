(function($) {

	var createFunction = function( i ) {
	    return function() {
	        alert( i );
	    };
	};
	 
	for (var i = 0; i < 5; i++) {
	    setTimeout( createFunction( i ), i * 100 );
	}

}(jquery));