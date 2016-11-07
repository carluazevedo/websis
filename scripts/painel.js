$(document).ready(function() {
	$('.acao-remover').click(function() {
		$('#modal-remover').modal('toggle');
	});
	$('.acao-registrar').click(function() {
		$('#modal-registrar').modal('toggle');
	});
	$('#data').datepicker({
		todayBtn: "linked",
		language: "pt-BR"
	});
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
