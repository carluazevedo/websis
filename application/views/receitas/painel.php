<?php $this->load->view('modelos/barra_nav'); ?>

<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="page-header">
					<h1><?php echo $titulo_pagina; ?></h1>
				</div>
<?php
$string = '["a","b","c","d","e"]';

echo '<pre>';
var_dump(json_decode($string));
echo '</pre>';

$itens = json_decode($string);
foreach ($itens as $value) {
	echo $value.'<br>';
}
?>
			</div><!-- /.col-sm-10 -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
