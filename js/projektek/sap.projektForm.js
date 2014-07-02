$(document).ready(function() {

	$('label').inFieldLabels({
	  fadeOpacity: 0.4,
	  fadeDuration: 0
	});

	
	$("span.fastSelect").live("click",function() {
		$(this).prev().attr("checked","checked");
		$(this).prev().addClass("checkedon");
		$(this).addClass("checkedon");
		$("#searchCustomer").val($(this).children().html());
		$("#megrendelokLista input").not(".checkedon").remove();
		$("#megrendelokLista span").not(".checkedon").remove();
		$("#megrendelokLista br").not(".checkedon").remove();
	});

	var order_date = $("#orderDate").val();
	var dead_date = $("#deadDate").val();

	var dates = $( "#orderDateDisplay, #deadDateDisplay" ).datepicker({
		dateFormat: 'yy. MM dd. (DD)',
		showAnim: 'slideDown',
		altFormat: '@',
		onSelect: function( selectedDate ) {
			var option = this.id == "orderDateDisplay" ? "minDate" : "maxDate",
				instance = $( this ).data( "datepicker" ),
				date = $.datepicker.parseDate(
					instance.settings.dateFormat ||
					$.datepicker._defaults.dateFormat,
					selectedDate, instance.settings );
			dates.not( this ).datepicker( "option", option, date );
			/* fix date, no milisecundum. */
			//$("#orderDate").val($('#orderDate').val()/1000);
			//$("#deadDate").val($('#deadDate').val()/1000);
			// server oldaon, 1000el osztani kell!

			/*
			var start = new Date($("#orderDateDisplay").datepicker( "getDate" ));
			var end = new Date($("#deadDateDisplay").datepicker( "getDate" ));
			var diff = new Date(end - start);
			var days = diff/1000/60/60/24;
			if (days >= 0) { 
				alert(days);
			}
			*/

		}
	});

	$( "#orderDateDisplay" ).datepicker("option", "altField", '#orderDate');
	$( "#deadDateDisplay" ).datepicker("option", "altField", '#deadDate');

	$("#ajaxTable").val($.getUrlVar('page'));

	var run = false;
	var $megrendelokLista = $("#megrendelokLista");

	$("#searchCustomer").keyup(function() {
		$this = $(this);

		/*if (runAjax) { return false; }
		runAjax = true;*/

		if (run) {
		} else {
			run = true;
			var t = setTimeout(function() {

				if ($this.val()) {
					$.ajax({
						beforeSend: function () {
							//$megrendelokLista.html("<img src=\"themes/images/ajax-loader_gray.gif\" alt=\"Betöltés...\">");
						},
						complete: function () {
							//setTimeout(function() { runAjax = false; },500);
						},
						type: 'post', timeout: 10000, url: 'ajax/customer.php?cmd=customerList', data: "search="+$this.val(), dataType: 'json',
						success: function(json){
							$("#megrendelokLista").html(json.html);
						},
					});
				}

				run = false;
			},200);
		}
	});


});
