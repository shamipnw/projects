$(document).ready(function(e) {
    $('#animated-navicon').click(function(e) {
        $(this).toggleClass('opened')
		$('#menu').toggleClass('openedMenu')
    });
});