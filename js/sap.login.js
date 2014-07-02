$(document).ready(function() {

	$('#loginForm input[type=submit]').button();

	if (!$('input.username').val()) {
		$('input.username').focus();
	} else if (!$('input.password').val()) {
		$('input.password').focus();
	}

	var runAjax = false;

	$('#loginForm').submit(function () {

		if (runAjax) {
			return false;
		}

		runAjax = true;

		var data = $('#loginForm').serialize();
		$.ajax({
			type: 'post',
			timeout: 10000,
			url: 'login.php',
			data: data,
			dataType: 'json',
			success: function(json){
				if (!$('input.username').val()) {
					$('input.username').focus();
				} else if (!$('input.password').val()) {
					$('input.password').focus();
				}
				if (json.status == 'success') {
					location.href = json.returnpage;
				} else {
					$('#ajaxReply').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);;
				}
				setTimeout(function() { runAjax = false; },1000);
			},
			error: function(request,error){
				if (error == 'timeout') {
					var error = '<b>Hiba!</b> Időtúllépés...';
				} else {
					var error = '<b>Hiba!</b> Hibakód: '+request.status;
				}
				$('#ajaxReply').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);;
				setTimeout(function() { runAjax = false; },1000);
			}
		});
		return false;
	});

});