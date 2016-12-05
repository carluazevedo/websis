<?php $this->load->view('modelos/barra_nav'); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<!-- Produtos -->
				<div class="page-header">
					<nav>
						<ul class="nav nav-pills pull-right">
							<li role="presentation" class="active">
								<a href="#" class="registrar-produto" onclick="registrarProduto()">Registrar</a>
							</li>
						</ul>
					</nav>
					<h1><?php echo 'Produtos'; ?></h1>
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
				</div><!-- /Produtos -->

				<!-- Links -->
				<div class="page-header">
					<nav>
						<ul class="nav nav-pills pull-right">
							<li role="presentation" class="active">
								<a href="#" class="registrar-link" onclick="registrarLink()">Registrar</a>
							</li>
						</ul>
					</nav>
					<h1><?php echo 'Links'; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="active">
								<th style="width: 40px">ID</th>
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
								<td><?php echo $this->infoprodutos_model->buscar_registro('infoprod', 'id', $lnks->id_produto)->produto; ?></td>
								<td><?php echo $lnks->descricao; ?></td>
								<td><input type="button" class="btn btn-default btn-block" style="text-align: left" value="<?php echo $lnks->link; ?>"></td>
								<td><input type="button" class="btn btn-default btn-block" style="text-align: left" value="<?php echo $lnks->destino; ?>"></td>
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
				</div><!-- Links -->

				<!-- Campanhas -->
				<div class="page-header">
					<nav>
						<ul class="nav nav-pills pull-right">
							<li role="presentation" class="active">
								<a href="#" class="registrar-campanha" onclick="registrarCampanha()">Registrar</a>
							</li>
						</ul>
					</nav>
					<h1><?php echo 'Campanhas'; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="active">
								<th style="width: 40px">ID</th>
								<th>PRODUTO</th>
								<th>DATA</th>
								<th>LINK</th>
								<th>PLATAFORMA</th>
								<th>MÉTODO</th>
								<th>MÍDIA</th>
								<th>ID MÍDIA</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!$campanhas) : ?>

							<tr>
								<td class="text-center danger" colspan="8">Não há registros.</td>
							</tr>
							<?php else : ?>
								<?php foreach ($campanhas as $camp) : ?>

							<tr>
								<td><?php echo $camp->id; ?></td>
								<td><?php echo $this->infoprodutos_model->buscar_registro('infoprod', 'id', $camp->id_produto)->produto; ?></td>
								<td><?php echo $this->infoprodutos_model->formata_data($camp->data); ?></td>
								<td><?php echo $this->infoprodutos_model->buscar_registro('infoprod_links', 'id', $camp->link)->link; ?></td>
								<td><?php echo $camp->plataforma; ?></td>
								<td><?php echo $camp->metodo; ?></td>
								<td><?php echo $camp->midia; ?></td>
								<td><?php echo $camp->id_midia; ?></td>
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
				</div><!-- /Campanhas -->

				<!-- Mídias -->
				<div class="page-header">
					<nav>
						<ul class="nav nav-pills pull-right">
							<li role="presentation" class="active">
								<a href="#" class="registrar-midia" onclick="registrarMidia()">Registrar</a>
							</li>
						</ul>
					</nav>
					<h1><?php echo 'Mídias'; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover">
						<thead>
							<tr class="active">
								<th style="width: 40px">ID</th>
								<th>PRODUTO</th>
								<th>ID MÍDIA</th>
								<th>DESCRIÇÃO</th>
								<th>TIPO</th>
								<th>DIMENSÕES</th>
								<th>MÍDIA</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!$midias) : ?>

							<tr>
								<td class="text-center danger" colspan="7">Não há registros.</td>
							</tr>
							<?php else : ?>
								<?php foreach ($midias as $mid) : ?>

							<tr>
								<td><?php echo $mid->id; ?></td>
								<td><?php echo $this->infoprodutos_model->buscar_registro('infoprod', 'id', $mid->id_produto)->produto; ?></td>
								<td><?php echo $mid->id_midia; ?></td>
								<td><?php echo $mid->descricao; ?></td>
								<td><?php echo $mid->tipo; ?></td>
								<td><?php echo $mid->dimensoes; ?></td>
								<td><input type="button" class="btn btn-default btn-block" style="text-align: left" value="<?php echo $mid->midia; ?>"></td>
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
				</div><!-- /Mídias -->

			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
