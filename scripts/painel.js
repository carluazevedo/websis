$(document).ready(function() {
	$('.acao-remover').click(function() {
		$('#modal-remover').modal('toggle');
	});
	$('.acao-registrar').click(function() {
		$('#modal-registrar').modal('toggle');
	});
});

function inserirLinhaTabela()
{
	t_length = document.querySelector('tbody tr').childElementCount;
	t_footer = document.querySelector('tfoot tr');

	for (t = 0; t < t_length; t++) {
		t_coluns = document.createElement('TD');
		t_footer.appendChild(t_coluns);
	}
}

inserirLinhaTabela();

function editarRegistro(e)
{
	location.href = site_url+'registroponto/editar/'+e.value;
}

function removerRegistro(e)
{
	document.getElementsByTagName('button')['remover'].value = 'ok';
	document.forms['remover-registro'].setAttribute(
			'method',
			'post'
	);
	document.forms['remover-registro'].setAttribute(
			'action',
			site_url+'registroponto/remover/'+e.value
	);
}
