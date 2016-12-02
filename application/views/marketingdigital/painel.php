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
								<th style="width: 50px">ID</th>
								<th>PRODUTO</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Gente Italiana</td>
							</tr>
						</tbody>
						<tfoot>
							<!-- Última linha em branco da tabela -->
							<tr>
								<td colspan="2"></td>
							</tr>
						</tfoot>
					</table>
				</div><!-- /.table-responsive -->
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
