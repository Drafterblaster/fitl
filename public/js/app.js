
$('form.delete-object').submit(function(e) {

	var deleteConfirmed = confirm('Are you sure that you want to cancel your order?');

	// if "true", submission will be processed
	// if "false", submission will be halted
	return deleteConfirmed;

});

// toggle part edit forms when "edit" buttons are clicked
$('.edit-object').click(function(e) {
	var $partItem = $(this).closest('li');
	var $partForm = $partItem.find('form.edit-object-form');
	$partForm.toggleClass('hide');
});