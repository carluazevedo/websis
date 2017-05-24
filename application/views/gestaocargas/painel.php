<!DOCTYPE html>

<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title><?php echo $titulo; ?></title>
		<?php
		if (isset($incluir_cabecalho)) :
			foreach ($incluir_cabecalho as $i) : echo $i; endforeach;
		else :
			echo PHP_EOL;
		endif;
		?>
	</head>

	<body>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th hidden>DATA DE ATUALIZAÇÃO</th>
					<th>STATUS</th>
					<th>DT</th>
					<th>TRANSPORTADORA</th>
					<th title="Quantidade por embarque">ISCA</th>
					<th title="Solicitação de monitoramento">MON.</th>
					<th>ESCOLTA 200KM</th>
					<th>ESCOLTA PORTA A PORTA</th>
					<th>CHECK-IN</th>
					<th>CHECK-OUT</th>
					<th>ISCA INSERIDA</th>
					<th>KRONAONE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($gestao as $g) : ?>

				<tr>
					<td><?php echo $g->id; ?></td>
					<td hidden><?php echo $this->geral_model->formata_data_hora($g->data_atualizacao); ?></td>
					<td class="status"><?php echo $g->status; ?></td>
					<td><?php echo $g->dt; ?></td>
					<td><?php echo $g->transportadora; ?></td>
					<td><?php echo ($g->isca == 0) ? '-' : $g->isca; ?></td>
					<td><?php echo ($g->monitoramento == '' || $g->monitoramento == '0') ? '-' : $g->monitoramento; ?></td>
					<td><?php echo ($g->escolta_1 == '' || $g->escolta_1== '0') ? '-' : $g->escolta_1 ; ?></td>
					<td><?php echo ($g->escolta_2 == '' || $g->escolta_2== '0') ? '-' : $g->escolta_2 ; ?></td>
					<td><?php echo $this->geral_model->formata_data_hora($g->data_checkin); ?></td>
					<td><?php echo $this->geral_model->formata_data_hora($g->data_checkout); ?></td>
					<td><?php echo ($g->isca_inserida == '' || $g->isca_inserida == '0') ? '-' : $g->isca_inserida; ?></td>
					<td></td>
				</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
		<footer>
			<span id="end"></span>
		</footer>
		<!-- jQuery -->
		<script src="<?php echo base_url('jquery/jquery.min.js'); ?>"></script>
		<?php
		if (isset($incluir_rodape)) :
			foreach ($incluir_rodape as $i) : echo $i.PHP_EOL; endforeach;
		else :
			echo PHP_EOL;
		endif;
		?>
	</body>
</html>