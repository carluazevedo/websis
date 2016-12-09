<?php $this->load->view('modelos/barra_nav'); ?>

<?php $this->load->view('infoprodutos/painel_modal_gerar'); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<!-- Produtos -->
				<div class="page-header">
					<nav>
						<ul class="nav nav-pills pull-right">
							<li role="presentation" class="active">
								<a href="javascript:void(0)" id="registrar-produto" onclick="registrarProduto()">Registrar</a>
							</li>
						</ul>
					</nav>
					<h1><?php echo 'Produtos'; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-hover text-nowrap" id="produtos">
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
								<a href="javascript:void(0)" id="registrar-link" onclick="registrarLink()">Registrar</a>
							</li>
						</ul>
					</nav>
					<h1><?php echo 'Links'; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-hover text-nowrap" id="links">
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
								<td><?php printf('<a href="%s" onclick="return false">%s</a>', $lnks->link, $lnks->link); ?></td>
								<td><?php printf('<a href="%s" target="_blank">%s</a>', $lnks->destino, $lnks->destino); ?></td>
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

				<!-- Mídias -->
				<div class="page-header">
					<nav>
						<ul class="nav nav-pills pull-right">
							<li role="presentation" class="active">
								<a href="javascript:void(0)" id="registrar-midia" onclick="registrarMidia()">Registrar</a>
							</li>
						</ul>
					</nav>
					<h1><?php echo 'Mídias'; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover text-nowrap" id="midias">
						<thead>
							<tr class="active">
								<th style="width: 40px">ID</th>
								<th>PRODUTO</th>
								<th>ID MÍDIA</th>
								<th>DESCRIÇÃO</th>
								<th>TIPO</th>
								<th>DIMENSÕES</th>
								<th style="width: 55px">MÍDIA</th>
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
								<td><?php printf('<a href="%s" class="btn btn-default btn-sm" target="_blank">Link</a>', $mid->midia); ?></td>
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

				<!-- Campanhas -->
				<div class="page-header">
					<nav>
						<ul class="nav nav-pills pull-right">
							<li role="presentation" class="active">
								<a href="javascript:void(0)" id="registrar-campanha" onclick="registrarCampanha()">Registrar</a>
							</li>
						</ul>
					</nav>
					<h1><?php echo 'Campanhas'; ?></h1>
				</div>
				<div class="table-responsive">
					<table class="table table-condensed table-hover text-nowrap" id="campanhas">
						<thead>
							<tr class="active">
								<th>PRODUTO</th>
								<th>LINK</th>
								<th style="width: 40px"
									title="ID da campanha">ID</th>
								<th>DATA</th>
								<th title="Plataforma">PLAT.</th>
								<th>MÉTODO</th>
								<th>TIPO MÍDIA</th>
								<th>ID MÍDIA</th>
								<th style="width: 60px">AÇÕES</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!$campanhas) : ?>

							<tr>
								<td class="text-center danger" colspan="9">Não há registros.</td>
							</tr>
							<?php else : ?>
								<?php foreach ($campanhas as $camp) : ?>

							<tr id="<?php echo 'camp'.$camp->id; ?>">
								<td><?php echo $this->infoprodutos_model->buscar_registro('infoprod', 'id', $camp->id_produto)->produto; ?></td>
								<td><?php echo $this->infoprodutos_model->buscar_registro('infoprod_links', 'id', $camp->link)->link; ?></td>
								<td><?php echo $camp->id; ?></td>
								<td><?php echo $camp->data; ?></td>
								<td><?php echo $camp->plataforma; ?></td>
								<td><?php echo $camp->metodo; ?></td>
								<td><?php echo $camp->tipo_midia; ?></td>
								<td><?php echo $camp->id_midia; ?></td>
								<td>
									<button type="button"
											class="btn btn-default btn-block btn-sm acao-gerar"
											value="<?php echo $camp->id; ?>"
											title="Gerar link">
										<span class="glyphicon glyphicon-link" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
								<?php endforeach; ?>
							<?php endif; ?>

						</tbody>
						<tfoot>
							<!-- Última linha em branco da tabela -->
							<tr>
								<td colspan="9"></td>
							</tr>
						</tfoot>
					</table>
				</div><!-- /Campanhas -->

			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
