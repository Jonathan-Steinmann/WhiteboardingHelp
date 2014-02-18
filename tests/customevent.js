
$("body").delegate("p", "myCustomEvent", function(e, myName, myValue) {
	$(this).text("Hi there!");
	$("span")
	    .stop()
	    .css("opacity", 1 )
	    .text("myName = " + myName )
	    .fadeIn(30)
	    .fadeOut(1000);
});

$("button").click(function() {
	$("p").trigger("myCustomEvent");
});

