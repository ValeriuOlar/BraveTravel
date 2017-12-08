$(document).ready(function() {

		
		$('#FormModal').on('hidden.bs.modal', function () {
    	$(this).find('form').trigger('reset');
    	$('#register-form').validate().resetForm();
    	$('.form-group').removeClass('has-error');

	});
});

$(function() {

	var text_max = 100;
	$('#count_address').html(text_max + ' left');

	$('#text').keyup(function() {
  		var text_length = $('#text').val().length;
  		var text_remaining = text_max - text_length;	

  	$('#count_address').html(text_remaining + ' left');
});

	$.validator.setDefaults({
		errorClass: 'help-block',
		highlight: function(element) {
			$(element)
				.closest('.form-group')
				.addClass('has-error');
		},
		unhighlight: function(element) {
			$(element)
				.closest('.form-group')
				.removeClass('has-error');
		}
	});

	$("#register-form").validate({
		rules: {
			fname: {
				required: true
			},
			lname: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true
			},
			address: {
				required: true
			},
			username: {
				required: true
			},
			password: {
				required: true,
				minlength: 8
				
				
			}
		}
	

	});

});




