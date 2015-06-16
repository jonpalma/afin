$(function() {

	// Get the form.
	var form = $('#ajax-download');

	// Get the messages div.
	var formMessages = $('#download-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
        $("#sendBttnD").text("Enviando...");

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('alert alert-danger');
			$(formMessages).addClass('alert alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('#download_nombre').val('');
            $('#download_email').val('');
			$('#download_telefono').val('');
            $("#sendBttnD").text("Enviar");
            $(location).attr();
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert alert-success');
			$(formMessages).addClass('alert alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
                $("#sendBttnD").text("Enviar");
			} else {
				$(formMessages).text('Oops! Ocurrió un error no se pudo enviar la forma.');
                $("#sendBttnD").text("Enviar");
			}
		});

	});

});
