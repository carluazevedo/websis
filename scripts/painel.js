$(document).ready(function() {
	$('.acao-remover').click(function() {
		$('#modal-remover').modal('toggle');
	});
	$('.acao-registrar').click(function() {
		$('#modal-registrar').modal('toggle');
	});
	$('#data').mask('00/00/0000', {placeholder: '__/__/____'});
	$('#data').datepicker({
		assumeNearbyYear: 21,
		clearBtn: true,
		language: "pt-BR",
		todayBtn: "linked",
		todayHighlight: true
	});
	$('#entrada_1, #saida_1, #entrada_2, #saida_2').mask('00:00', {placeholder: '--:--'});
});

function editarRegistro(e)
{
	location.href = site_url+'registroponto/editar/'+e.value;
}

function removerRegistro(e)
{
	document.getElementsByTagName('button')['remover'].value = 'ok';
	document.forms['remover-registro'].setAttribute(
			'method',
			'post'
	);
	document.forms['remover-registro'].setAttribute(
			'action',
			site_url+'registroponto/remover/'+e.value
	);
}
