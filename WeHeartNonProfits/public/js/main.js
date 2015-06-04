$(document).ready(function() {
	// Handle Message Creation
	$('form#create').on('submit', function() {
		var message = $('span#message').text()
		$('input[name=\'message\']').val(message);
	});
})