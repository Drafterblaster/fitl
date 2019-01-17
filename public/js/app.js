
$('form.delete-object').submit(function(e) {

	var deleteConfirmed = confirm('Are you sure that you want to cancel your order?');

	// if "true", submission will be processed
	// if "false", submission will be halted
	return deleteConfirmed;

});