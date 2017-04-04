﻿document.title = document.title + ' | ' + titulo_receita.innerHTML;

var id_receita = location.href.match(/\d+$/i);

document.getElementById('rec'+id_receita[0]).selected = true;
document.getElementById('rec'+id_receita[0]).value = '';

var principais = document.querySelectorAll('#ingr_principais li'),
	opcionais = document.querySelectorAll('#ingr_opcionais li');

for (i = 0; i < principais.length; i++) {
	principais[i].addEventListener('click', function() {
		if (this.style.textDecoration == '') {
			this.style.textDecoration = 'line-through';
			this.style.listStyleType = 'circle';
		} else if (this.style.textDecoration != '') {
			this.style.textDecoration = '';
			this.style.listStyleType = '';
		}
	});
}

for (i = 0; i < opcionais.length; i++) {
	opcionais[i].addEventListener('click', function() {
		if (this.style.textDecoration == '') {
			this.style.textDecoration = 'line-through';
			this.style.listStyleType = 'circle';
		} else if (this.style.textDecoration != '') {
			this.style.textDecoration = '';
			this.style.listStyleType = '';
		}
	});
}
