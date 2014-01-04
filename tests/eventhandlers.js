(function($) {


    // Get a handle on the first button element in the document.
    var button = document.querySelector( "button" );
 
    // If a user clicks on it, say hello!
    button.addEventListener( "click", function( ev ) {
        alert( "Hello" );
    }, false);
	

	$("p").bind({
		click: function() {

		};
	},
		mouseenter: function() {

		};
	});



/* The .bind() method attaches the event handler directly to the DOM 
   element in question ( "#members li a" ). The .click() method is 
   just a shorthand way to write the .bind() method. */
$( "#members li a" ).bind( "click", function( e ) {} ); 
$( "#members li a" ).click( function( e ) {} ); 


/* The .live() method attaches the event handler to the root level 
   document along with the associated selector and event information 
   ( "#members li a" & "click" ) */ 
 
$( "#members li a" ).live( "click", function( e ) {} );


/* The .delegate() method behaves in a similar fashion to the .live() 
   method, but instead of attaching the event handler to the document, 
   you can choose where it is anchored ( "#members" ). The selector 
   and event information ( "li a" & "click" ) will be attached to the 
   "#members" element. */
 
$( "#members" ).delegate( "li a", "click", function( e ) {} );


/* The jQuery .bind(), .live(), and .delegate() methods are just one 
   line pass throughs to the new jQuery 1.7 .on() method */
 
// Bind
$( "#members li a" ).on( "click", function( e ) {} ); 
$( "#members li a" ).bind( "click", function( e ) {} ); 
 
// Live
$( document ).on( "click", "#members li a", function( e ) {} ); 
$( "#members li a" ).live( "click", function( e ) {} );
 
// Delegate
$( "#members" ).on( "click", "li a", function( e ) {} ); 
$( "#members" ).delegate( "li a", "click", function( e ) {} );



}(jquery));