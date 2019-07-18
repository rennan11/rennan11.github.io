$('.datepicker').each(function(){
	var picker = new Pikaday({
		field: this
	});
});
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});
