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

			<div class="row">
				<div class="col-sm-12">
					<h2>Modo de preparo:</h2>
					<ol>
					<?php
						$p = json_decode($prep->preparo);
						foreach ($p->passos as $ps) {
							printf("<li>%s</li>", $ps);
						}
					?>
					</ol>

					<?php if ($font->fonte != '') : ?>
					<div class="panel panel-default">
						<div class="panel-body">
							<strong>Fonte:</strong>
							<?php
								$f = json_decode($font->fonte);
								if (count($f) == 1) :
									printf('<a target="_blank" href="%s">%s</a>', $f[0]->href, $f[0]->texto);
								elseif (count($f) >= 2) :
									printf('<a target="_blank" href="%s">%s</a>', $f[0]->href, $f[0]->texto);
									for ($n = 1; $n < count($f); $n++) {
										printf(' | <a target="_blank" href="%s">%s</a>', $f[$n]->href, $f[$n]->texto);
									}
								endif;
							?>
						</div>
					</div><!-- /.panel -->
					<?php endif; ?>

					<?php if ($info->categorias != '') : ?>
					<p>
						Categorias:
						<?php
							$c = json_decode($info->categorias);
							foreach ($c as $cat) {
								echo ('<a target="_blank" href="#">');
								printf('<span class="badge">%s</span>', $cat);
								echo ('</a> ');
							}
						?>
					</p>
					<?php endif; ?>

				</div><!-- /.col-sm-12 -->
			</div><!-- /.row -->
			</div><!-- /.col-sm-10 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
