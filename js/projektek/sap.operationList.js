$(document).ready(function() {

	$("input.checkBoxAll").change(function() {
		if ($(this).attr("checked")) {
			$("input.chkbox").attr("checked","checked");
			$("input.chkbox").parent().parent().addClass("selected");
		} else {
			$("input.chkbox").removeAttr("checked");
			$("input.chkbox").parent().parent().removeClass("selected");
		}
	});
	
	
	$("input.chkbox").change(function() {
		if ($(this).attr("checked")) {
			$(this).parent().parent().addClass("selected");
		} else {
			$(this).parent().parent().removeClass("selected");
		}
		if ($("input.chkbox").filter(":checked").length >= $("input.chkbox").length) {
			$("input.checkBoxAll").attr("checked","checked");
		} else {
			$("input.checkBoxAll").removeAttr("checked");
		}
	});

	var runAjax = false;

	$("#muveletekDeleteButton").button();

	
	$("#muveletekDeleteButton").click(function() {
		if ($("input.chkbox").filter(":checked").length > 0) {

			$("<div><p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>Biztos, hogy törlöd a kijelölteket?</p></div>").dialog({ title:"Figyelmeztetés!",autoOpen:true,width:"auto",modal:true,resizable:false,
				close: function(event, ui) {
					$(this).remove();
				},
				buttons: {
					"Törlés": function() {

						if (runAjax) { return false; }
						runAjax = true;

						var data = $('#operationForm').serialize();

						$.ajax({
							type: 'post', timeout: 10000, url: 'ajax/project.php?cmd=operationDelete', data: data, dataType: 'json',
							success: function(json){
								if (json.status == 'success') {
									$("input.chkbox").filter(":checked").parent().parent().fadeOut(function() { $(this).remove(); });
									$("#operationsTable").sortable("refreshPositions");
								} else {
								}
								$('#ajaxReplyOperationModal').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);
								setTimeout(function() { runAjax = false; },1000);
							},
							error: function(request,error){
								if (error == 'timeout') { var error = '<b>Hiba!</b> Időtúllépés...'; } else { var error = '<b>Hiba!</b> Hibakód: '+request.status; }
								$('#ajaxReplyOperationModal').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);
								setTimeout(function() { runAjax = false; },1000);
							}
						});

						$( 'html, body' ).animate( { scrollTop: 0 }, 0 );
						$(this).dialog("close"); $(this).remove();

						return false;
					},
					"Mégse": function() { $(this).dialog("close"); $(this).remove(); }
				}
			});

		} else {
			$("<div><p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>A törléshez legalább 1 sort kikell jelölni!</p></div>").dialog({ title:"Hiba!",
				close: function(event, ui) {
					$(this).remove();
				},autoOpen:true,width:"auto",modal:true,resizable:false,buttons: {"Bezárás": function() { $(this).dialog("close");  $(this).remove(); } } });
		}
	});

	var fixHelper = function(e, ui) {
		ui.children().each(function() {
			$(this).width($(this).width());
		});
		return ui;
	};


	$("#operationsTable" ).sortable({
		items: "tr.adat",
		axis: "y",
		helper: fixHelper,
		opacity: 0.9,
		placeholder: {
			element: function(currentItem) {
				return $("<tr class=\"place\"><td colspan=\"10\"><div class=\"place2\"></div></td></tr>")[0];
			},
			update: function(container, p) {
				return;
			}
		},
		stop: function(event, ui) {
			$.post('ajax/project.php?cmd=operationSort', $(this).sortable('serialize') ,
			function(json) {
				var i = 0;
				$("#operationsTable tr.adat").each(function() {
					i++;
					$(this).find('td').eq(0)[0].innerHTML=''+i+'';
				});
			},
			'json');
		}

	}).disableSelection();

});