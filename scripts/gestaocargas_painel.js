var nl = document.querySelectorAll(".status");

for (i = 0; i < nl.length; i++) {
	switch (nl[i].innerText) {
		case 'PÁTIO/DOCA':
			nl[i].style = 'background: #92d050';
			break;
		case 'CHECK-OUT':
			nl[i].style = 'background: #8eaadc';
			break;
		case 'LIBERADO ANTES DA OTM':
			nl[i].style = 'background: #ffff00';
			break;
		case 'LIBERADO SEM ISCA/MONITORAMENTO/INFOLOG':
			nl[i].style = 'background: #ff0000';
			break;
		case 'SOLICITAR ESCOLTA':
			nl[i].style = 'background: #ffc000';
			break;
		case 'AGUARDANDO CHECK-LIST':
			nl[i].style = 'background: #bfbfbf';
			break;
	}
}