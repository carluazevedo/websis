<?php $this->load->view('modelos/barra_nav'); ?>

<?php $this->load->view('modelos/modal/painel_registrar'); ?>
<?php $this->load->view('modelos/modal/painel_remover'); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="page-header">
					<h1><?php echo $titulo_pagina; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="active">
								<th style="width: 110px">DATA</th>
								<th style="width: 90px">ENTRADA</th>
								<th style="width: 90px">SAÍDA</th>
								<th style="width: 90px">ENTRADA</th>
								<th style="width: 90px">SAÍDA</th>
								<th>OBSERVAÇÕES</th>
								<th colspan="2">AÇÕES</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!$registros) : ?>

							<tr>
								<td class="text-center danger" colspan="8">Não há registros de ponto.</td>
							</tr>
							<?php else : ?>
								<?php foreach ($registros as $reg) : ?>

							<tr>
								<td><?php echo $this->registroponto_model->formata_data_mysql($reg->data); ?></td>
								<?php if ($reg->folga == 0) : ?>

								<td><?php echo $this->registroponto_model->formata_hora_mysql($reg->entrada_1); ?></td>
								<td><?php echo $this->registroponto_model->formata_hora_mysql($reg->saida_1); ?></td>
								<td><?php echo $this->registroponto_model->formata_hora_mysql($reg->entrada_2); ?></td>
								<td><?php echo $this->registroponto_model->formata_hora_mysql($reg->saida_2); ?></td>
								<?php elseif ($reg->folga == 1) : ?>

								<td class="text-center active" colspan="4"><strong>FOLGA</strong></td>
								<?php endif; ?>

								<td><?php echo $reg->observacoes; ?></td>
								<td class="acoes">
									<button type="button" class="btn btn-sm btn-success acao-editar" title="Editar" value="<?php echo $reg->id; ?>" onclick="editarRegistro(this)">
										<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
									</button>
								</td>
								<td class="acoes">
									<button type="button" class="btn btn-sm btn-danger acao-remover" title="Remover" value="<?php echo $reg->id; ?>" onclick="removerRegistro(this)">
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
								<td colspan="8"></td>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.table-responsive -->
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>