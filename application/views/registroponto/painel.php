<?php $this->load->view('modelos/barra_nav'); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="page-header">
					<h1><?php echo $titulo_pagina; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover small"><!-- table-bordered -->
						<thead>
							<tr class="active">
								<th>DATA</th>
								<th>FOLGA</th>
								<th>ENTRADA</th>
								<th>SAÍDA</th>
								<th>ENTRADA</th>
								<th>SAÍDA</th>
								<th>OBSERVAÇÕES</th>
								<th colspan="2">AÇÕES</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!$registros) : ?>
							<tr>
								<td class="text-center danger" colspan="8">Não há registros de viagens.</td>
							</tr>
							<?php else : ?>
								<?php foreach ($registros as $reg) : ?>
								<tr>
									<td><?php echo $reg->data; ?></td>
									<td><?php echo $reg->folga; ?></td>
									<td><?php echo $reg->entrada_1; ?></td>
									<td><?php echo $reg->saida_1; ?></td>
									<td><?php echo $reg->entrada_2; ?></td>
									<td><?php echo $reg->saida_2; ?></td>
									<td><?php echo $reg->observacoes; ?></td>
									<td class="acoes">
										<button type="button" class="btn btn-sm btn-success acao-editar" title="Editar" value="<?php echo $reg->id; ?>" onclick="editarViagem(this)">
											<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
										</button>
									</td>
									<td class="acoes">
										<button type="button" class="btn btn-sm btn-danger acao-remover" title="Remover" value="<?php echo $reg->id; ?>" onclick="removerViagem(this)">
											<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
										</button>
									</td>
								</tr>
								<?php endforeach; ?>
							<?php endif; ?>
						</tbody>
						<tfoot>
							<!-- Última linha em branco da tabela -->
							<tr>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.table-responsive -->
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>