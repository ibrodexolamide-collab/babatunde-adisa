/**
 * Theme scripts.
 */

( function () {
	'use strict';

	var toggle = document.querySelector( '.nav-toggle' );
	var nav = document.querySelector( '.site-nav' );

	if ( ! toggle || ! nav ) {
		return;
	}

	var desktopQuery = window.matchMedia( '(min-width: 48rem)' );

	function closeNav() {
		nav.classList.remove( 'is-open' );
		toggle.classList.remove( 'is-active' );
		toggle.setAttribute( 'aria-expanded', 'false' );
		document.documentElement.classList.remove( 'nav-is-locked' );
	}

	function openNav() {
		nav.classList.add( 'is-open' );
		toggle.classList.add( 'is-active' );
		toggle.setAttribute( 'aria-expanded', 'true' );
		document.documentElement.classList.add( 'nav-is-locked' );
	}

	toggle.addEventListener( 'click', function () {
		if ( nav.classList.contains( 'is-open' ) ) {
			closeNav();
		} else {
			openNav();
		}
	} );

	nav.addEventListener( 'click', function ( event ) {
		if ( event.target.closest( 'a' ) ) {
			closeNav();
		}
	} );

	document.addEventListener( 'click', function ( event ) {
		if ( nav.classList.contains( 'is-open' ) && ! nav.contains( event.target ) ) {
			closeNav();
		}
	} );

	document.addEventListener( 'keydown', function ( event ) {
		if ( event.key === 'Escape' && nav.classList.contains( 'is-open' ) ) {
			closeNav();
			toggle.focus();
		}
	} );

	desktopQuery.addEventListener( 'change', function ( event ) {
		if ( event.matches ) {
			closeNav();
		}
	} );
} )();
