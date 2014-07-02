$(document).ready(function() {


	$("#accessNewButton").button();
	var runAjax = false;

	$("#accessNewButton").click(function() {

		if (runAjax) { return false; }
		runAjax = true;

		$.ajax({
			type: 'post', timeout: 10000, url: 'ajax/access.php?cmd=userAddForm', dataType: 'json',
			success: function(json){
				if (json.status == 'success') {

					$("<div></div>").dialog({ title:"Új hozzáférés!",autoOpen:true,width:700,modal:true,minWidth:700,minHeight:500,
						close: function(event, ui) {
							$(this).remove();
						},
						open: function() {
							$(this).html(json.html);
						},
						buttons: {
							"Létrehozás": function() {

								if (runAjax) { return false; }
								runAjax = true;

								$thisdialog = $(this);

								var data = $('#userAddForm').serialize();
								$('#userAddForm input').removeClass("error");
								$.ajax({
									type: 'post',timeout: 10000,url: 'ajax/access.php?cmd=userAddEdit',data: data,dataType: 'json',
									success: function(json){
										if (json.status == 'success') {
											$('#ajaxReply').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);
											$( 'html, body' ).animate( { scrollTop: 0 }, 0 );
											$thisdialog.dialog("close"); $thisdialog.remove();
											if (json.html) {
												$("#hozzaferesListazAjax").html(json.html);
											}
										} else {
											$('#ajaxReplyUserAddForm').removeClass().find("div.message").html(json.message);
											$('#ajaxReplyUserAddForm').addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200);
											var items = [];
											if (json.errorclass) {
												$.each(json.errorclass, function(key, val) {
													$(val).addClass('error').addClass('error');
												});
											}
										}
										setTimeout(function() { runAjax = false; },1000);
									},
									error: function(request,error){
										if (error == 'timeout') { var error = '<b>Hiba!</b> Időtúllépés...'; } else { var error = '<b>Hiba!</b> Hibakód: '+request.status; }
										$('#ajaxReplyUserAddForm').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);
										setTimeout(function() { runAjax = false; },1000);
									}
								});

								return false;
							},
							"Mégse": function() { $(this).dialog("close"); $(this).remove(); }
						}
					});

				} else {
					$('#ajaxReply').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);
				}
				setTimeout(function() { runAjax = false; },1000);
			},
			error: function(request,error){
				if (error == 'timeout') { var error = '<b>Hiba!</b> Időtúllépés...'; } else { var error = '<b>Hiba!</b> Hibakód: '+request.status; }
				$('#ajaxReply').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);
				setTimeout(function() { runAjax = false; },1000);
			}
		});

		return false;

	});

});
