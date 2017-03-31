function buscarCurriculo(e)
{
	ajaxPostResponse(site_url+'curriculos/buscar', e.hash, resultado);
	function resultado(callback)
	{
		document.querySelector(e.hash).innerHTML = callback;
	}
}

/**
 * Define o primeiro currículo a ser exibido
 */
document.onload = buscarCurriculo(document.querySelector('a[href="#carlu"]'));

/**
 * Exibe o currículo ao clicar na aba
 */
$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
	buscarCurriculo(this);
});

function ocultarElemento()
{
	var self = this;
	this.elemento = '';
	this.alvo = '';
	this.texto = '';
	this.classe = '';
	this.executar = function() {
		var elemento = document.getElementById(this.elemento);
		var alvo = document.getElementById(this.alvo);
		elemento.addEventListener('change', function() {
			if (elemento.checked == true) {
				alvo.hidden = true;
				elemento.nextElementSibling.innerHTML = self.texto[0];
				elemento.parentNode.className = self.classe[0];
			} else if (elemento.checked == false) {
				alvo.hidden = false;
				elemento.nextElementSibling.innerHTML = self.texto[1];
				elemento.parentNode.className = self.classe[1];
			}
		});
	}
}

var ocultarResumo = new ocultarElemento();
ocultarResumo.elemento = 'ocultar_resumo';
ocultarResumo.alvo = 'resumo';
ocultarResumo.texto = ["MOSTRAR RESUMO", "OCULTAR"];
ocultarResumo.classe = ["hidden-print", "pull-right hidden-print"];
ocultarResumo.executar();
