$(document).ready(function() {

	$("#szamlaMegtekintesButton").button();

	
	$("#szamlaMegtekintesButton").click(function() {

		var szamla_link = $("#szamlaLink")[0].innerHTML;
		szamla_link = szamla_link.replace('&amp;','&');
		//alert(szamla_link);
		window.open(szamla_link,"Szamla","menubar=yes,width=800,height=700,toolbar=no");
	
	});


});