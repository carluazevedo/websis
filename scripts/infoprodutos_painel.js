$(document).ready(function() {
	$('input[type=text]').keydown(function(e) {
		return e.which !== 13;
	});
	$('input[type=radio]').keydown(function(e) {
		return e.which !== 13;
	});
	$('.acao-gerar').click(function() {
		$('#modal-infoprod-gerar').modal('toggle');
		var d_camp = document.getElementById('camp'+this.value).children;
		/* Método atual (incompatível com navegadores antigos)
		Array.from(d_camp).forEach(dadosCampanha); */
		/* Método anterior (compatível com navegadores antigos) */
		Array.prototype.forEach.call(d_camp, dadosCampanha);
	});
	$('#modal-infoprod-gerar').on('shown.bs.modal', function() {
		prefixo1.focus();
	});
});

var camp = [];
function dadosCampanha(e) {
	camp.push(e.innerHTML);
}

prefixo1.addEventListener('focus', gerarLink);
prefixo2.addEventListener('focus', gerarLink);
function gerarLink()
{
	l_camp = camp[1]+this.value+
		'src='+camp[2]+
		'|'+camp[3]+
		'|'+camp[4]+
		'|'+camp[5]+
		'|'+camp[6]+
		'|'+camp[7];
	link_gerado.href = l_camp;
	link_gerado.innerHTML = l_camp;
}
