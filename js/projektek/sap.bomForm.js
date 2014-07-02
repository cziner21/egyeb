$(document).ready(function() {

	$("#typeSelector").change(function() {
		$("tr.f_tr").hide();
		var type = $(this).val();

		if (type == 1) {
			$("tr.f_amount").show();
		} else if (type == 2) {
			$("tr.f_amount_unit, tr.f_unit_price").show();
		} else if (type == 3) {
			$("tr.f_amount_unit, tr.f_unit_price, tr.f_material_ber").show();
		} else if (type == 4) {
			$("tr.f_material_ber, tr.f_material, tr.f_alak").show();
			$("input[name=alak]:first").attr('checked', true).change();
		}
	}).change();

	$("#amountUnitSelector").change(function() {
		$("#unitSelected").html($(this).val());
	}).change();

	$("input[name=alak]").change(function() {
		$("tr.f_alak_tr").hide();
		var type = $(this).val();

		if (type == 'hasab') {
			$("tr.f_alak_a, tr.f_alak_b, tr.f_alak_c").show();
		} else {
			$("tr.f_alak_r, tr.f_alak_m").show();
		}
	});


	$("#hozottChecked").change(function() {
		if($(this).is(':checked')) {
			$("tr.f_amount_unit, tr.f_material, tr.f_unit_price, tr.f_alak, tr.f_alak_tr").hide();
		} else {
			var type = $("#typeSelector").val();
			if (type == 3) {
				$("tr.f_amount_unit, tr.f_unit_price").show();
			} else if (type == 4) {
				$("tr.f_amount_unit, tr.f_material, tr.f_alak").show();
				$("input[name=alak]:first").attr('checked', true).change();
			}
		}
	}).change();


});
