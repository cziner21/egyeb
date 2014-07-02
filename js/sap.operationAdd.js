$(document).ready(function() {

	$("#operationNewButton").button();
	var runAjax = false;


	$("#operationNewButton").click(function() {

		if (runAjax) { return false; }
		runAjax = true;

		$.ajax({
			type: 'post', timeout: 10000, url: 'ajax/operation.php?cmd=operationAddForm', dataType: 'json',
			success: function(json){
				if (json.status == 'success') {

					$("<div>"+json.html+"</div>").dialog({ title:"Új művelet!",autoOpen:true,width:480,modal:true,minWidth:480,minHeight:300,
						close: function(event, ui) {
							$(this).remove();
						},
						buttons: {
							"Létrehozás": function() {

								if (runAjax) { return false; }
								runAjax = true;

								$thisdialog = $(this);

								var data = $('#operationAddForm').serialize();
								$('#operationAddForm input').removeClass("error");
								$.ajax({
									type: 'post',timeout: 10000,url: 'ajax/operation.php?cmd=operationAddEdit',data: data,dataType: 'json',
									success: function(json){
										if (json.status == 'success') {
											$('#ajaxReply').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);
											$( 'html, body' ).animate( { scrollTop: 0 }, 0 );
											$thisdialog.dialog("close"); $thisdialog.remove();
											if (json.html) {
												$("#muveletekListazAjax").html(json.html);
											}
										} else {
											$('#ajaxReplyOperationAddForm').removeClass().find("div.message").html(json.message);
											$('#ajaxReplyOperationAddForm').addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200);
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
										$('#ajaxReplyOperationAddForm').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);
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


	
	$("select.operationChange").live("change",function() {
		$this = $(this);

		//if ($this.val() == "automated") {
		//	$this.parent().parent().siblings("tr.operationMachine").hide();
		//} else if ($this.val() == "personal") {
		//	$this.parent().parent().siblings("tr.operationMachine").show();
		//}
	});
	

});
