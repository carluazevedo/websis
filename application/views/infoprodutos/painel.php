<?php $this->load->view('modelos/barra_nav'); ?>

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
								<th style="width: 70px">ID</th>
								<th>PRODUTO</th>
								<th>PRODUTOR</th>
								<th>SEGMENTO</th>
								<th>HOTLEADS</th>
								<th>AFILIADO</th>
								<th>OBSERVAÇÕES</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!$produtos) : ?>

							<tr>
								<td class="text-center danger" colspan="7">Não há registros.</td>
							</tr>
							<?php else : ?>
								<?php foreach ($produtos as $prod) : ?>

							<tr>
								<td><?php echo $prod->id; ?></td>
								<td><?php echo $prod->produto; ?></td>
								<td><?php echo $prod->produtor; ?></td>
								<td><?php echo $prod->segmento; ?></td>
								<td><?php echo ($prod->hotleads == 1) ? '<strong class="text-success">SIM</strong>' : '<strong class="text-danger">NÃO</strong>' ; ?></td>
								<td><?php echo ($prod->afiliado == 1) ? '<strong class="text-success">SIM</strong>' : '<strong class="text-danger">NÃO</strong>' ; ?></td>
								<td><?php echo $prod->observacoes; ?></td>
							</tr>
								<?php endforeach; ?>
							<?php endif; ?>

						</tbody>
						<tfoot>
							<!-- Última linha em branco da tabela -->
							<tr>
								<td colspan="7"></td>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.table-responsive -->

				<div class="page-header">
					<h1><?php echo $titulo_pagina.' - Links'; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="active">
								<th style="width: 70px">ID</th>
								<th>PRODUTO</th>
								<th>DESCRIÇÃO</th>
								<th>LINK</th>
								<th>DESTINO</th>
								<th>TIPO</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!$links) : ?>

							<tr>
								<td class="text-center danger" colspan="6">Não há registros.</td>
							</tr>
							<?php else : ?>
								<?php foreach ($links as $lnks) : ?>

							<tr>
								<td><?php echo $lnks->id; ?></td>
								<td><?php echo $lnks->id_produto; ?></td>
								<td><?php echo $lnks->descricao; ?></td>
								<td><input type="text" class="form-control input-sm" value="<?php echo $lnks->link; ?>" readonly ></td>
								<td><input type="text" class="form-control input-sm" value="<?php echo $lnks->destino; ?>" readonly ></td>
								<td><?php echo $lnks->tipo; ?></td>
							</tr>
								<?php endforeach; ?>
							<?php endif; ?>

						</tbody>
						<tfoot>
							<!-- Última linha em branco da tabela -->
							<tr>
								<td colspan="6"></td>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.table-responsive -->
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
