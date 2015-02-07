'use strict';
$(document).ready(function() {
	var icon = document.getElementById('show');
	var nav = $('ul.nav');
	function show() {
		$(nav).slideDown();
	}
	function hide() {
		$(nav).slideUp();
	}
	$(icon).click(function() {
		if(nav.is(':visible')){
			hide();
		} else {
			show();
		}
	});
});