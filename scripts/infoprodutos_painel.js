$(document).ready(function() {
	$('input[type=text]').keydown(function(e) {
		return e.which !== 13;
	});
	$('input[type=radio]').keydown(function(e) {
		return e.which !== 13;
	});
	$('.acao-gerar').click(function() {
		$('#modal-infoprod-gerar').modal('toggle');
	});
});
