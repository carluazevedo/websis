$(document).ready(function() {
	document.title = document.title + ' | ' + titulo_receita.innerHTML;
	$('#ingr_principais li').click(function() {
		$(this).css("text-decoration","line-through");
	});
	$('#ingr_opcionais li').click(function() {
		$(this).css("text-decoration","line-through");
	});
});
