$(document).ready(function() {
	$('input[type=text]').keydown(function(e) {
		return e.which !== 13;
	});
	$('input[type=radio]').keydown(function(e) {
		return e.which !== 13;
	});
	$('.acao-gerar').click(function() {
		$('#modal-infoprod-gerar').modal('toggle');
		linha.value = this.id;
	});
	$('#modal-infoprod-gerar').on('shown.bs.modal', function() {
		prefixo1.focus();
	});
});

prefixo1.addEventListener('focus', obterPrefixo);
prefixo2.addEventListener('focus', obterPrefixo);

function obterPrefixo()
{
	prefixo.value = this.value;
	link_gerado.innerHTML = document.querySelector('#campanha'+linha.value).children[2].innerHTML+
		prefixo.value+
		'src='+
		document.querySelector('#campanha'+linha.value).children[3].innerHTML+'|'+
		document.querySelector('#campanha'+linha.value).children[4].innerHTML+'|'+
		document.querySelector('#campanha'+linha.value).children[5].innerHTML+'|'+
		document.querySelector('#campanha'+linha.value).children[6].innerHTML+'|'+
		document.querySelector('#campanha'+linha.value).children[7].innerHTML;
}
