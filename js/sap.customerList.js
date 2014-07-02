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

	$("#customerDeleteButton").button();

	
	$("#customerDeleteButton").click(function() {
		if ($("input.chkbox").filter(":checked").length > 0) {

			$("<div><p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span>Biztos, hogy törlöd a kijelölteket?</p></div>").dialog({ title:"Figyelmeztetés!",autoOpen:true,width:"auto",modal:true,resizable:false,
				close: function(event, ui) {
					$(this).remove();
				},
				buttons: {
					"Törlés": function() {

						if (runAjax) { return false; }
						runAjax = true;

						var data = $('#customerForm').serialize();

						$.ajax({
							type: 'post', timeout: 10000, url: 'ajax/customer.php?cmd=customerDelete', data: data, dataType: 'json',
							success: function(json){
								if (json.status == 'success') {
									$("input.chkbox").filter(":checked").parent().parent().fadeOut(function() { $(this).remove(); });
								} else {
								}
								$('#ajaxReply').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);
								setTimeout(function() { runAjax = false; },1000);
							},
							error: function(request,error){
								if (error == 'timeout') { var error = '<b>Hiba!</b> Időtúllépés...'; } else { var error = '<b>Hiba!</b> Hibakód: '+request.status; }
								$('#ajaxReply').removeClass().addClass('sMessage bra margin error').fadeOut(200).fadeIn(200).find("div.message").html(error);
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

	
	$("#customerForm a.customerInformation").click(function() {

		if (runAjax) { return false; }
		runAjax = true;

		$.ajax({
			type: 'post', timeout: 10000, url: 'ajax/customer.php?cmd=customerData', data: { cid: $(this).attr("rel") }, dataType: 'json',
			success: function(json){
				if (json.status == 'success') {		

					$("<div></div>").dialog({ title:""+json.title,autoOpen:true,width:600,modal:false,minWidth:600,minHeight:400,
						close: function(event, ui) {
							$(this).remove();
						},
						open: function() {
							$(this).html(json.html);
						},
						buttons: {
							"Bezárás": function() {
								$(this).dialog("close");  $(this).remove();
							}
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
	
	var oldHtml = null;
	$('.customer-form td:nth-child(2)[data-name]').live('dblclick', function() {
		var edited = $('.customer-form').find('.edited');
		if (edited.length > 0 && oldHtml !== null) {
			edited.html(oldHtml).removeClass('edited');
			oldHtml = null;
			return false;
		}

		var elem    = $(this);
		elem.addClass('edited');
		oldHtml = $(this).html();

		var input;
		
		if (elem.data('values')) {
			input = $('<select name="live"></select>');
			var data = elem.data('values');
			input.append('<option value=""></option>');
			data.forEach(function(item, index) {
				input.append('<option value="' + item.value + '">' + item.label + '</option>')
			});
		} else {
			input = $('<input type="text" value="' + elem.val() +'" />');
			input.val(elem.html());
		}

		elem.html(input);
		input.focus();
		
		if (!input.is('select')) {
			$(input).keydown(function(e) {
				if (e.keyCode == 13) { // enter
					quickSave($(this).parent('td').attr('data-name'), $(this).val(), $(this).parents('table').attr('data-cid'));
				}
			});
		} else {
			$(input).change(function() {
				quickSave($(this).parent('td').attr('data-name'), $(this).val(), $(this).parents('table').attr('data-cid'));
			});
		}

		$(input).bind('blur', function() {
			$(elem).html(oldHtml);
			return false;
		});
	});
	
	function quickSave(name, value, customerID) {
		$.get('ajax/customer.php?cmd=quickSave', {
			name  : name,
			value : value,
			cid   : customerID
		}, function(data, textStatus, jqXHR) {
			var cell, value;
            if (typeof data.data.name !== 'undefined' && typeof data.data.value !== 'undefined') {
            	cell  = $('.customer-form td[data-name="' + data.data.name + '"]');
            	value = data.data.value; 
            } else {
            	cell  = $('.customer-form td.edited:first');
            	value = oldHtml; 
            }
            cell.html(value);

            cell.removeClass('edited');
            oldHtml = null;
        }, 'json').fail(function(e) {
            alert(e.responseText);
        });
	}

});