var el = document.querySelectorAll(".status");

for (i = 0; i < el.length; i++) {
	switch (el[i].innerText) {
		case 'PÁTIO/DOCA':
			el[i].style = 'background: #92d050';
			break;
		case 'CHECK-OUT':
			el[i].style = 'background: #8eaadc';
			break;
		case 'LIBERADO ANTES DA OTM':
			el[i].style = 'background: #ffff00';
			break;
		case 'LIBERADO SEM ISCA/MONITORAMENTO/INFOLOG':
			el[i].style = 'background: #ff0000';
			break;
		case 'SOLICITAR ESCOLTA':
			el[i].style = 'background: #ffc000';
			break;
		case 'AGUARDANDO CHECK-LIST':
			el[i].style = 'background: #bfbfbf';
			break;
	}
}

$('.resultados').click(function() {
	$('#modal-resultados').modal('toggle');
	ajaxPostResponse(site_url+'gestaocargas/buscar/'+base_dados, this.id, resultado);
	function resultado(callback)
	{
		document.querySelector('#modal-resultados .modal-body').innerHTML = callback;
	}
});
