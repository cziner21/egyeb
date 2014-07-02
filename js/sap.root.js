$(document).ready(function() {

	$('#ajaxLoader')
		.bind('ajaxStart', function() {
			$(this).show();
		})
		.bind('ajaxComplete', function() {
			$(this).hide();
		});


	jQuery.fn.resetForm = function() {
		return this.each(function() {
			jQuery(this).is('form') && this.reset();
		});
	};


	$.extend({
	  getUrlVars: function(){
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
		  hash = hashes[i].split('=');
		  vars.push(hash[0]);
		  vars[hash[0]] = hash[1];
		}
		return vars;
	  },
	  getUrlVar: function(name){
		return $.getUrlVars()[name];
	  }
	});


	$.datepicker.setDefaults( $.datepicker.regional[ "hu" ] );



	$("a.rBtoggle").each(function(){
		if ($(this).hasClass("ui-icon-triangle-1-s")) {
			$(this).parent().parent().siblings("div.content").hide();
		}
	});

	$("a.rBtoggle").live("click", function() {
		if ($(this).hasClass("cont-close")) {
			$(this).removeClass("cont-close").addClass("cont-open");
			$(this).parent().parent().siblings("div.content").slideUp();
		} else {
			$(this).addClass("cont-close").removeClass("cont-open");
			$(this).parent().parent().siblings("div.content").slideDown();
		}
		return false;
	})

	$("a.aRblock").live("click", function() {
		$(this).parent().parent().fadeOut();
		return false;
	});

	$("input, select, textarea").live("focus",function() {
		if ($(this).hasClass("error")) {
			$(this).removeClass("error");
		}
	});

	/* server time */

	if ($("#serverTime")[0]) {
		var serverDate=new Date(currenttime);
		function padLength(what){
			//return (what.toString().length==1)? "0"+what : what;
			return (what < 10)? "0"+what : what;
		}
		function displayTime(){
			serverDate.setSeconds(serverDate.getSeconds()+1);
			var timeString=padLength(serverDate.getHours())+":"+padLength(serverDate.getMinutes())+":"+padLength(serverDate.getSeconds());
			$("#serverTime")[0].innerHTML=timeString;
		}
		setInterval(function() {
			displayTime();
		}, 1000);
	}

});