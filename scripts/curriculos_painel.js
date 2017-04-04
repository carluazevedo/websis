﻿/**
 * Variáveis de uso da função 'buscarCurriculo'
 */
var id,
	id_anterior;

function buscarCurriculo(e)
{
	id = e.hash;
	if (id_anterior != undefined) document.querySelector(id_anterior).innerHTML = '';
	ajaxPostResponse(site_url+'curriculos/buscar', id, resultado);
	function resultado(callback)
	{
		document.querySelector(id).innerHTML = callback;
	}
	id_anterior = id;
	document.title = e.getAttribute('data-nome');
}

/**
 * Define o primeiro currículo a ser exibido
 */
document.onload = buscarCurriculo(document.querySelector('a[href="#carlu"]'));

/**
 * Exibe o currículo ao clicar na aba
 */
$('a[data-toggle="tab"]').on('shown.bs.tab', function() {
	buscarCurriculo(this);
});

function ocultarElemento(e, a)
{
	var alvo = document.getElementById(a),
		texto = e.getAttribute('data-ocultar-elemento');
	if (e.checked == true) {
		alvo.hidden = true;
		e.nextElementSibling.innerHTML = 'MOSTRAR '+texto;
		e.parentNode.setAttribute('class', 'hidden-print');
	} else if (e.checked == false) {
		alvo.hidden = false;
		e.nextElementSibling.innerHTML = 'OCULTAR';
		e.parentNode.setAttribute('class', 'pull-right hidden-print');
	}
}
