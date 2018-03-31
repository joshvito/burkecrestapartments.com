// magic.js
$(document).ready(function() {

	// process the form
	$('form#contactForm').submit(function(event) {

		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			//'acfs' 			: $('input[name=acfs]').val(),
			//'acfto' 			: $('input[name=acfto]').val(),
			//'acfcc' 			: $('input[name=acfcc]').val(),
			'fName' 			: $('input[name=fName]').val(),
			'lName' 			: $('input[name=lName]').val(),
			'address' 		: $('input[name=address]').val(),
			'city' 			: $('input[name=city]').val(),
			'state' 			: $('input[name=state]').val(),
			'zip' 			: $('input[name=zip]').val(),
			'phone' 			: $('input[name=phone]').val(),
			'email' 			: $('input[name=email]').val(),
			'helpWith' 		: $('textarea[name=helpWith]').val(),
			'additional' 		: $('textarea[name=additional]').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'acfprocess.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 	: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data);

				// here we will handle errors and validation messages
				if ( ! data.success) {

					// handle errors for first name ---------------
					if (data.errors.fName) {
						$('#first-name-group').addClass('has-error'); // add the error class to show red input
						$('#first-name-group').append('<div class="help-block">' + data.errors.fName + '</div>'); // add the actual error message under our input
					}
					// handle errors for last name ---------------
					if (data.errors.lName) {
						$('#last-name-group').addClass('has-error'); // add the error class to show red input
						$('#last-name-group').append('<div class="help-block">' + data.errors.lName + '</div>'); // add the actual error message under our input
					}

					// handle errors for phone ---------------
					if (data.errors.phone) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.phone + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

					// handle errors for message ---------------
					if (data.errors.helpWith) {
						$('#help-with-group').addClass('has-error'); // add the error class to show red input
						$('#help-with-group').append('<div class="help-block">' + data.errors.helpWith + '</div>'); // add the actual error message under our input
					}

				} else {

					// ALL GOOD! just show the success message!
					$('form#contactForm').append('<div class="alert alert-success">' + data.processmessage + '</div>');
					$('form#contactForm button[type=submit]').hide(); // hide submit button
					$('form#contactForm').trigger("reset"); // clear form fields

					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				//console.log(data);
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});


	// process the form
	$('form#appointmentForm').submit(function(event) {

		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			//'acfs' 			: $('input[name=acfs]').val(),
			//'acfto' 			: $('input[name=acfto]').val(),
			//'acfcc' 			: $('input[name=acfcc]').val(),
			'fName' 		: $('input[name=fName]').val(),
			'lName' 		: $('input[name=lName]').val(),
			'makeModel' 		: $('input[name=makeModel]').val(),
			'prefDate' 		: $('input[name=prefDate]').val(),
			'prefLoc' 		: $('select[name=prefLoc]').val(),
			'prefTime' 		: $('select[name=prefTime]').val(),
			'phone' 			: $('input[name=phone]').val(),
			'email' 			: $('input[name=email]').val(),
			'workNeeded' 		: $('textarea[name=workNeeded]').val(),
			'prefMethod' 		: $('input[name=prefMethod]').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'maaprocess.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 	: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data);

				// here we will handle errors and validation messages
				if ( ! data.success) {

					// handle errors for first name ---------------
					if (data.errors.fName) {
						$('#first-name-group').addClass('has-error'); // add the error class to show red input
						$('#first-name-group').append('<div class="help-block">' + data.errors.fName + '</div>'); // add the actual error message under our input
					}
					// handle errors for last name ---------------
					if (data.errors.lName) {
						$('#last-name-group').addClass('has-error'); // add the error class to show red input
						$('#last-name-group').append('<div class="help-block">' + data.errors.lName + '</div>'); // add the actual error message under our input
					}

					// handle errors for date ---------------
					if (data.errors.makeModel) {
						$('#vehicle-group').addClass('has-error'); // add the error class to show red input
						$('#vehicle-group').append('<div class="help-block">' + data.errors.makeModel + '</div>'); // add the actual error message under our input
					}

					// handle errors for phone ---------------
					if (data.errors.phone) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.phone + '</div>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#email-group').addClass('has-error'); // add the error class to show red input
						$('#email-group').append('<div class="help-block">' + data.errors.email + '</div>'); // add the actual error message under our input
					}

					// handle errors for message ---------------
					if (data.errors.workNeeded) {
						$('#work-needed-group').addClass('has-error'); // add the error class to show red input
						$('#work-needed-group').append('<div class="help-block">' + data.errors.workNeeded + '</div>'); // add the actual error message under our input
					}

				} else {

					// ALL GOOD! just show the success message!
					$('form#appointmentForm').append('<div class="alert alert-success">' + data.processmessage + '</div>');
					$('form#appointmentForm button[type=submit]').hide(); // hide submit button
					$('form#appointmentForm').trigger("reset"); // clear form fields

					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				//console.log(data);
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});


});
