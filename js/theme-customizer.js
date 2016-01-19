/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */


//you can see from the example  a single basic handler looks like this:

/*
	// Update the site title in real time... with .html( new title)
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '.site-description' ).html( newval );
		} );
	} );
*/

( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'body_qwe', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );
	
	//Update the site description in real time...
	wp.customize( 'container_qwe', function( value ) {
		value.bind( function( newval ) {
			$('.qwe-container .contain').css('background-color', newval );
		} );
	} );

	//Update site title color in real time...
	wp.customize( 'page_qwe', function( value ) {
		value.bind( function( newval ) {
			$('.page .rect').css('background-color', newval );
		} );
	} );

	//Update site background color...
	wp.customize( 'postedby_qwe', function( value ) {
		value.bind( function( newval ) {
			$('.postedby').css('background-color', newval );
		} );
	} );
	
	//Update site link color in real time...
	wp.customize( 'sidebar_qwe', function( value ) {
		value.bind( function( newval ) {
			$('.sidebar aside').css('background-color', newval );

		} );
	} );


	//Update site link color in real time...
	wp.customize( 'footer_qwe', function( value ) {
		value.bind( function( newval ) {
			$('.footer1').css('background-color', newval );
			$('.footer2').css('background-color', newval );
			$('.footer3').css('background-color', newval );
		} );
	} );
	



	
} )( jQuery );


