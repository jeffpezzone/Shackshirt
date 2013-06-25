$('a#loginButton').click(function(event){
	//clear error message when link clicked to pop up login modal
	$('#loginErrorMessage').html('');
});

//login submit button clicked -- send AJAX request to login controller, validate_credentials method, to attempt to log in
$('button#loginSubmit').click(function(event){
	event.preventDefault();

	//clear error message
	$('#loginErrorMessage').html('');

	var email = $('#loginEmail').val();
	var password = $('#loginPassword').val();

	var req = $.ajax({
		type : 'POST',
		url  : $('body').data('baseurl') + 'login/validate_credentials',
		data: ({email: email, password: password})
	});
	req.done(function(data){
		if (data.success == false){
			$('#loginErrorMessage').html('<div class="text-error">' + data.message + '</p>');
		}
		else{
			//redirect to base url
			window.location = data.redirect;
		}
	});
	req.fail(function(){
		alert('fail');
	});

});

$('a#registerButton').click(function(event){
	//clear error message when link clicked to pop up register modal
	$('#registerErrorMessage').html('');
});

//register submit button clicked -- send AJAX request to login controller, create_user method, to attempt to register a new user
$('button#registerSubmit').click(function(event){
	event.preventDefault();

	$('#registerSubmit').button('loading');
	//clear error message
	$('#registerErrorMessage').html('');

	var email = $('#registerEmail').val();
	var password = $('#registerPassword').val();
	var password2 = $('#registerPassword2').val();

	var req = $.ajax({
		type : 'POST',
		//url  : 'index.php/login/create_user',
		url  : 'login/create_user',
		data:   ({email: email,
		            	password: password,
		            	password2: password2})
	});
	req.done(function(data){
		$('#registerSubmit').button('reset');
		if (data.success == false){
			$('#registerErrorMessage').html('<div class="text-error">' + data.message + '</p>');
		}
		else{

			//redirect to index page
			//window.location = 'index.php';
			$('#registerSubmit').css('display', 'none');
			$('#registerModal > .modal-body').html('Thank you! Please verify your account by clicking the link in the email we sent you.');
		}
	});
});

