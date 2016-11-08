$(document).ready(function() {
	$('input[type=text]').keydown(function(e) {
		return e.which !== 13;
	});
	$('input[type=radio]').keydown(function(e) {
		return e.which !== 13;
	});
	$('.acao-registrar').click(function() {
		$('#modal-registrar').modal('toggle');
	});
	$('.acao-editar').click(function() {
		$('#modal-editar').modal('toggle');
	});
	$('.acao-remover').click(function() {
		$('#modal-remover').modal('toggle');
	});
	$('#data_registrar, #data_editar').mask('00/00/0000', {placeholder: '__/__/____'});
	$('#data_registrar, #data_editar').datepicker({
		assumeNearbyYear: 21,
		clearBtn: true,
		language: "pt-BR",
		todayBtn: "linked",
		todayHighlight: true
	});
	$('#entrada_1_registrar, #saida_1_registrar, #entrada_2_registrar, #saida_2_registrar').mask('00:00', {placeholder: '--:--'});
	$('#entrada_1_editar, #saida_1_editar, #entrada_2_editar, #saida_2_editar').mask('00:00', {placeholder: '--:--'});
});

function registrarPonto()
{
	document.getElementsByTagName('button')['registrar'].value = 'ok';
	document.forms['registrar-ponto'].setAttribute(
			'method',
			'post'
	);
	document.forms['registrar-ponto'].setAttribute(
			'action',
			site_url+'registroponto/registrar'
	);
}

function editarRegistro(e)
{
	document.getElementsByTagName('button')['editar'].value = e.value;
	document.forms['editar-registro'].setAttribute(
			'method',
			'post'
	);
	document.forms['editar-registro'].setAttribute(
			'action',
			site_url+'registroponto/editar'
	);
	ajaxPostResponse(site_url+'registroponto/buscar', e.value, resultado);
	function resultado(callback)
	{
		dados_registro = JSON.parse(callback);
		data_editar.value = dados_registro.data;		
		entrada_1_editar.value = dados_registro.entrada_1;
		saida_1_editar.value = dados_registro.saida_1;
		entrada_2_editar.value = dados_registro.entrada_2;	
		saida_2_editar.value = dados_registro.saida_2;
		observacoes_editar.value = dados_registro.observacoes;
	}
}

function removerRegistro(e)
{
	document.getElementsByTagName('button')['remover'].value = e.value;
	document.forms['remover-registro'].setAttribute(
			'method',
			'post'
	);
	document.forms['remover-registro'].setAttribute(
			'action',
			site_url+'registroponto/remover'
	);
}

observacoes_registrar.style.textTransform = 'uppercase';
observacoes_editar.style.textTransform = 'uppercase';

document.forms['registrar-ponto'].addEventListener('submit', function() {
	observacoes_registrar.value = observacoes_registrar.value.toUpperCase();
});

document.forms['editar-registro'].addEventListener('submit', function() {
	observacoes_editar.value = observacoes_editar.value.toUpperCase();
});
