$(function() {

	// Get the form.
	var form = $('#ajax-insurace');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();
        $("#sendBttn").text("Enviando...");

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
			$('#contacto_nombre').val('');
            $('#contacto_edad').val('');
            $('#contacto_sexo').val("");
            $('#contacto_fuma').val("");
            $('#contacto_suma').val("");
            $('#contacto_frecuencia').val("");
            $('#contacto_email').val('');
			$('#contacto_telefono').val('');
            $("#sendBttn").text("Enviar");
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('alert alert-success');
			$(formMessages).addClass('alert alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
                $("#sendBttn").text("Enviar");
			} else {
				$(formMessages).text('Oops! Ocurrió un error no se pudo enviar la forma.');
                $("#sendBttn").text("Enviar");
			}
		});

	});

});
