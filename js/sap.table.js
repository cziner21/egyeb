$(document).ready(function() {

	$("a.sort").click(function() {

		var $this = $(this);
		var $rel = $this.attr("rel");

		var $ajaxContainers = $('div.ajaxContainer');

		$.ajax({
			beforeSend: function () {
				$ajaxContainers.find("table.other").addClass("shadow");
				$ajaxContainers.find("div.ajax_loader").show();
			},
			complete: function () {
				$ajaxContainers.find("table.other").removeClass("shadow");
				$ajaxContainers.find("div.ajax_loader").hide();
			},
			type: 'get',
			timeout: 10000,
			url: 'ajax/table.php',
			data: "rel="+$rel,
			dataType: 'json',
			success: function(json){
				if (json.status == 'success') {
					if (json.html) {
						$this.closest("div.ajaxContainer").html(json.html);
					}
				} else {
					$('#ajaxReply').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);;
				}
				setTimeout(function() { runAjax = false; },1000);
			},
			error: function(request,error,thrownError) {
				alert(request.responseText);
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

/*
	$('div.ajaxContainer')
		.bind('ajaxStart', function() {
			$(this).find("table.other").addClass("shadow");
			$(this).find("div.ajax_loader").show();
		})
		.bind('ajaxComplete', function() {
			$(this).find("table.other").removeClass("shadow");
			$(this).find("div.ajax_loader").hide();
		});
*/

	$("div.pager a").click(function() {
		
		var $this = $(this);
		var $other = $("#pagerSet").html();
		var $rel = $other+$this.attr("rel");

		var $ajaxContainers = $('div.ajaxContainer');

		$.ajax({
			beforeSend: function () {
				$ajaxContainers.find("table.other").addClass("shadow");
				$ajaxContainers.find("div.ajax_loader").show();
			},
			complete: function () {
				$ajaxContainers.find("table.other").removeClass("shadow");
				$ajaxContainers.find("div.ajax_loader").hide();
			},
			type: 'get',
			timeout: 10000,
			url: 'ajax/table.php',
			data: "rel="+$rel,
			dataType: 'json',
			success: function(json){
				if (json.status == 'success') {
					if (json.html) {
						$this.closest("div.ajaxContainer").html(json.html);
					}
				} else {
					$('#ajaxReply').removeClass().addClass('sMessage bra margin '+json.status).fadeOut(200).fadeIn(200).find("div.message").html(json.message);;
				}
				setTimeout(function() { runAjax = false; },1000);
			},
			error: function(request,error,thrownError) {
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