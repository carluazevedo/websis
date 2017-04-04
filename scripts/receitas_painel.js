document.title = document.title + ' | ' + titulo_receita.innerHTML;

var principais = document.querySelectorAll('#ingr_principais li');
var opcionais = document.querySelectorAll('#ingr_opcionais li');

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
