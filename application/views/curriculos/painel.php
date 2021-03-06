<?php $this->load->view('modelos/barra_nav'); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="page-header hidden-print">
					<h1><?php echo $titulo_pagina; ?></h1>
				</div>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs hidden-print" role="tablist">
					<li role="presentation" class="active">
						<a href="#carlu" aria-controls="carlu" role="tab" data-toggle="tab" data-nome="CARLU PEREIRA AZEVEDO">
							Carlu
						</a>
					</li>
					<li role="presentation">
						<a href="#helen" aria-controls="helen" role="tab" data-toggle="tab" data-nome="HELEN BEATRIZ DE SOUSA AZEVEDO">
							Helen
						</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="carlu">
					</div><!-- /#carlu -->
					<div role="tabpanel" class="tab-pane fade" id="helen">
					</div><!-- /#helen -->
				</div>
			</div><!-- /.col-sm-12 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>