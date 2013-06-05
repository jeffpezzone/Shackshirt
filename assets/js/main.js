$('a#loginButton').click(function(event){
	//clear error message when link clicked to pop up login modal
	$('#loginErrorMessage').html('');
});

//login submit button clicked -- send AJAX request to login controller, validate_credentials method, to attempt to log in
$('button#loginSubmit').click(function(event){
	event.preventDefault();

	//clear error message
	$('#loginErrorMessage').html('');

	var username = $('#loginUsername').val();
	var password = $('#loginPassword').val();

	var req = $.ajax({
		type : 'POST',
		url  : 'index.php/login/validate_credentials',
		data: ({username: username, password: password})
	});
	req.done(function(data){
		if (data.success == false){
			$('#loginErrorMessage').html('<div class="text-error">' + data.message + '</p>');
		}
		else{
			//redirect to index page
			window.location = 'index.php';
		}
	});

});

$('a#registerButton').click(function(event){
	//clear error message when link clicked to pop up register modal
	$('#registerErrorMessage').html('');
});

//register submit button clicked -- send AJAX request to login controller, create_user method, to attempt to register a new user
$('button#registerSubmit').click(function(event){
	event.preventDefault();

	//clear error message
	$('#registerErrorMessage').html('');

	var first_name = $('#registerFirstName').val();
	var last_name = $('#registerLastName').val();
	var username  = $('#registerUsername').val();
	var email = $('#registerEmail').val();
	var password = $('#registerPassword').val();
	var password2 = $('#registerPassword2').val();

	var req = $.ajax({
		type : 'POST',
		url  : 'index.php/login/create_user',
		data:   ({first_name: first_name,
		                	last_name: last_name,
		            	username: username,
		            	email: email,
		            	password: password,
		            	password2: password2})
	});
	req.done(function(data){
		if (data.success == false){
			$('#registerErrorMessage').html('<div class="text-error">' + data.message + '</p>');
		}
		else{
			//redirect to index page
			window.location = 'index.php';
		}
	});
});

