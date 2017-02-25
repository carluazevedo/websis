<?php $this->load->view('modelos/barra_nav'); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<!-- div class="page-header">
					<h1><?php #echo $titulo_pagina; ?></h1>
				</div -->

				<h1><?php echo $info->titulo; ?></h1>
				<div class="alert alert-info" role="alert">
					A receita já foi testada? 
					<?php if ($info->foi_testada == false) : ?>

					<span class="label label-danger">Não</span>
					<?php elseif ($info->foi_testada == true): ?>

					<span class="label label-success">Sim</span>
					<?php endif; ?>

				</div><!-- /.alert -->

				<p>
					Rendimento: 
					<span class="badge">
						<?php
							if ($info->rendimento == 0) :
								echo 'Não informado';
							elseif ($info->rendimento == 1) :
								echo $info->rendimento.' porção';
							else :
								echo $info->rendimento.' porções';
							endif;
						?>

					</span>
				</p>

			<div class="row">
				<div class="col-sm-6">
					<!-- Imagem da receita -->
					<img class="img-thumbnail" src="<?php echo base_url($info->imagem); ?>">
				</div>

				<div class="col-sm-6">
					<h2>Ingredientes:</h2>
					<ul>
					<?php
						$i = json_decode($ingr->ingredientes);
						foreach ($i->principais as $ip) {
							printf("<li>%s</li>", $ip);
						}
					?>
					</ul>

					<?php if ($i->opcionais) : ?>
					<h3>Opcional</h3>
					<ul>
					<?php
						foreach ($i->opcionais as $io) {
							printf("<li>%s</li>", $io);
						}
					?>
					</ul>
					<?php endif; ?>
				</div>
			</div>

			</div><!-- /.col-sm-10 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
