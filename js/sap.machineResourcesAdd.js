$(document).ready(function() {

	$("#machineResourcesNewButton").button();
	var runAjax = false;


	$("#machineResourcesNewButton").click(function() {

		if (runAjax) { return false; }
		runAjax = true;

		$.ajax({
			type: 'post', timeout: 10000, url: 'ajax/machineResources.php?cmd=machineResourcesAddForm', dataType: 'json',
			success: function(json){
				if (json.status == 'success') {

					$("<div></div>").dialog({ title:"Új gépi erőforrás!",autoOpen:true,modal:true,minWidth:580,minHeight:440,
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

								var data = $('#machineResourcesAddForm').serialize();
								if (data) {
									$('#machineResourcesAddForm input').removeClass("error");
									$.ajax({
										type: 'post',timeout: 10000,url: 'ajax/machineResources.php?cmd=machineResourcesAddEdit',data: data,dataType: 'json',
										success: function(json){
											if (json.status == 'success') {
												$('#ajaxReply').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);
												$( 'html, body' ).animate( { scrollTop: 0 }, 0 );
												$thisdialog.dialog("close"); $thisdialog.remove();
												if (json.html) {
													$("#gepiEroforrasListazAjax").html(json.html);
												}
											} else {
												$('#ajaxReplyMRAddForm').removeClass().find("div.message").html(json.message);
												$('#ajaxReplyMRAddForm').addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200);
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
											$('#ajaxReplyMRAddForm').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);
											setTimeout(function() { runAjax = false; },1000);
										}
									});
								} else {
									runAjax = false;
									$("<div><p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>A művelet nem megengedett!</p></div>").dialog({ title:"Hiba!",
										close: function(event, ui) {
											$(this).remove();
										},autoOpen:true,width:"auto",modal:true,resizable:false,buttons: {"Bezárás": function() { $(this).dialog("close");  $(this).remove(); } } });
								}

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
